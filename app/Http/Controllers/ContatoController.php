<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Contato;

class ContatoController extends Controller
{   
    //Exibe o formulário para enviar uma mensagem
    public function index(){
        return view('welcome');
    }

    public function enviar(Request $request, Contato $contato, \App\NotificacaoInterface $notificar){
        $contato->nome = $request->get("nome");
        $contato->email = $request->get("email");
        $contato->mensagem = $request->get("mensagem");

        $contato->save();

        $notificar->notificar();

        echo "Sua mensagem foi armazenada com sucesso!, Código ".$contato->id;
    }

    public function lista(){
        return view('lista', array('contatos' => Contato::all()));
    }

}
