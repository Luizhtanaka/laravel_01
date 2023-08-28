<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {   
        $codigo_parceiro = request('resource');
        return view('site.home',['codigo_parceiro' => $codigo_parceiro]);
        
        
        //return view('site.layout.master',['codigo_parceiro' => $codigo_parceiro]);
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
