<?php

namespace xGrz\Qbp\View\Components\Pagination;

use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Contracts\View\View;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\View\Component;

class Pagination extends Component
{
    protected bool $livewire = false;

    public function __construct(protected LengthAwarePaginator $source, string $livewire = null)
    {
        $this->livewire = (bool) $livewire;
    }

    public function render(): Htmlable|View|string
    {
        return $this->livewire
            ? $this->source->links('p::pagination.livewire-pagination')
            : $this->source->links('p::pagination.laravel-pagination');
    }
}
