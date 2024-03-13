<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view("pages.home");
    }

    public function about()
    {
        return view("pages.about");
    }
    public function contact()
    {
        return view("pages.contact");
    }
    
    public function faqs()
    {
        return view("pages.faq");
    }

    public function pricing()
    {
        return view("pages.pricing");
    }

}
