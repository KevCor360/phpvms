<?php

namespace App\Support\Units;

use App\Contracts\Unit;
use PhpUnitsOfMeasure\PhysicalQuantity\Length;

class Distance extends Unit
{
    public $responseUnits = [
        'km',
        'mi',
        'nmi',
    ];

    /**
     * Distance constructor.
     *
     * @param float  $value
     * @param string $unit
     *
     * @throws \PhpUnitsOfMeasure\Exception\NonNumericValue
     * @throws \PhpUnitsOfMeasure\Exception\NonStringUnitName
     */
    public function __construct(float $value, string $unit)
    {
        $this->unit = setting('units.distance');
        $this->instance = new Length($value, $unit);
    }
}
