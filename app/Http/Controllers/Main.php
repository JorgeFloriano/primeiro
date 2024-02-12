<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Main extends Controller
{
    public function index(){
        echo 'Estou no Index !';
    }
    public function user3($nome, $apelido){
        echo 'Estou no User3 !<br>';
        echo "$nome $apelido";
    }
    public function user4($nome, $apelido) {
        return view('user', [
            'nome' => $nome,
            'apelido' => $apelido
        ]);
    }
}
