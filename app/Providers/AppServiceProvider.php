<?php

namespace App\Providers;

use App\Models\Job;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Route;
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
        // Предотвращает отложенную загрузку SQL-запроса
        //Model::preventLazyLoading(true);

        // Использовать бутстрап
        //Paginator::useBootstrapFour();

        /*Gate::define('edit-job', function (User $user, Job $job) {
            return $job->employer->user->is($user);
        });*/

        //Route::pattern('id', '[0-9]+');
        //Route::pattern('slug', '[A-za-z0-9-]+');
    }
}
