<?php

namespace App\Http\Controllers;

use App\Solid\Reporting\Output\HtmlOutput;
use App\Solid\Reporting\SalesReporter;
use App\Repositories\SaleRepository;
use App\Solid\Shapes\AreaCalculator;
use App\Solid\Shapes\Circle;
use App\Solid\Shapes\Cube;
use App\Solid\Shapes\Square;
use App\Solid\Shapes\Trapezius;
use App\Solid\Shapes\Triangle;
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

        $saleReport = $report->between($begin, $end, new HtmlOutput());

        $shapes[] = new Square(3, 4);
        $shapes[] = new Triangle(3, 4);
        $shapes[] = new Circle(3);
        $shapes[] = new Trapezius(2, 4, 5);
        $shapes[] = new Cube(2);

        $area = (new AreaCalculator())->calculate($shapes);

        return view('home', compact('saleReport', 'area'));
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