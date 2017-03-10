<?php

namespace App\Solid\Shapes;


/**
 * Class Trapezius
 * @package App\Solid\Shapes
 */
class Trapezius implements Shape
{
    /**
     * @var
     */
    protected $height;

    /**
     * @var
     */
    protected $topBase;

    /**
     * @var
     */
    protected $bottomBase;

    public function __construct(int $topBase, int $bottomBase, int $height)
    {
        $this->topBase    = $topBase;
        $this->bottomBase = $bottomBase;
        $this->height     = $height;
    }

    /**
     * @return float|int
     */
    public function area()
    {
        return (($this->topBase + $this->bottomBase) * $this->height) / 2;
    }
}