<?php

namespace xGrz\Qbp\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use UnitEnum;

class Status extends Component
{
    public string $label = '';
    private string $color = '';

    public function __construct(UnitEnum|string $status, string $color = 'primary')
    {
        if (is_string($status)) {
            $this->label = $status;
            $this->color = $color;
        }
        if ($status instanceof UnitEnum) {

            $this->label = method_exists($status, 'getLabel')
                ? $status->getLabel()
                : $status->value;

            $this->color = method_exists($status, 'getColor')
                ? $status->getColor()
                : $color;
        }
    }

    private function getClassesForColorName(): string
    {
        return match ($this->color) {
            'gray' => 'text-gray-50 border-gray-600 bg-gray-600',
            'danger' => 'text-red-50 border-red-600 bg-red-500',
            'warning' => 'text-amber-50 border-amber-700 bg-amber-600',
            'success' => 'text-green-50 border-green-900 bg-green-500',
            'primary', 'info' => 'text-sky-50 border-sky-800 bg-sky-700',
            default => 'text-red-500'
        };
    }

    public function render(): View
    {
        return view('p::status.status', [
            'label' => $this->label,
            'color' => self::getClassesForColorName(),
        ]);
    }
}
