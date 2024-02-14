<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Main2 extends Controller
{
    public function home() {
        $data = [
            'title' => 'Test page',
            'name' => 'Victoria',
            'age' => 47,
            'surname' => 'Floriano',
            'fones' => [
                '1243434',
                '2446665',
                '3456778'
            ]
        ];
        return view('home', $data);
    }
    public function teste() {
        echo "I'm here !!!"; 
    }
}
