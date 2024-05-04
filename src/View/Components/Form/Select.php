<?php

namespace xGrz\Qbp\View\Components\Form;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use xGrz\Qbp\Traits\WithComponentProps;

class Select extends Component
{
    use WithComponentProps;

    public function __construct(string|null $label = null, string|null $labelClasses = null, string|null $placeholder = null)
    {
        self::setupClasses();
        $this
            ->addProperty('label', $label)
            ->addProperty('labelClasses', $labelClasses)
            ->addProperty('isLabelDisabled', is_null($label))
            ->addProperty('placeholder', $placeholder);
    }

    public function render(): View
    {
        return view('p::form.select', self::getComponentProperties());
    }
}
