<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\Lead;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{
    public function home(Request $request)
    {   
        $codigo_parceiro = request()->query('resource');
        
        return view('site.home',['resource' => $codigo_parceiro]);
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
