<?php

namespace App\Providers;

use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        app('api.exception')->register(function (\Exception $exception) {
           $request = Request::capture();
           return app('App\Exceptions\Handler')->render($request, $exception);
        });
    }
}
