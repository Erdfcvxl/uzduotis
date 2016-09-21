<?php
/**
 * Created by PhpStorm.
 * User: R0k45
 * Date: 9/21/2016
 * Time: 1:56 AM
 */

namespace App;


class FilterData extends \Czim\Filter\FilterData
{
    protected $rules = [
        'color'   => 'string',
        'shape' => 'string',
        'length' => 'string',
        'size' => 'string',
        'price' => 'string',
        'type' => 'string',
    ];

    // Default values and the parameter names accessible to the Filter class
    // If (optional) filter attributes are not provided, these defaults will be used:
    protected $defaults = [
        'color'   => null,
        'shape' => null,
        'length' => null,
        'size' => true,
        'price' => true,
        'type' => true,
    ];
}