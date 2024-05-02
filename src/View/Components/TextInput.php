<?php

namespace xGrz\Qbp\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TextInput extends Component
{
    public array $componentProperties = [];

    public function __construct(string $type = 'text', string $label = null, string $id = null, array|false $suggestions = false, bool $withTextError = true)
    {
        $type = strtolower($type);
        self::hackNumericField($type);
        $this->componentProperties['label'] = $label;
        $this->componentProperties['suggestions'] = $suggestions;
        $this->componentProperties['id'] = $id;
        $this->componentProperties['withTextError'] = $withTextError;

        $this->componentProperties['suggestionsId'] = $suggestions
            ? 'suggestions_' . md5(json_encode($suggestions))
            : '';
    }

    private function hackNumericField($type): void
    {
        $this->componentProperties['type'] = $type;
        $this->componentProperties['inputMode'] = false;
        match ($this->componentProperties['type']) {
            'number', 'integer' => self::setFieldType('numeric'),
            'float' => self::setFieldType('decimal'),
            default => self::setFieldType(null, $type),
        };
    }

    private function setFieldType(?string $inputMode, string $inputType = 'text'): void
    {
        $this->componentProperties['type'] = $inputType;
        $this->componentProperties['inputMode'] = $inputMode;
    }

    public function render(): View
    {
        return view('p::components.textinput', $this->componentProperties);
    }
}
