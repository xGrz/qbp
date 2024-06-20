<?php

namespace xGrz\Qbp\View\Components\Form;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Carbon;
use Illuminate\View\Component;

class DatePicker extends Component
{
    public array $componentProperties = [];

    public function __construct(string $type = 'date', string $label = null, string $id = null, Carbon|string|null $min = null, Carbon|string|null $max = null)
    {
        $this->componentProperties['type'] = strtolower($type);
        $this->componentProperties['label'] = $label;
        $this->componentProperties['id'] = $id;
        $this->componentProperties['min'] = self::processDate($min);
        $this->componentProperties['max'] = self::processDate($max);
    }

    protected function processDate(Carbon|string|null $date): ?string
    {
        if (!$date) return null;
        if ($date instanceof Carbon) {
            return $date->format('Y-m-d');
        }
        try {
            return Carbon::parse($date)->format('Y-m-d');
        } catch (\Exception $e) {
        }
        return null;
    }

    public function render(): View
    {
        return view('p::form.datepicker', $this->componentProperties);
    }
}
