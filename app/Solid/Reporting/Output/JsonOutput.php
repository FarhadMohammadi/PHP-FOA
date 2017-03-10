<?php

namespace App\Solid\Reporting\Output;


class JsonOutput implements SalesOutputInterface
{
    /**
     * @param string $sales
     * @return mixed
     */
    public function output(string $sales)
    {
        return json_decode($sales);
    }
}