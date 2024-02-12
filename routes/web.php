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
// rota retornando a view
Route::get('/', function () {
    return view('welcome');
});

// chamada da classe main
use App\Http\Controllers\Main;
 
//rota chamando a função index da classe main
Route::get('/teste', [Main::class, 'index']);

//rota com a função declarada diretamente
Route::get('/user1/{nome}', function($n){
    echo "Nome em user1: $n";
});

// rota com função declarada diretamente e parametros
Route::get('/user2/{nome}/{apelido}', function($n, $apelido){
    //echo 'Nome: ' . $n . ' ' . $apelido;
    echo "Nome em user2: $n $apelido";
});

// rota chamando a função user da classe main com parametros
Route::get('/user3/{nome}/{apelido}', [Main::class, 'user3']);

// rota função e parametros retornando uma view
Route::get('/user4/{nome}/{apelido}', [Main::class, 'user4']);

//rota com parametro opcionais (parametro opcionais sempre com interrogação e no final da assinatura)
Route::get('/nome/{nome}/{idade}/{apelido?}', function($nome, $idade, $apelido = ''){
    echo "Nome: $nome $apelido | Idade: $idade";
});

//rota retornando uma view com parametros opcionais
Route::get('/nome1/{nome}/{idade}/{apelido?}', [Main::class, 'nome1']);

// named routes
Route::get('/home', [Main::class, 'home'])->name('home');
Route::get('/services', [Main::class, 'services'])->name('services');
Route::get('/contacts', [Main::class, 'contacts'])->name('contacts');
