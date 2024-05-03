<?php

namespace xGrz\Qbp\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use xGrz\Qbp\Traits\WithComponentProps;

class Table extends Component
{
    use WithComponentProps;

    public function __construct(bool|string $highlight = true, $size = 'normal', string|bool $divider = true)
    {
        self::setupClasses('border-collapse w-full');
        self::applyRowHoverClasses($highlight);
        self::applySize($size);
        self::applyDivider($divider);
    }

    public function render(): View
    {
        return view('p::table.table', self::getComponentProperties());
    }

    private function applySize(string $size): void
    {
        $sizeClasses = match ($size) {
            'small' => 'px-1 py-0.5',
            'large' => 'p-2.5',
            'normal' => 'p-1.5',
            default => $size,
        };
        $this->addClass($sizeClasses, '[&_td]');
        $this->addClass($sizeClasses, '[&_th]');
    }

    private function applyRowHoverClasses(bool|string $highlight): void
    {
        if (!$highlight) return;
        if ($highlight === true) {
            $this
                ->addClass('bg-slate-700', '[&_tbody_tr:hover]')
                ->addClass('text-slate-100', '[&_tbody_tr:hover]');
            return;
        }

        $highlightClasses = explode(' ', $highlight);
        foreach ($highlightClasses as $highlightClass) {
            $this->addClass($highlightClass, '[&_tbody_tr:hover]');
        }
    }

    private function applyDivider(bool|string $divider): void
    {
        if (!$divider) return;
        if ($divider === true) {
            $this->addClass('border-b border-b-slate-700', '[&_tbody_tr:not(:last-child)]');
            return;
        }
        $this->addClass($divider, '[&_tbody_tr]');

    }
}
