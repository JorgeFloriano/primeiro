<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DB_Main extends Controller
{
    public function home() {
        echo '<h1>DATABASES</h1>';
        $users = DB::select("SELECT * FROM users");
        //dd($users);

        // echo '<pre>';
        // print_r($users);

        foreach ($users as $user) {
            echo '<p>'.$user->id.' '.$user->name.'</p>';
        }
    }
}
