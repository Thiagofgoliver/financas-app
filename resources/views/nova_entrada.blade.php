@extends('app')

@section('conteudo')
<div class="p-5">
    <h2 class="text-lg text-bold">
        Nova Entrada
    </h2>
    <form id="frm-nova-entrada" method="post" action="{{route('store')}}">
        <!-- ponto importante proteção ante invasão sql injector -->
        @csrf

    <label for="descricao">
        Descrição
    </label><br>
    <textarea class="border" name="descricao" id="descrição" 
    cols="60" rows="5" required>
    </textarea>
    
    <p class="mt-5">Tipo:</p>
    <input type="radio" name="tipo" 
    value="Receita"> Receita
    

    <input class="ms-5" type="radio" name="tipo" 
    value="Despesa" required>
    Despesa
    
    <p class="mt-5">
       <label for="valor">
        valor:
       </label><br>
       <input  class="border" type="number" name="valor" step="0.01" required>
    </p>

    <p class="mt-5">
        <input class="border rounded-lg p-3 bg-cyan-500" type="submit" value="Enviar">

    </p>

    </form>
</div>

@endsection