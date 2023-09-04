<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        return view('admin.form');
    }

    public function attempt(Request $request){
        // Autenticar, verificar se existe usuário no banco de dados
    }

    public function logout(){
        
    }

    public function dashboard(){
        return view('admin.dashboard');
    }
}
