<?php

namespace xGrz\Qbp;

use Illuminate\Support\Facades\View;
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
            ], 'quick-blade-panel');
        }
        self::registerBladeShares();
    }

    private function registerBladeShares():void
    {
        View::share('qbp_appName', '');
        View::share('qbp_useTailwind', true);
        View::share('qbp_useAlpine', false);
        View::share('qbp_navigationTemplate', 'p::navigation.container');
        View::share('qbp_navigationItems', '');
        View::share('qbp_footerTemplate', 'p::footer.content');
    }
}
