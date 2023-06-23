<?php

namespace App\Http\Controllers;


//campos do formulario
use Illuminate\Http\Request;
//campos da tabela no bd
use App\Models\Movimento;
use Illuminate\Support\Facades\Auth;



class MovimentoController extends Controller
{
    //Escrever aqui os metodos para o crud

   //C do crud "create"
   public function store(Request $request){
    //instacia o Model movimento 
    $movimento = new Movimento;


    $movimento->descricao = $request->descricao;
    $movimento->tipo = $request->tipo;
    $movimento->valor = $request->valor;
    $movimento->user_id = auth()->user()->id;
    //grava na tabela do DB 
    $movimento->save();
    //redirecionar ao dashboard
    return redirect('dashboard');
    
   }

   //R do crud Read
  public function read(){
    $user = auth()->user()->id;

    // carrega as despesas na variavel
    //SELECT WHERE

    $despesas = Movimento::where('tipo','Despesa')->where('user_id', $user)->get();
    //carrega receitas
    $receitas = Movimento::where('tipo','Receita')->where('user_id', $user)->get();
    // carrega a view passando os dados consultados

    $dados = [
        'despesas'=> $despesas,
        'receitas'=>$receitas,


    ];
    return view('dashboard',$dados);
 
  }
  // U do crud  "UPDATE" - carregar dados 
  public function form_update($id){

    $dado = Movimento::findOrFail($id);
    return view('form_update',['dado'=>$dado]);
    
  }
  //u do crud update - atualiza dados
  // pegar dados do formulario request
  public function update(Request $request){

   Movimento ::findOrfail($request->id)->update($request->all());

   return redirect('dashboard');


  }





}

