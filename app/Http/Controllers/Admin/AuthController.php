<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Hash;
use Session;

class AuthController extends Controller
{
    public function login(){
        return view('admin.form');
    }

    public function attempt(Request $request){
        // Autenticar, verificar se existe usuário no banco de dados
        //dump($request)->all();
        $credentials = [
            'email' => $request->get('email'),
            'password' => $request->get('password')
        ];
        dump($credentials);

        $attemp = Auth::attempt($credentials);
        /*
        User::create(
            [
                'email' => 'roberto@ic.ufmt.br',
                'password' => Hash::make('123456'),
                'codigo'=> 'Roberto'
            ]
            );*/
        dump($attemp);
    }

    public function logout(){
        
    }

    public function dashboard(){
        return view('admin.dashboard');
    }
}
