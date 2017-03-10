<?php

namespace App\Solid\Reporting\Output;


class HtmlOutput implements SalesOutputInterface
{
    /**
     * @param string $sales
     * @return mixed
     */
    public function output(string $sales)
    {
        return "<h3>The Report Result is: {$sales}</h3>";
    }
}