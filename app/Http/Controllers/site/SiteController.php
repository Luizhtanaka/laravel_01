<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {
        return view('site.home');
    }

    public function contact()
    {
        return view('site.contact');
    }

    public function sobre()
    {
        return view('site.sobre');
    }
}
