<?php

namespace xGrz\Qbp;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use xGrz\Qbp\View\Components\TextInput;
use xGrz\Qbp\View\Components\Toast;

class QuickBladePanelServiceProvider extends ServiceProvider
{

    public function register(): void
    {
    }

    public function boot(): void
    {
        // https://github.com/khatabwedaa/blade-css-icons/blob/main/src/BladeCssIconsServiceProvider.php
        // Consider this - easiest way to add components to code
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'p');
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/quick-blade-panel'),
            ], 'quick-blade-panel');
        }
        self::registerBladeShares();
        self::registerBladeComponents();
    }

    private function registerBladeComponents()
    {
        Blade::component('p-textinput', TextInput::class);
        Blade::component('p-toast', Toast::class);
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
