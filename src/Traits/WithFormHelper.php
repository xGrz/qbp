<?php

namespace xGrz\Qbp\Traits;

trait WithFormHelper
{

    protected function getBackground(): string
    {
        return 'bg-slate-800';
    }

    protected function getBackgroundChecked(): string
    {
        return 'bg-slate-700';
    }

    protected function getBackgroundDisabled(): string
    {
        return 'bg-slate-900';
    }

    protected function getRing():string
    {
        return 'peer-focus:ring-4 peer-focus:ring-blue-800';
    }

    protected function getBackgroundDisabledChecked(): string
    {
        return 'peer-disabled:peer-checked:bg-slate-800';
    }

    protected function getBorder(): string
    {
        return 'border border-slate-600';
    }

    protected function getSwitchClasses(): string
    {
        $checkbox['field'] = 'w-10 h-5 shrink-0 grow-0 rounded-full transition-all cursor-pointer';
        $checkbox['checkedMechanic'] = 'peer-checked:pl-5 peer-checked:[&>div]:drop-shadow-[0_0_.4rem_rgba(255,255,255,.9)]';
        $checkbox['ring'] = self::getRing();
        $checkbox['background'] = [
            self::getBackground(),
            'peer-checked:'.self::getBackgroundChecked(),
            'peer-disabled:'.self::getBackgroundDisabled(),
            'peer-disabled:peer-checked:'.self::getBackgroundDisabledChecked(),
            'peer-checked:[&>div]:bg-white  peer-disabled:[&>div]:bg-white/15'
        ];
        $checkbox['border'] = self::getBorder();
        $checkbox['disabled'] = 'peer-disabled:[&>div]:drop-shadow-[0_0_.4rem_rgba(255,255,255,.1)] peer-disabled:cursor-not-allowed';

        return collect( $checkbox)->flatten()->join(' ');
    }

    protected function getCheckboxClasses(): string
    {
        $checkbox['field'] = 'w-6 h-6 shrink-0 grow-0 rounded-md inline-flex items-center mt-1 text-white';
        $checkbox['checkboxMechanic'] = '[&>*]:hidden peer-checked:[&>*]:block peer-checked:drop-shadow-[0_0_.4rem_rgba(255,255,255,.4)]';
        $checkbox['ring'] = self::getRing();
        $checkbox['background'] = [
            self::getBackground(),
            'peer-checked:'.self::getBackgroundChecked(),
            'peer-disabled:'.self::getBackgroundDisabled(),
            'peer-disabled:peer-checked:'.self::getBackgroundDisabledChecked(),
            'peer-checked:[&>div]:bg-white  peer-disabled:[&>div]:bg-white/15'

        ];
        $checkbox['border'] = self::getBorder();
        $checkbox['disabled'] = 'peer-disabled:[&>div]:drop-shadow-[0_0_.4rem_rgba(255,255,255,.1)] peer-disabled:cursor-not-allowed';
        return collect( $checkbox)->flatten()->join(' ');
    }


}


