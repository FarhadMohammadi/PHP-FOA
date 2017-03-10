<?php

namespace App\Acme\Reporting\Output;


class XmlOutput implements SalesOutputInterface
{
    /**
     * @param string $sales
     * @return mixed
     */
    public function output(string $sales)
    {
        return $sales;
    }
}