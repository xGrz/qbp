<?php

namespace xGrz\QuickPanel;

use Illuminate\Support\ServiceProvider;

class QuickPanelServiceProvider extends ServiceProvider
{
    public function register(): void
    {
    }

    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'qp');
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/quickPanel'),
            ], 'qp-publish');
        }
    }
}
