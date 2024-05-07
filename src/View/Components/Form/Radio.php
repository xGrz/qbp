<?php

namespace xGrz\Qbp\View\Components\Form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use xGrz\Qbp\Traits\WithComponentProps;
use xGrz\Qbp\Traits\WithFormHelper;

class Radio extends Component
{

    use WithComponentProps;
    use WithFormHelper;

    public function __construct(string $id = null, string $label = null, string $description = null)
    {
        self::setupClasses();
        $this
            ->addProperty('id', $id ?? 'radio_' . md5(microtime(true) . $label . $description))
            ->addProperty('label', $label)
            ->addProperty('description', $description)
            ->addProperty('radioClasses', self::getRadioClasses())
            ->addProperty('labelContainerClasses', self::getLabelContainerClasses())
        ;
    }


    public function render(): View|Closure|string
    {
        return view('p::form.radio', self::getComponentProperties());
    }
}
