<?php

namespace xGrz\Qbp\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Paper extends Component
{
    public array $componentProperties = ['class' => 'bg-slate-800'];

    public function __construct()
    {
    }

     public function render(): View
    {
        return view('p::paper.paper', $this->componentProperties);
    }
}
