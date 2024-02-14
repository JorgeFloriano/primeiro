<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Stats extends Controller
{
    public function __invoke(Request $request, $a)
    {
        echo 'Estado '.$a;
    }
}
