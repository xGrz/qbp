<?php

namespace xGrz\Qbp\View\Components\Form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use xGrz\Qbp\Traits\WithComponentProps;

class Radio extends Component
{

    use WithComponentProps;

    public function __construct(string $label = null, string $name = null, string $value = null, string $id = null, string $description = null, string $descriptionClasses = null)
    {
        self::setupClasses();
        $this
            ->addProperty('id', $id ?? 'id_' . md5(microtime(true)))
            ->addProperty('name', $name)
            ->addProperty('value', $value)
            ->addProperty('label', $label)
            ->addProperty('description', $description)
            ->addProperty('descriptionClasses', $descriptionClasses)
        ;
    }


    public function render(): View|Closure|string
    {
        return view('p::form.radio', self::getComponentProperties());
    }
}
