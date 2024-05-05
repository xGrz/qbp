<?php

namespace xGrz\Qbp\View\Components\Form;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use xGrz\Qbp\Traits\WithComponentProps;

class Checkbox extends Component
{
    use WithComponentProps;


    public function __construct(protected ?string $asSwitch = null, ?string $id = null, string $label = '', string $description = null, string $descriptionClasses = null)
    {
        $this
            ->addProperty('id', $id ?? 'id_' . md5(microtime(true)))
            ->addProperty('label', $label)
            ->addProperty('description', $description)
        ;

        $this->componentProperties['checkboxClasses'] = 'cursor-pointer w-6 h-6 rounded border peer-focus:ring-4 peer-focus:ring-blue-800 mt-1 [&>*]:hidden peer-checked:[&>*]:block';
        $this->componentProperties['descriptionClasses'] = $descriptionClasses ?? 'text-sm text-slate-500';
    }

    public function render(): View
    {
        $template = !$this->asSwitch
            ? 'p::form.checkbox'
            : 'p::form.checkbox-switch';
        return view($template, self::getComponentProperties());

    }
}
