<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Visit;
use Illuminate\Http\Request;
use Torann\GeoIP\Facades\GeoIP;
use Illuminate\Support\Facades\App;
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
        // if (App::environment('local')) {
        //     return $next($request);
        // }
        // $geoData = GeoIP::getLocation($request->ip()) ?? [];

        $data = [
            'session_id' => $request->session()->getId(),
            'ip_address' => $request->ip(),
            'user_agent' => $request->header('User-Agent'),
            'url'        => $request->path(),
            'referrer'   => $request->header('referer'),
            // 'country'    => $geoData['country'] ?? 'Unknown',
            // 'city'       => $geoData['city'] ?? 'Unknown',
        ];

        Visit::create($data);

        return $next($request);
    }
}
