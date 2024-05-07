<?php

namespace xGrz\Qbp\View\Components\Flash;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FlashMessages extends Component
{
    public function render(): View
    {
        return view('p::flash.flashMessages');
    }
}
