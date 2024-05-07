<?php

namespace xGrz\Qbp\View\Components\Form;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use xGrz\Qbp\Traits\WithComponentProps;
use xGrz\Qbp\Traits\WithFormHelper;

class Checkbox extends Component
{
    use WithComponentProps;
    use WithFormHelper;


    public function __construct(string $id = null, string $label = '', string $description = null, protected ?string $asSwitch = null)
    {
        $this
            ->addProperty('id', $id ?? 'checkbox_' . md5(microtime(true) . $label . $description))
            ->addProperty('label', $label)
            ->addProperty('labelContainerClasses', self::getLabelContainerClasses())
            ->addProperty('description', $description);

        $this->asSwitch
            ? $this->addProperty('switchClasses', self::getSwitchClasses())
            : $this->addProperty('checkboxClasses', self::getCheckboxClasses());

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
