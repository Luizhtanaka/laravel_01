<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view('admin.form');
    }

    public function attempt(Request $request){
        // Autenticar, verificar se existe usuário no banco de dados
        dump($request)->all();
        $credentials = [
            'email' => $request->get('email'),
            'password' => $request->get('password')
        ];
        dd($request);

        $attemp = Auth::attempt($credentials);

        dump($attemp);
    }

    public function logout(){
        
    }

    public function dashboard(){
        return view('admin.dashboard');
    }
}
