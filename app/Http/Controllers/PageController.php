<?php

class PageController
{
    public function index()
    {
       return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function aboutCulture()
    {
        return view("about-culture");
    }

    public function contacts()
    {
        return view('contacts');
    }

    public function news()
    {
        return view("news");
    }
}