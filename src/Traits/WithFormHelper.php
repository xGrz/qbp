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

    protected function getBackground(string $type = null): string
    {
        return match ($type) {
            'active' => 'bg-slate-600',
            'disabled' => 'bg-slate-800',
            'disabled-active' => 'bg-slate-800/90',
            default => 'bg-slate-700'
        };
    }

    protected function getRing(): string
    {
        return 'ring-4 ring-blue-800';
    }

    protected function getBorder(string $type = null): string
    {
        return match ($type) {
            'active' => 'border-slate-600/90',
            'disabled' => 'border-slate-700',
            'disabled-active' => 'border-slate-500/35',
            default => 'border-slate-600'
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

    protected function getSwitchClasses(): string
    {
        $checkbox = [];
//        $checkbox['objectDefinition'] = 'w-10 h-5 shrink-0 grow-0 rounded-full transition-all cursor-pointer';
//        $checkbox['mechanic'] = [
//            'peer-checked' => 'pl-5 [&>*]:drop-shadow-[0_0_.4rem_rgba(255,255,255,.9)]'
//        ];
//        $checkbox['ring'] = ['peer-focus' => self::getRing()];
//        $checkbox['background'] = [
//            self::getBackground(),
//            'peer-checked' => self::getBackgroundChecked(),
//            'peer-disabled' => self::getBackgroundDisabled(),
//            'peer-disabled:peer-checked' => self::getBackgroundDisabledChecked(),
//        ];
//        $checkbox['border'] = self::getBorder();
//        $checkbox['disabled'] = [
//            'peer-disabled' => self::getDisabledBorder() . ' [&>*]:drop-shadow-none peer-disabled:cursor-not-allowed',
//        ];
//        $checkbox['circle'] = [
//            '[&>*]' => 'bg-wite',
//            'peer-checked:[&>*]' => 'bg-white',
//            'peer-disabled:[&>*]' => 'bg-gray-700 border-gray-600',
//            'peer-disabled:peer-checked:[&>*]' => 'bg-gray-600'
//        ];
//
        return self::buildElementClasses($checkbox);
    }

    protected function getCheckboxClasses(): string
    {
        $checkbox = [];
//        $checkbox['field'] = 'w-6 h-6 shrink-0 grow-0 rounded-md inline-flex items-center mt-1 text-white';
//        $checkbox['checkboxMechanic'] = '[&>*]:hidden peer-checked:[&>*]:block peer-checked:drop-shadow-[0_0_.4rem_rgba(255,255,255,.4)]';
//        $checkbox['ring'] = ['peer-focus' => self::getRing()];
//        $checkbox['background'] = [
//            self::getBackground(),
//            'peer-checked:' . self::getBackgroundChecked(),
//            'peer-disabled:' . self::getBackgroundDisabled(),
//            'peer-disabled:peer-checked:' . self::getBackgroundDisabledChecked(),
//            'peer-checked:[&>div]:bg-white  peer-disabled:[&>div]:bg-white/15'
//
//        ];
//        $checkbox['border'] = self::getBorder();
//        $checkbox['disabled'] = [
//            self::getDisabledBorder(),
//            'peer-disabled:[&>div]:drop-shadow-[0_0_.4rem_rgba(255,255,255,.1)] peer-disabled:cursor-not-allowed'
//        ];
        return self::buildElementClasses($checkbox);
    }

    protected function getRadioClasses(): string
    {
        $radio['area'] = ['shrink-0 mt-0.5 flex items-stretch w-6 h-6 border cursor-pointer', 'rounded-full', self::getBorder()];
        $radio['ring']['peer-focus'] = self::getRing();
        $radio['state-empty'] = [
            '[&>*]:hidden',
            self::getBackground()
        ];
        $radio['state-selected'] = [
            'peer-checked' => ['drop-shadow-[0_0_.4rem_rgba(255,255,255,.4)]', self::getBackground('active')],
            'peer-checked:[&>*]' => 'block self-center w-3 h-3 bg-slate-50 rounded-full m-auto',
        ];
        $radio['state-disabled'] = [
            'peer-disabled' => [self::getBorder('disabled'), self::getBackground('disabled'), 'cursor-not-allowed']
        ];
        $radio['state-disabled-selected'] = [
            'peer-disabled:peer-checked' => [
                self::getBorder('disabled-active'),
                self::getBackground('disabled-active'),
                'drop-shadow-none',
            ],
            'peer-disabled:peer-checked:[&>*]' => ['bg-slate-500']

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


