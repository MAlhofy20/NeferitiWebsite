<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Visit;
use Illuminate\Http\Request;
use Torann\GeoIP\Facades\GeoIP;
use Symfony\Component\HttpFoundation\Response;

class TrackVisits
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        $geoData = GeoIP::getLocation($request->ip());

        $data = [
            'session_id' => $request->session()->getId(),
            'ip_address' => $request->ip(),
            'user_agent' => $request->header('User-Agent'),
            'url'        => $request->path(),   // أو $request->fullUrl()
            'referrer'   => $request->header('referer'),
            'country' => $geoData['country'],
            'city' => $geoData['city'],
        ];

        // احفظ البيانات في الجدول
        Visit::create($data);

        return $next($request);
    }
}
