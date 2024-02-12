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

    public function nome1($nome, $apelido, $idade = '') {
        return view('nome', [
            'nome' => $nome,
            'apelido' => $apelido,
            'idade' => $idade
        ]);
    }

    public function home() {
        echo '<h3>HOME</h3>';
        echo '<hr>';
        echo '<a href="'.route('home').'">Home</a><br>';
        echo '<a href="'.route('services').'">Serveices</a><br>';
        echo '<a href="'.route('contacts').'">Contacts</a><br>';
    }

    public function services() {
        echo '<h3>SERVICES</h3>';
        echo '<hr>';
        echo '<a href="'.route('home').'">Home</a><br>';
        echo '<a href="'.route('services').'">Serveices</a><br>';
        echo '<a href="'.route('contacts').'">Contacts</a><br>';
    }

    public function contacts() {
        echo '<h3>CONTACTS</h3>';
        echo '<hr>';
        echo '<a href="'.route('home').'">Home</a><br>';
        echo '<a href="'.route('services').'">Serveices</a><br>';
        echo '<a href="'.route('contacts').'">Contacts</a><br>';
    }
}
