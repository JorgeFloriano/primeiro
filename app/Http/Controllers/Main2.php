<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Main2 extends Controller
{
    public function home() {
        $data = [
            'name' => 'Victoria',
            'age' => 40,
            'surname' => 'Floriano',
            'fones' => [
                '1243434',
                '4446665',
                '3456778'
            ]
        ];
        return view('home', $data);
    }
}
