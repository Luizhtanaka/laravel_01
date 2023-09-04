<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lead;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class LeadController extends Controller
{
    public function createLead(Request $request)
    {

        $codigo_parceiro = request(['Nome','Email','resource']);
        //$codigo_parceiro = request()->query('resource');
        //dd($codigo_parceiro['resource']);
        //dd($codigo_parceiro['resource']);

        $user = DB::table('users')
        //->join('pessoa','users.pessoa_id','=','pessoa.id')
        ->where('codigo','=', $codigo_parceiro['resource'])
        ->first();
        //dd($user);
        if (isset($user->codigo) && !empty($user->codigo)) {
            
            // O CODIGO DE USUÁRIO EXISTE E SERÁ GRAVADO O LEADS NA TABELA leads
            $lead = new Lead();

            $lead->user_id  = $user->id;
            $lead->Nome     = $codigo_parceiro['Nome'];
            $lead->email    = $codigo_parceiro['Email'];
            $lead->save();

        }
        /* else {
            // O CODIGO NAO EXISTE, SERÁ GRAVADO COMO USUÁRIO DEFAULT
            $lead = new Lead();

            $lead->user_id = 1;
            $lead->nome = 'Administrador';
            $lead->email = 'luizhenrique.tk@hotmail.com';
            $lead->save();
        }*/
        return redirect()->route('site.home',['resource'=>$user->codigo])->with("success","Seu email foi cadastrado com sucesso!");
    }
}