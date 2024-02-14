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
use App\Http\Controllers\Main;
 
// route by calling the index function of the main class
Route::get('/teste', [Main::class, 'index']);

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
Route::get('/user3/{nome}/{apelido}', [Main::class, 'user3']);

// rota função e parametros retornando uma view
Route::get('/user4/{nome}/{apelido}', [Main::class, 'user4']);

//route with optional parameters
Route::get('/nome/{nome}/{idade}/{apelido?}', function($nome, $idade, $apelido = ''){
    echo "Nome: $nome $apelido | Idade: $idade";
});

// route returning a view with optional parameters
Route::get('/nome1/{nome}/{idade}/{apelido?}', [Main::class, 'nome1']);

// named routes
Route::get('/home', [Main::class, 'home'])->name('home');
Route::get('/services', [Main::class, 'services'])->name('services');
Route::get('/contacts', [Main::class, 'contacts'])->name('contacts');

// controller
use App\Http\Controllers\Clientes;
use App\Http\Controllers\Stock\Prod;

use App\Http\Controllers\Produtos;

Route::get('clientes', [Clientes::class, 'index']);
Route::get('clientes_nomes', [Clientes::class, 'nomes']);
Route::get('email', [Clientes::class, 'mostrar']);
Route::get('produtos', [Prod::class, 'index']);

// single action controller
use App\Http\Controllers\Stats;
Route::get('dados/{teste}', Stats::class);

Route::get('cliente/{dado}/{index?}', [Clientes::class, 'cliente']);

Route::resource('produto', Produtos::class);

// views
Route::view('ver', 'pagina');

Route::view('vcliente', 'clientes.cliente');

Route::get('ccliente/', [Clientes::class, 'pagina']);

Route::get('inifim/', [Clientes::class, 'iniFim']);

// pass data from controllers to views

use App\Http\Controllers\Main2;
Route::get('/home', [Main2::class, 'home']);
Route::get('/home_teste', [Main2::class, 'teste'])->name('my_route');