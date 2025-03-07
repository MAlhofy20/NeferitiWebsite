<?php

namespace App\Http\Controllers\Dashboard;

use Carbon\Carbon;
use App\Models\Visit;
use App\Models\Action;
use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class HomeDashController extends Controller
{
    public function index(Request $request)
    {
        // تحديد النطاق الزمني (افتراضي شهر)
        $timeRange = $request->get('time_range', 'month');

        // تعيين تاريخ البداية والنهاية
        switch ($timeRange) {
            case 'day':
                $startDate = Carbon::now()->subDay();
                break;
            case 'week':
                $startDate = Carbon::now()->subWeek();
                break;
            case 'month':
                $startDate = Carbon::now()->startOfMonth();
                break;
            case 'year':
                $startDate = Carbon::now()->subYear();
                break;
            default:
                $startDate = Carbon::now()->startOfMonth();
                break;
        }

        $endDate = Carbon::now();

        // الكاردات: حساب الجلسات، الزيارات، العملاء المحتملين ونسبة التحويل
        $sessionsCount = Visit::whereBetween('created_at', [$startDate, $endDate])
            ->distinct('session_id')
            ->count();

        $visitsCount = Visit::whereBetween('created_at', [$startDate, $endDate])
            ->count();

        $potentialLeadsCount = Action::whereBetween('created_at', [$startDate, $endDate])
            ->count();

        $conversionRate = ($sessionsCount > 0) ? round(($potentialLeadsCount / $sessionsCount) * 100, 1) : 0;

        // تحليل زوار الويب والموبايل باستخدام user_agent
        $allVisits = Visit::select('user_agent')
            ->whereBetween('created_at', [$startDate, $endDate])
            ->get();

        $webVisitorsCount = 0;
        $mobileVisitorsCount = 0;

        $agent = new Agent();
        foreach ($allVisits as $visit) {
            $agent->setUserAgent($visit->user_agent);
            if ($agent->isMobile()) {
                $mobileVisitorsCount++;
            } else {
                $webVisitorsCount++;
            }
        }

        // الصفحات الأكثر زيارة
        $topPages = Visit::select('url', DB::raw('COUNT(*) as visits_count'))
            ->whereBetween('created_at', [$startDate, $endDate])
            ->groupBy('url')
            ->orderByDesc('visits_count')
            ->take(10)
            ->get();

        // الدول والمحافظات الأكثر زيارة
        $topLocations = Visit::select('country', 'city', DB::raw('COUNT(*) as visits_count'))
            ->whereBetween('created_at', [$startDate, $endDate])
            ->groupBy('country', 'city')
            ->orderByDesc('visits_count')
            ->take(10)
            ->get();

        // مصادر الزيارات الأكثر شيوعًا (روابط خارجية فقط)
        $baseUrl = config('app.url');

        $topReferrers = Visit::select('referrer', DB::raw('COUNT(*) as visits_count'))
            ->whereNotNull('referrer')
            ->where('referrer', 'NOT LIKE', "%$baseUrl%")
            ->whereBetween('created_at', [$startDate, $endDate])
            ->groupBy('referrer')
            ->orderByDesc('visits_count')
            ->take(10)
            ->get();

        // أهم 10 أزرار تم التفاعل معها
        $topActions = Action::select('action_name', DB::raw('COUNT(*) as actions_count'))
            ->whereBetween('created_at', [$startDate, $endDate])
            ->groupBy('action_name')
            ->orderByDesc('actions_count')
            ->take(10)
            ->get();

        // البيانات اليومية للشارت
        $dates = [];
        $sessionsData = [];
        $leadsData = [];

        for ($date = $startDate->copy(); $date->lte($endDate); $date->addDay()) {
            $formattedDate = $date->format('Y-m-d');
            $dates[] = $formattedDate;

            $sessionsData[] = Visit::whereDate('created_at', $formattedDate)
                ->distinct('session_id')
                ->count();

            $leadsData[] = Action::whereDate('created_at', $formattedDate)
                ->count();
        }

        // تمرير البيانات إلى الـ Blade
        return view('dashboard.home', [
            'sessionsCount' => $sessionsCount,
            'visitsCount' => $visitsCount,
            'potentialLeadsCount' => $potentialLeadsCount,
            'conversionRate' => $conversionRate,
            'topPages' => $topPages,
            'topLocations' => $topLocations,
            'topReferrers' => $topReferrers,
            'topActions' => $topActions,
            'webVisitorsCount' => $webVisitorsCount,
            'mobileVisitorsCount' => $mobileVisitorsCount,
            'dates' => $dates,
            'sessionsData' => $sessionsData,
            'leadsData' => $leadsData,
            'timeRange' => $timeRange,
        ]);
    }
}
