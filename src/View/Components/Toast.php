<?php

namespace xGrz\Qbp\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use xGrz\Qbp\Enums\StatusType;

class Toast extends Component
{
    protected ?StatusType $severity;

    public function __construct(protected string $message = '', string $severity = 'info', protected int $duration = 10000)
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
            return self::renderToast();
        }
        return self::renderToast();
        return false;
    }

    private function renderToast(): View
    {
        return view('p::components.toast', [
            'message' => $this->message,
            'severity' => $this->severity,
            'duration' => $this->duration,
        ]);
    }
}
