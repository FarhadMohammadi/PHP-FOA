<?php

namespace App\Solid\Shapes;


/**
 * Class Square
 * @package App\Solid\Shapes
 */
class Square implements Shape
{
    /**
     * @var
     */
    protected $width;
    /**
     * @var
     */
    protected $height;

    public function __construct(int $width, int $height)
    {
        $this->width  = $width;
        $this->height = $height;
    }

    /**
     * @return mixed
     */
    public function area()
    {
        return $this->width * $this->height;
    }
}