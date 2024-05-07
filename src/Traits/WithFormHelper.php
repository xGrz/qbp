<?php

namespace xGrz\Qbp\Traits;

trait WithFormHelper
{
    private function buildElementClasses(array $source): string
    {
        $classes = [];
        foreach ($source as $definitionGroup) {
            foreach ($definitionGroup as $prefix => $definition) {
                $classes[] = self::joinWithPrefix($definition, $prefix);
            }
        }
        return join(' ', $classes);
    }

    private function joinWithPrefix(string|array $classes, string|int $prefix = null): string
    {
        if (is_numeric($prefix)) $prefix = null;
        if (is_string($classes)) {
            $classes = explode(' ', $classes);
        }
        foreach ($classes as $class) {
            $definition[] = $prefix
                ? join(':', [$prefix, $class])
                : $class;
        }
        return join(' ', $definition ?? []);
    }

    protected function getColor(string $type = null, bool $asTextColor = false): string
    {
        $color = match ($type) {
            default => 'bg-yellow-50',
            'active' => 'bg-yellow-500',
            'disabled' => 'bg-slate-500',
            'disabled-active' => 'bg-slate-400',
        };

        return $asTextColor
            ? str_replace('bg-', 'text-', $color)
            : $color;
    }

    protected function getRing(): string
    {
        return 'ring-4 ring-blue-800';
    }

    protected function getBorder(string $type = null): string
    {
        return match ($type) {
            default => 'border-yellow-600/50',
            'active' => 'border-yellow-600/75',
            'disabled' => 'border-slate-700',
            'disabled-active' => 'border-slate-600',
        };
    }

    protected function getBackground(string $type = null): string
    {
        return match ($type) {
            default => 'bg-white/5',
            'active' => 'bg-white/10',
            'disabled' => 'bg-slate-500/5',
            'disabled-active' => 'bg-slate-500/15',
        };
    }

    protected function getDescription(string $type = null): string
    {
        return match ($type) {
            'disabled' => 'text-slate-600',
            default => 'text-slate-500',
        };
    }

    protected function getLabel(string $type = null): string
    {
        return match ($type) {
            'active' => 'text-slate-100',
            'disabled' => 'text-slate-600',
            default => 'text-slate-400'
        };
    }

    protected function getCheckboxClasses(): string
    {
        $checkbox['object'] = [
            'w-6 h-6 shrink-0 grow-0 rounded transition-all cursor-pointer border flex items-center [&>*]:m-auto',
            self::getBorder(),
            '[&>*]' => 'hidden',
            'peer-focus' => self::getRing()
        ];
        $checkbox['behaviour'] = ['peer-checked:[&>*]:block', 'peer-disabled:cursor-not-allowed'];
        $checkbox['state-not-active'] = [
            self::getBackground()
        ];
        $checkbox['state-active'] = [
            'peer-checked:[&>*]' => [self::getColor('active', asTextColor: true)],
            'peer-checked' => [self::getBorder('active'), self::getBackground('active')]
        ];
        $checkbox['state-disabled'] = [
            'peer-disabled:[&>*]' => [self::getColor('disabled', true)],
            'peer-disabled' => [self::getBorder('disabled'), self::getBackground('disabled')]
        ];
        $checkbox['state-disabled-active'] = [
            'peer-disabled:peer-checked:[&>*]' => [self::getColor('disabled-active', true)],
            'peer-disabled:peer-checked' => [self::getBorder('disabled-active'), self::getBackground('disabled-active')],
        ];
        return self::buildElementClasses($checkbox);
    }

    protected function getSwitchClasses(): string
    {
        $switch['object'] = [
            'w-10 h-5 shrink-0 grow-0 rounded-full transition-all cursor-pointer border',
            self::getBorder(),
            '[&>*]' => ['h-full', 'rounded-full'],
            'peer-focus' => self::getRing()
        ];
        $switch['behaviour'] = ['peer-checked:pl-5', 'peer-disabled:cursor-not-allowed'];
        $switch['state-not-active'] = [
            '[&>*]' => self::getColor(),
            self::getBackground(),
        ];
        $switch['state-active'] = [
            'peer-checked:[&>*]' => [self::getColor('active')],
            'peer-checked' => [self::getBorder('active'), self::getBackground('active')],
        ];
        $switch['state-disabled'] = [
            'peer-disabled:[&>*]' => [self::getColor('disabled')],
            'peer-disabled' => [self::getBorder('disabled'), self::getBackground('disabled')],
        ];
        $switch['state-disabled-active'] = [
            'peer-disabled:peer-checked:[&>*]' => [self::getColor('disabled-active')],
            'peer-disabled:peer-checked' => [self::getBorder('disabled-active'), self::getBackground('disabled-active')],
        ];
        return self::buildElementClasses($switch);
    }

    protected function getRadioClasses(): string
    {
        $radio['object'] = [
            'w-6 h-6 shrink-0 grow-0 rounded-full transition-all cursor-pointer border flex items-center [&>*]:m-auto',
            self::getBorder(),
            'peer-focus' => self::getRing()
        ];
        $radio['behaviour'] = [
            'peer-checked:[&>*]' => 'w-3 h-3 rounded-full',
            'peer-disabled' => 'cursor-not-allowed',
        ];
        $radio['state-not-active'] = [
            self::getBackground(),
        ];
        $radio['state-active'] = [
            'peer-checked:[&>*]' => [self::getColor('active')],
            'peer-checked' => [self::getBorder('active'), self::getBackground('active')],
        ];
        $radio['state-disabled'] = [
            'peer-disabled:[&>*]' => [self::getColor('disabled')],
            'peer-disabled' => [self::getBorder('disabled'), self::getBackground('disabled')]
        ];
        $radio['state-disabled-active'] = [
            'peer-disabled:peer-checked:[&>*]' => [self::getColor('disabled-active')],
            'peer-disabled:peer-checked' => [self::getBorder('disabled-active'), self::getBackground('disabled-active')],
        ];

        return self::buildElementClasses($radio);
    }

    protected function getLabelContainerClasses(): string
    {
        $label = [
            'content' => [
                '[&>label]' => 'cursor-pointer ' . self::getLabel(),
                'peer-checked:[&>label]' => 'transition-all ' . self::getLabel('active'),
                'peer-disabled:[&>label]' => 'transition-all cursor-not-allowed ' . self::getLabel('disabled'),
            ],
            'description' => [
                '[&>div]' => 'text-sm' . ' ' . self::getDescription(),
                '[&>div]:peer-disabled' => self::getDescription('disabled'),
            ],
        ];

        return self::buildElementClasses($label);
    }

}


