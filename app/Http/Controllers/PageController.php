<?php

namespace App\Http\Controllers;

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
        return view('home');
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