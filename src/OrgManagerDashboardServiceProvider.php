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
        __DIR__.'/assets/js/components/OrgManagerData.vue' => public_path('wip/wip'),
        __DIR__.'/assets/sass/components/_orgmanager-statistics.scss' => public_path('wip/wip'),
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
