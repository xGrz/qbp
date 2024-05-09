<?php

namespace xGrz\Qbp\View\Components\Pagination;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PaginationItem extends Component
{
    protected bool $disabled = false;
    protected bool $livewire = false;

    public function __construct(string $disabled = null, string $livewire = null)
    {
        $this->disabled = (bool) $disabled;
        $this->livewire = (bool) $livewire;
    }

    public function render(): View
    {
        return $this->disabled
            ? view('p::pagination.items.disabled')
            : view('p::pagination.items.active', [
                'livewire' => $this->livewire
            ]);
    }
}
