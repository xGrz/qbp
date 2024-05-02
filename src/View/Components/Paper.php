<?php

namespace xGrz\Qbp\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Paper extends Component
{
    public array $componentProperties = [];

    public function __construct(string $background = 'bg-slate-800')
    {
        $this->componentProperties['background'] = $background;
    }

     public function render(): View
    {
        return view('p::paper.paper', $this->componentProperties);
    }
}
