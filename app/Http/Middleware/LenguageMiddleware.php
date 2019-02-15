<?php

namespace App\Http\Middleware;

use Closure;
use App;
use Config;

class LenguageMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $lang = substr($request->server('HTTP_ACCEPT_LANGUAGE'),0, 2);

        if ($lang != 'en' && $lang != 'es') {
            $lang = 'en';
        }

        App::setLocale($lang);

        return $next($request);
    }
}
