<?php

namespace App\Http\Controllers;

use App\Models\Orphanage;
use App\Models\User;
use App\Models\Blog;
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
        $users = User::all();
        return view("front.about", compact("users"));
    }

    public function blog(Request $request)
    {
        $blogs = Blog::paginate(9);
        return view("front.blog", compact("blogs"));
    }

    public function orphanages(Request $request)
    {
        $orphelinats = Orphanage::paginate(9);
        return view("front.orphanages", compact("orphelinats"));
    }
    //
}
