<?php

namespace App\Http\Middleware\Api;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;

class Language
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $locale = $request->header()['lang'][0];
        $locale = substr($locale, 0, 2);
        if (isset($locale) AND array_key_exists($locale, Config::get('app.locales'))) {
            App::setLocale($locale);
        } else { // This is optional as Laravel will automatically set the fallback language if there is none specified
            App::setLocale(Config::get('app.fallback_locale'));
        }

        return $next($request);
    }
}
