<?php

namespace App\Acme\Reporting\Output;

/**
 * Interface SalesOutputInterface
 * @package App\Acme\Reporting\Output
 */
interface SalesOutputInterface
{
    /**
     * @param string $sales
     * @return mixed
     */
    public function output(string $sales);
}