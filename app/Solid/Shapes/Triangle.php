<?php

namespace App\Solid\Shapes;

/**
 * Class Triangle
 * @package App\Solid\Shapes
 */
class Triangle implements Shape
{
    /**
     * @var
     */
    protected $height;

    /**
     * @var
     */
    protected $base;

    public function __construct(int $base, int $height)
    {
        $this->base   = $base;
        $this->height = $height;
    }

    /**
     * @return float|int
     */
    public function area()
    {
        return ($this->base * $this->height) / 2;
    }
}