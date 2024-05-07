<?php

namespace xGrz\Qbp\View\Components\Pagination;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PaginationItem extends Component
{

    public function __construct(public ?string $href = null)
    {
    }

    public function render(): View
    {
        return !$this->href
            ? view('p::pagination.items.disabled')
            : view('p::pagination.items.active', [
                'href' => $this->href,
            ]);
    }
}
