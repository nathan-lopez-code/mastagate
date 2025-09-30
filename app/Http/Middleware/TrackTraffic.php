<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Traffic;
use Carbon\Carbon;

class TrackTraffic
{
    public function handle($request, Closure $next)
    {
        $today = Carbon::today()->toDateString();
        $sessionKey = 'visited_' . $today;

        if (!$request->session()->has($sessionKey)) {
            // Récupère ou crée l'entrée du jour
            $traffic = Traffic::firstOrNew(['source' => 'site', 'date' => $today]);
            $traffic->visits = $traffic->visits + 1;
            $traffic->save();

            $request->session()->put($sessionKey, true);
        }

        return $next($request);
    }
}
