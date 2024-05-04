<?php

namespace xGrz\Qbp\Traits;

trait WithComponentProps
{
    public array $componentProperties = [];

    protected function getComponentProperties(): array
    {
        if (isset($this->componentProperties['classes']) && is_array($this->componentProperties['classes'])) {
            $this->componentProperties['classes'] = implode(' ', $this->componentProperties['classes']);
        }
        return $this->componentProperties;
    }

    protected function addProperty(string $key, mixed $value): static
    {
        $this->componentProperties[$key] = $value;
        return $this;
    }

    protected function addClass(string $class, string|null $prefix = null): static
    {
        $classes = explode(' ', $class);
        foreach ($classes as $classValue) {
            $this->componentProperties['classes'][] = $prefix
                ? $prefix . ':' . $classValue
                : $classValue;
        }
        return $this;
    }

    protected function applyTextAlign(string|bool $left, string|bool $right, string|bool $center): void
    {
        foreach (['left' => $left, 'right' => $right, 'center' => $center] as $align => $value) {
            if ($value === true && strtolower($value) !== 'false') {
                $this->addClass("text-$align");
            }
        }
    }

    protected function setupClasses(string $defaultClasses = null): void
    {
        if (!isset($this->componentProperties['classes'])) {
            $this->componentProperties['classes'] = $defaultClasses ? [$defaultClasses] : [];
        }
    }
}
