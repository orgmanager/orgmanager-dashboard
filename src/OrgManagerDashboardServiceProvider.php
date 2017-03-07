<?php

namespace OrgManager\Dashboard;

use Illuminate\Support\ServiceProvider;

class OrgManagerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->publishes([
        __DIR__.'/assets/js/components/OrgManagerData.vue' => resource_path('assets/assets/js/components/OrgManagerData.vue'),
        __DIR__.'/assets/sass/components/_orgmanager-statistics.scss' => resource_path('assets/sass/components/_orgmanager-statistics.scss'),
    ], 'assets');
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        //
    }
}
