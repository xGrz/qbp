<?php

namespace xGrz\Qbp\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TextInput extends Component
{
    private array $props = [];

    public function __construct(string $type = 'text', string $label = null, string $id = null, array|false $suggestions = false, bool $withTextError = true)
    {
        $type = strtolower($type);
        self::hackNumericField($type);
        $this->props['label'] = $label;
        $this->props['suggestions'] = $suggestions;
        $this->props['id'] = $id;
        $this->props['withTextError'] = $withTextError;

        $this->props['suggestionsId'] = $suggestions
            ? 'suggestions_' . md5(json_encode($suggestions))
            : '';
    }

    private function hackNumericField($type): void
    {
        $this->props['type'] = $type;
        $this->props['inputMode'] = false;
        match ($this->props['type']) {
            'number', 'integer' => self::setFieldType('numeric'),
            'float' => self::setFieldType('decimal'),
            default => self::setFieldType(null, $type),
        };
    }

    private function setFieldType(?string $inputMode, string $inputType = 'text'): void
    {
        $this->props['type'] = $inputType;
        $this->props['inputMode'] = $inputMode;
    }

    public function render(): View
    {
        return view('p::components.textinput', $this->props);
    }
}
