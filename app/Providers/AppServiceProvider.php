<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Глобально
        //View::share('date', date('Y'));

        // Локально
        // /user* - маршрут
        /*View::composer('/user*', function ($view) {
            $view->with('test', '123');
        });*/

        RateLimiter::for('api', function (Request $request) {
            // 60 запросов в минуту по id пользователя или ip-адресу пользователя
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });
    }
}
