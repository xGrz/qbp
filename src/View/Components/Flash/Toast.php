<?php

namespace xGrz\Qbp\View\Components\Flash;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use xGrz\Qbp\Enums\StatusType;

class Toast extends Component
{
    protected ?StatusType $severity;
    protected string $baseColor = 'green';

    public function __construct(protected string $message = '', string $severity = 'info', protected int $duration = 8000)
    {
        $this->severity = StatusType::tryFrom(strtolower($severity));
        if (!$this->severity) throw new \Exception('Invalid severity `' . $severity . '`. Allowed values are: `info`, `success`, `warning` and `danger`.');
    }

    public function render(): View|false
    {
        if (session()->has('info')
            || session()->has('success')
            || session()->has('warning')
            || session()->has('danger')) {
            self::getBasicColor();
            return self::renderToast();
        }
        return false;
    }

    private function getBasicColor(): void
    {
        $this->baseColor = match ($this->severity) {
            StatusType::SUCCESS => 'green',
            StatusType::WARNING => 'amber',
            StatusType::DANGER => 'red',
            default => 'blue',
        };
    }

    private function renderToast(): View
    {
        return view('p::flash.toast', [
            'message' => $this->message,
            'severity' => $this->severity,
            'duration' => $this->duration,
            'baseColor' => $this->baseColor,
        ]);
    }
}
