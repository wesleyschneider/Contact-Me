<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('/enviar', function(Illuminate\Http\Request $request) {
    $contato = new App\Contato();
    $contato->nome = $request->get("nome");
    $contato->email = $request->get("email");
    $contato->mensagem = $request->get("mensagem");

    $contato->save();

    echo "Sua mensagem foi armazenada com sucesso!, Código ".$contato->id;
});

Route::get('/lista', function(){
    return view('lista', array('contatos' => App\Contato::all()));
});
