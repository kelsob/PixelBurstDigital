<?php

namespace App\Http\Controllers;

class ServicesController extends Controller
{
    public function index()
    {
        return view('pages.services');
    }

    public function webDesign()
    {
        return view('pages.services.web-design');
    }

    public function branding()
    {
        return view('pages.services.branding');
    }

    public function seo()
    {
        return view('pages.services.seo');
    }
} 