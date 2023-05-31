<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* As rotas definem que recurso será carregado quando uma url for digitada.
 pode carregar um controler ou uma View.
 Quando uma uma url precisar carregar dados do Banco De Dados 
 a rota deve carregar um controler     */


 Route::get('/', function () {
    // return view('welcome');
    echo '<h1>hello world!!!</h1>';

     


});
