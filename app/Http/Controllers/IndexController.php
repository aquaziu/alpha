<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
    //
    }
    public function home()
    {
        return view('template.home');
    }
    public function about()
    {
        return view('template.about');
    }
    public function contact()
    {
        return view('template.contact');
    }
}
