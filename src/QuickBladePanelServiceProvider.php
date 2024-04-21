<?php

namespace xGrz\Qbp;

use Illuminate\Support\ServiceProvider;

class QuickBladePanelServiceProvider extends ServiceProvider
{
    public function register(): void
    {
    }

    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'p');
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/quick-blade-panel'),
            ], 'quick-blade-panel-publish');
        }
    }
}
