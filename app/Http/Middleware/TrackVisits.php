<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Visit;
use Illuminate\Http\Request;
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
        $data = [
            'session_id' => $request->session()->getId(),
            'ip_address' => $request->ip(),
            'user_agent' => $request->header('User-Agent'),
            'url'        => $request->path(),   // أو $request->fullUrl()
            'referrer'   => $request->header('referer'),
        ];

        // احفظ البيانات في الجدول
        Visit::create($data);

        return $next($request);
    }
}
