<?php

namespace App\Solid\Shapes;

/**
 * Class Circle
 * @package App\Solid\Shapes
 */
class Circle implements Shape
{
    /**
     * @var
     */
    protected $radius;

    public function __construct(int $radius)
    {
        $this->radius = $radius;
    }

    /**
     * @return number
     */
    public function area()
    {
        return pow($this->radius, 2) * pi();
    }
}