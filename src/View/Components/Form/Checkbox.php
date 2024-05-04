<?php

namespace xGrz\Qbp\View\Components\Form;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Checkbox extends Component
{
    public function __construct()
    {
    }

    public function render(): View
    {
        return view('p::form.checkbox');
    }
}
