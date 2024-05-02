<?php

namespace xGrz\Qbp\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Button extends Component
{

    public array $componentProperties = [];
    private array $classes = ['inline-block text-center select-none transition-all'];

    public function __construct(string $size = 'regular', public ?string $href = null, $color = 'primary', bool $disabled = false)
    {
        $this->componentProperties['disabled'] = $disabled;
        self::setupButtonSize($size);
        self::setupButtonColor($color);
    }

    public function render(): View
    {
        $this->componentProperties['componentClasses'] = implode(' ', $this->classes);
        return $this->href
            ? view('p::button.button-link', $this->componentProperties)
            : view('p::button.button', $this->componentProperties);


    }

    private function setupButtonSize(string $size): void
    {
        $this->classes[] = match (strtolower($size)) {
            'none' => '',
            'small' => 'px-[.5rem] py-[.05rem] text-[0.95rem]',
            'large' => 'px-[.8rem] py-[.4rem] text-lg',
            default => 'px-2 py-[.25rem]',
        };
    }

    private function setupButtonColor(string $color): void
    {
        if ($this->componentProperties['disabled']) $color = 'disabled';
        $this->classes[] = match (strtolower($color)) {
            'none' => '',
            'danger' => 'bg-red-700 hover:bg-red-800 active:bg-red-900 text-white',
            'gray', 'grey' => 'bg-gray-400 hover:bg-gray-500 bg-gray-600 active:bg-gray-700 text-white',
            'info' => 'bg-sky-500 hover:bg-sky-600 active:bg-sky-800 text-white',
            'success' => 'bg-green-700 hover:bg-green-800 active:bg-green-900 text-white',
            'warning' => 'bg-amber-600 hover:bg-amber-700 active:bg-amber-800 text-white',
            'primary' => 'bg-sky-700 hover:bg-sky-800 active:bg-sky-900 text-white',
            'disabled' => 'bg-gray-700 text-gray-500 cursor-not-allowed',
            default => $color,
        };
    }
}
