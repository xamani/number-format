<?php

namespace Xamani\NumberFormat;

use Laravel\Nova\Fields\Field;

class NumberFormat extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'number-format';

    public function format($value = '0,0')
    {
        return $this->withMeta([
            'format' => $value
        ]);
    }
}
