<?php

namespace App\Solid\Shapes;


/**
 * Class Cube
 * @package App\Solid\Shapes
 */
class Cube implements Shape
{
    /**
     * @var int
     */
    protected $edge;

    /**
     * Cube constructor.
     * @param int $edge
     */
    public function __construct(int $edge)
    {
        $this->edge = $edge;
    }

    /**
     * @return number
     */
    public function area()
    {
        return pow($this->edge, 2) * 6;
    }
}