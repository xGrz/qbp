<?php

namespace xGrz\Qbp\View\Components\Form;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use xGrz\Qbp\Traits\WithComponentProps;

class Checkbox extends Component
{
    use WithComponentProps;


    public function __construct(protected ?string $asSwitch = null, ?string $id = null, string $label = '', string $description = null)
    {
        $this
            ->addProperty('id', $id ?? 'id_' . md5(microtime(true)))
            ->addProperty('label', $label)
            ->addProperty('description', $description)
        ;
    }

    public function render(): View
    {
        $template = !$this->asSwitch
            ? 'p::form.checkbox'
            : 'p::form.checkbox-switch';
        return view($template, self::getComponentProperties());

    }
}
