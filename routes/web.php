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
// route returning a view
Route::get('/', function () {
    return view('welcome');
});

// main class call
 
// route by calling the index function of the main class
Route::get('/teste', 'Main@index');

// route with the function declared directly
Route::get('/user1/{nome}', function($n){
    echo "Nome em user1: $n";
});

// route with the function declared directly and parameters
Route::get('/user2/{nome}/{apelido}', function($n, $apelido){
    //echo 'Nome: ' . $n . ' ' . $apelido;
    echo "Nome em user2: $n $apelido";
});

// route calling the user function of the main class with parameters
Route::get('/user3/{nome}/{apelido}', 'Main@user3');

// rota função e parametros retornando uma view
Route::get('/user4/{nome}/{apelido}', 'Main@user4');

//route with optional parameters
Route::get('/nome/{nome}/{idade}/{apelido?}', function($nome, $idade, $apelido = ''){
    echo "Nome: $nome $apelido | Idade: $idade";
});

// route returning a view with optional parameters
Route::get('/nome1/{nome}/{idade}/{apelido?}', 'Main@nome1');

// named routes
Route::get('/home1', 'Main@home')->name('home');
Route::get('/services', 'Main@services')->name('services');
Route::get('/contacts', 'Main@contacts')->name('contacts');

// controller

Route::get('clientes', 'Clientes@index');
Route::get('clientes_nomes', 'Clientes@nomes');
Route::get('email', 'Clientes@mostrar');
Route::get('produtos', 'Stock\Prod@index');

// single action controller
Route::get('dados/{teste}', 'Stats');

Route::get('cliente/{dado}/{index?}', 'Clientes@cliente');

Route::resource('produto', 'Produtos');

// views
Route::view('ver', 'pagina');

Route::view('vcliente', 'clientes.cliente');

Route::get('ccliente/', 'Clientes@pagina');

Route::get('inifim/', 'Clientes@iniFim');

// pass data from controllers to views


Route::get('/home', 'Main2@home');
Route::get('/home_teste', 'Main2@teste')->name('my_route');

// Databases
Route::get('/ER', 'ER_Main@home');