<?php

namespace xGrz\Qbp;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use xGrz\Qbp\View\Components\Button;
use xGrz\Qbp\View\Components\Flash\FlashMessages;
use xGrz\Qbp\View\Components\Flash\Toast;
use xGrz\Qbp\View\Components\Form\Checkbox;
use xGrz\Qbp\View\Components\Form\Radio;
use xGrz\Qbp\View\Components\Form\Select;
use xGrz\Qbp\View\Components\Link;
use xGrz\Qbp\View\Components\NavItem;
use xGrz\Qbp\View\Components\NotFound;
use xGrz\Qbp\View\Components\Pagination\Pagination;
use xGrz\Qbp\View\Components\Pagination\PaginationItem;
use xGrz\Qbp\View\Components\Paper;
use xGrz\Qbp\View\Components\Status;
use xGrz\Qbp\View\Components\Table\Table;
use xGrz\Qbp\View\Components\Table\TableBody;
use xGrz\Qbp\View\Components\Table\TableCell;
use xGrz\Qbp\View\Components\Table\TableFooter;
use xGrz\Qbp\View\Components\Table\TableHeader;
use xGrz\Qbp\View\Components\Table\TableHeading;
use xGrz\Qbp\View\Components\Table\TableRow;
use xGrz\Qbp\View\Components\TextInput;


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
                __DIR__ . '/../resources/views' => resource_path('views/vendor/quick-blade-panel'),
            ], 'quick-blade-panel');
        }
        self::registerBladeShares();
        self::registerBladeComponents();
    }

    private function registerBladeComponents(): void
    {
        Blade::component('p-paper', Paper::class);
        Blade::component('p-button', Button::class);
        Blade::component('p-link', Link::class);

        Blade::component('p-pagination', Pagination::class);
        Blade::component('p-pagination-item', PaginationItem::class);


        Blade::component('p-flash-messages', FlashMessages::class);
        Blade::component('p-toast', Toast::class);

        Blade::component('p-table', Table::class);
        Blade::component('p-thead', TableHeader::class);
        Blade::component('p-tbody', TableBody::class);
        Blade::component('p-tfoot', TableFooter::class);
        Blade::component('p-tr', TableRow::class);
        Blade::component('p-th', TableHeading::class);
        Blade::component('p-td', TableCell::class);

        Blade::component('p-input', TextInput::class);
        Blade::component('p-checkbox', Checkbox::class);
        Blade::component('p-radio', Radio::class);
        Blade::component('p-select', Select::class);

        Blade::component('p-nav-item', NavItem::class);
        Blade::component('p-not-found', NotFound::class);
        Blade::component('p-status', Status::class);
    }

    private function registerBladeShares(): void
    {
        View::share('qbp_appName', '');
        View::share('qbp_useTailwind', true);
        View::share('qbp_useAlpine', false);
        View::share('qbp_navigationTemplate', 'p::navigation.container');
        View::share('qbp_navigationItems', '');
        View::share('qbp_footerTemplate', 'p::footer.content');
    }
}
