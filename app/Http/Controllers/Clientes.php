<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Clientes extends Controller
{
    public function index() {
        echo 'Clientes';
    }

    public function nomes() {
        echo 'Clientes - nomes';
    }

    private function email() {
        echo 'Clientes - e-mail';
    }

    public function mostrar() {

        // private class can only be called by another public class
        $this->email();
    }

    private $clientes = [
        [
            'nome' => 'Joao',
            'email' => 'joao@gmail.com'
        ],
        [
            'nome' => 'Ana',
            'email' => 'ana@gmail.com'
        ],
        [
            'nome' => 'Carlos',
            'email' => 'carlos@gmail.com'
        ],
        [
            'nome' => 'Jorge',
            'email' => 'jorge@gmail.com'
        ]
    ];

    public function cliente($dado, $index = 0) {
        echo "{$this->clientes[$index][$dado]} <br>";
        echo $this->clientDetail($index);
        }

    private function clientDetail($index) {
        if ($index >= 0 && $index < count($this->clientes)) {
            return "Nome: {$this->clientes[$index]['nome']} | E-mail: {$this->clientes[$index]['email']}";
        } else {
            return 'Não existe cliente escolhido.';
        }
       
    }
    public function pagina() {
        return view('clientes.cliente');
    }

    public function iniFim() {
        echo 'inicio';
        echo view('clientes.cliente');
        echo 'fim';
    }
}
