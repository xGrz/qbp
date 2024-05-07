<?php

namespace xGrz\Qbp\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Link extends Component
{
    private string $colorDefinition = '';
    public function __construct(string $color = 'primary')
    {
        $this->colorDefinition = match ($color) {
            'danger' => 'text-red-700 hover:text-red-900',
            'gray', 'grey' => 'text-gray-400 hover:text-gray-500',
            'info' => 'text-sky-700 hover:text-sky-900',
            'success' => 'text-green-700 hover:text-green-900',
            'warning' => 'text-amber-600 hover:text-amber-800',
            default => 'text-sky-500 hover:text-sky-600',
        };
    }

    public function render(): View
    {
        return view('p::link.link', [
            'linkColors' => $this->colorDefinition,
        ]);
    }
}
