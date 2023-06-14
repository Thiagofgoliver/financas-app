@extends('app')

@section('conteudo')
<div class="p-5">
    <h2 class="text-lg text-bold">
     Editar Movimento
    </h2>
    <form id="frm-editar" method="post" action="">
        <!-- ponto importante proteção ante invasão sql injector -->
        @csrf

    <label for="descricao">
        Descrição
    </label><br>
    <textarea class="border" name="descricao" id="descrição" 
    cols="60" rows="5" required>
    {{$dado->descricao}}
    </textarea>
    
    <p class="mt-5">Tipo:</p>
    <input type="radio" name="tipo" value="Receita"  required @if($dado-> tipo == 'Receita')checked @endif> Receita
    
    <input class="ms-5" type="radio" name="tipo" 
    value="Despesa" required  @if($dado-> tipo == 'Despesa')checked @endif>  
    Despesa
    <p class="mt-5">
       <label for="valor">
        valor:
       </label><br>
       <input  class="border" type="number" name="valor" step="0.01" required value="{{$dado->valor}}">
    </p>

    <p class="mt-5">
        <input class="border rounded-lg p-3 bg-cyan-500" type="submit" value="Atualizar">

    </p>

    </form>
</div>

@endsection