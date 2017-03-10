<?php

namespace App\Solid\Shapes;


/**
 * Class AreaCalculator
 * @package App\Solid\Shapes
 */
class AreaCalculator
{
    /**
     * @param $shapes
     * @return float|int
     */
    public function calculate(array $shapes): float
    {
        foreach ($shapes as $shape) {
            $areas[] = $shape->area();
        }

        return floor(array_sum($areas));
    }
}