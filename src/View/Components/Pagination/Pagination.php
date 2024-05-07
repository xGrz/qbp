<?php

namespace xGrz\Qbp\View\Components\Pagination;

use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Contracts\View\View;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\View\Component;

class Pagination extends Component
{
    private bool $viewInfoOnly = false;

    public function __construct(public LengthAwarePaginator $source, string $infoOnly = null)
    {
        $this->viewInfoOnly = (bool)$infoOnly;
    }

    public function render(): Htmlable|View
    {
        return $this->viewInfoOnly
            ? $this->source->links('p::pagination.info.results')
            : $this->source->links('p::pagination.templates.full-pagination');
    }
}
