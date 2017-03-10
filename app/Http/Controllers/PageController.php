<?php

namespace App\Http\Controllers;

use App\Solid\Reporting\Output\HtmlOutput;
use App\Solid\Reporting\SalesReporter;
use App\Repositories\SaleRepository;
use Carbon\Carbon;

/**
 * Class PageController
 * @package App\Http\Controllers
 */
class PageController
{
    /**
     * @return mixed
     */
    public function index()
    {
        $report = new SalesReporter(new SaleRepository());

        $begin = Carbon::now()->subDay(10);
        $end   = Carbon::now();

        $result = $report->between($begin, $end, new HtmlOutput());

        return view('home', compact('result'));
    }

    /**
     * @return mixed
     */
    public function about()
    {
        return view('about');
    }

    /**
     * @return mixed
     */
    public function aboutCulture()
    {
        return view("about-culture");
    }

    /**
     * @return mixed
     */
    public function contacts()
    {
        return view('contacts');
    }

    /**
     * @return mixed
     */
    public function news()
    {
        return view("news");
    }
}