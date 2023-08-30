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
        $codigo_parceiro = request('resource');
        //$user = User::where('codigo', $codigo_parceiro)->first();

        $user = DB::table('users')
                ->join('pessoa','users.pessoa_id','=','pessoa.id')
                ->where('codigo', $codigo_parceiro)
                ->first();
        //dd($user);
        if (isset($user->codigo) && !empty($user->codigo)) {
            // O CODIGO DE USUÁRIO EXISTE E SERÁ GRAVADO O LEADS NA TABELA leads
            $lead = new Lead();

            $lead->user_id  = $user->id;
            $lead->Nome     = $user->nome;
            $lead->email    = $user->email;
            $lead->save();

        }
        /* else {
            // O CODIGO NAO EXISTE, SERÁ GRAVADO COMO USUÁRIO DEFAULT
            $lead = new Lead();

            $lead->user_id = 1;
            $lead->nome = 'Administrador';
            $lead->email = 'luizhenrique.tk@hotmail.com';
            $lead->save();
        }
        */

        //$codigo_parceiro = request('resource');
        return view('site.home',['codigo_parceiro' => $codigo_parceiro]);
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
