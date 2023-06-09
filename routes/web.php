<?php

use App\Http\Controllers\MovimentoController;
use App\Models\Movimento;
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
    return view('auth.login');
     

     


});
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
})->name('dashboard');
Route::get('/dashboard',[MovimentoController::class,'read'])->name('dashboard');
// a rota abaixo recebe um parametro dinamico chamado "id"
Route::get('/form_update/{id}',[MovimentoController::class,'form_update'])->name('form_update');

    Route::get('/nova_entrada',function(){
        return view('nova_entrada');
    })->name('nova_entrada');
   Route::post('/store',[MovimentoController::class,'store'])->name('store');

   Route::put('/update',[MovimentoController::class,'update'])->name('update');

   Route::delete('/deletar/{id}',[MovimentoController::class,'deletar'])->name ('deletar');
  

   
});
