<?php

namespace Komeyl\Dashboard;

use Illuminate\Support\ServiceProvider;
use Komeyl\Dashboard\Commands\PublishDashboard;

class DashboardServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

        foreach (glob(__DIR__ . '/Http/Helpers/*.php') as $file) {
            require_once $file;
        }

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/route.php');
        $this->loadRoutesFrom(__DIR__ . '/routes/breadcrumbs.php');
        $this->loadViewsFrom(__DIR__ . '/Views', 'dashboard');
        $this->loadTranslationsFrom(__DIR__ . '/Translations', 'Lang');

        if ($this->app->runningInConsole()) {
            $this->commands([
                PublishDashboard::class,
            ]);
        }

        $this->publishes([
            __DIR__ . '/Views' => base_path('resources/views/dashboard'),
        ], 'views');

        $this->publishes([
            __DIR__ . '/Assets' => public_path('assets'),
        ], 'public');

        $this->publishes([
            __DIR__ . '/Http/Controllers' => base_path('app/Http/Controllers/Dashboard'),
        ], 'controllers');

    }
}
