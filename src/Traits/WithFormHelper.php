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
            'active' => 'bg-red-600',
            'disabled' => 'bg-grey-800',
            'disabled-active' => 'bg-blue-800/90',
            default => 'bg-slate-yellow'
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

    protected function getCheckboxClasses(): string
    {
        $checkbox['object'] = [
            'w-6 h-6 shrink-0 grow-0 rounded transition-all cursor-pointer border',
            self::getBorder(),
            '[&>*]' => 'hidden'
        ];
        $checkbox['active'] = [
            'peer-checked:[&>*]' => 'block text-yellow-500',
        ];
        return self::buildElementClasses($checkbox);
    }

    protected function getSwitchClasses(): string
    {
        $switch['object'] = [
            'w-10 h-5 shrink-0 grow-0 rounded-full transition-all cursor-pointer border',
            self::getBorder(),
            '[&>*]' => 'h-full bg-yellow-600 rounded-full'
        ];
        $switch['active'] = [
            'peer-checked' => 'pl-5'
        ];
        return self::buildElementClasses($switch);
    }

    protected function getRadioClasses(): string
    {
        $radio['object'] = [
            'w-6 h-6 shrink-0 grow-0 rounded-full transition-all cursor-pointer border',
            self::getBorder(),
            'flex items-center [&>*]:m-auto'
        ];
        $radio['active'] = [
            'peer-checked:[&>*]' => 'w-3 h-3 bg-yellow-600 rounded-full'
        ];
        return self::buildElementClasses($radio);
    }

//    protected function getSwitchClasses(): string
//    {
//        $switch['area'] = [
//            'w-10 h-5 shrink-0 grow-0 rounded-full transition-all cursor-pointer border',
//            self::getBorder(),
//            '[&>*]' => 'h-full bg-white rounded-full'
//        ];
//        $switch['ring']['peer-focus'] = self::getRing();
//        $switch['state-empty'] = [
//            self::getColor(), self::getBorder()
//        ];
//        $switch['state-selected'] = [
//            'peer-checked' => ['drop-shadow-[0_0_.4rem_rgba(255,255,255,.4)]', self::getColor('active'), 'pl-5'],
//        ];
//        $switch['state-disabled'] = [
//            'peer-disabled' => [self::getBorder('disabled'), self::getColor('disabled'), 'cursor-not-allowed']
//        ];
//        $switch['state-disabled-selected'] = [
//            'peer-disabled:peer-checked' => [
//                self::getBorder('disabled-active'),
//                self::getColor('disabled-active'),
//                'drop-shadow-none',
//            ],
//            'peer-disabled:peer-checked:[&>*]' => ['bg-slate-500']
//
//        ];
//        return self::buildElementClasses($switch);
//    }
//
//    protected function getCheckboxClasses(): string
//    {
//        $checkbox = [];
//        $checkbox['area'] = ['shrink-0 mt-0.5 flex items-stretch w-6 h-6 border cursor-pointer', 'rounded-md', self::getBorder()];
//        $checkbox['ring']['peer-focus'] = self::getRing();
//        $checkbox['state-empty'] = [
//            '[&>*]:hidden',
//            self::getColor()
//        ];
//        $checkbox['state-selected'] = [
//            'peer-checked' => ['drop-shadow-[0_0_.4rem_rgba(255,255,255,.4)]', self::getColor('active')],
//            'peer-checked:[&>*]' => 'block self-center m-auto',
//        ];
//        $checkbox['state-disabled'] = [
//            'peer-disabled' => [self::getBorder('disabled'), self::getColor('disabled'), 'cursor-not-allowed']
//        ];
//        $checkbox['state-disabled-selected'] = [
//            'peer-disabled:peer-checked' => [
//                self::getBorder('disabled-active'),
//                self::getColor('disabled-active'),
//                'drop-shadow-none',
//            ],
//            'peer-disabled:peer-checked:[&>*]' => ['bg-slate-500']
//
//        ];
//        return self::buildElementClasses($checkbox);
//    }
//
//    protected function getRadioClasses(): string
//    {
//        $radio['area'] = ['shrink-0 mt-0.5 flex items-stretch w-6 h-6 border cursor-pointer', 'rounded-full', self::getBorder()];
//        $radio['ring']['peer-focus'] = self::getRing();
//        $radio['state-empty'] = [
//            '[&>*]:hidden',
//            self::getColor()
//        ];
//        $radio['state-selected'] = [
//            'peer-checked' => ['drop-shadow-[0_0_.4rem_rgba(255,255,255,.4)]', self::getColor('active')],
//            'peer-checked:[&>*]' => 'block self-center w-3 h-3 bg-slate-50 rounded-full m-auto',
//        ];
//        $radio['state-disabled'] = [
//            'peer-disabled' => [self::getBorder('disabled'), self::getColor('disabled'), 'cursor-not-allowed']
//        ];
//        $radio['state-disabled-selected'] = [
//            'peer-disabled:peer-checked' => [
//                self::getBorder('disabled-active'),
//                self::getColor('disabled-active'),
//                'drop-shadow-none',
//            ],
//            'peer-disabled:peer-checked:[&>*]' => ['bg-slate-500']
//
//        ];
//        return self::buildElementClasses($radio);
//    }

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


