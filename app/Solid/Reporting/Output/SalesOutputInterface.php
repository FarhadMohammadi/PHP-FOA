<?php

namespace App\Solid\Reporting\Output;

/**
 * Interface SalesOutputInterface
 * @package App\Solid\Reporting\Output
 */
interface SalesOutputInterface
{
    /**
     * @param string $sales
     * @return mixed
     */
    public function output(string $sales);
}