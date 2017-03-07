<?php

namespace OrgManager\Dashboard;

use Illuminate\Support\ServiceProvider;

class OrgManagerDashboardServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/assets/js/components/OrgManagerData.vue' => resource_path('assets/js/components/OrgManagerData.vue'),
                __DIR__.'/assets/js/app.js' => resource_path('assets/js/app.js'),
                __DIR__.'/assets/sass/components/_orgmanager-statistics.scss' => resource_path('assets/sass/components/_orgmanager-statistics.scss'),
                __DIR__.'/assets/sass/app.scss' => resource_path('assets/sass/app.scss'),
            ], 'orgmanager-dashboard/assets');
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        //
    }
}
