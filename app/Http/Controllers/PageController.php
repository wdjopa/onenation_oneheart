<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(Request $request)
    {
        return view("front.home");
    }
    public function contact(Request $request)
    {
        return view("front.contact");
    }
    public function about(Request $request)
    {
        return view("front.about");
    }


    public function blog(Request $request)
    {
        return view("front.blog");
    }

    
    public function orphanages(Request $request)
    {
        return view("front.orphanages");
    }
    //
}
