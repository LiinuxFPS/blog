<?php

use App\Http\Controllers\PrincipalController;
use Illuminate\Support\Facades\Route;

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

///Route::get('/nome-da-rota','NomeController@função');
/*
Route::get('/nome-rota/{passar-Parametro}/{param-Opcional?}/{tratar_Param}',
    function(
        string $x,
        string $z = 'msg/valor padrão',
        tratar_Param = 1
        ){
        echo 'Texto -'.$x.'-'.$y.'-'.$z;
})->where('tratar_Param', '[0-9]+');
*/

Route::get('/','PrincipalController@principal')->name('site.index');
Route::get('/sobre-nos','SobreNosController@sobreNos')->name('site.sobrenos');
Route::get('/contato','ContatoController@contato')->name('site.contato');
Route::get('/login', function(){ return 'Login'; })->name('site.login');

Route::prefix('/app')->group(function(){
    Route::get('/clientes', function(){ return 'Clientes'; })->name('app.clientes');
    Route::get('/fornecedores', function(){ return 'Fornecedores'; })->name('app.fornecedores');
    Route::get('/produtos', function(){ return 'Produtos'; })->name('app.produtos');
});

Route::fallback(function(){
    echo 'Rota não existe. <a href="'.route('site.index').'">Clique aqui</a>';
});
