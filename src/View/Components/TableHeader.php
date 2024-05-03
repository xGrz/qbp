<?php

namespace xGrz\Qbp\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use xGrz\Qbp\Traits\WithComponentProps;

class TableHeader extends Component
{
    use WithComponentProps;

    public function __construct(string|bool $left = false, string|bool $right = false, string|bool $center = false)
    {
        self::setupClasses();
        self::applyTextAlign($left, $right, $center);
    }

    public function render(): View
    {
        return view('p::table.table-header', $this->getComponentProperties());
    }
}
