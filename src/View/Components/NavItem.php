<?php

namespace xGrz\Qbp\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NavItem extends Component
{


    public function __construct(public string $routeName)
    {
    }

    public function render(): View
    {
        return view('p::navigation.nav-item', [
            'isActive' => request()->routeIs(str($this->routeName)->replaceEnd('index', '')->append('*')),
            'url' => route($this->routeName),
        ]);
    }
}
