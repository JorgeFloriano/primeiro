<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class DB_Main extends Controller
{
    public function home() {
        echo '<h1>DATABASES</h1>';
        // $users = DB::select("SELECT * FROM users");
        // dd($users);

        // echo '<pre>';
        // print_r($users);

        // foreach ($users as $user) {
        //     echo '<p>'.$user->id.' '.$user->name.'</p>';
        //}
        
        // $parameters = [
        //     'Ana'
        // ];
        // $users = DB::select("SELECT * FROM users WHERE name = ?", $parameters);
        // dd($users);

        // $parameters = [
        //     ':n' => 'Ana'
        // ];
        // $users = DB::select("SELECT * FROM users WHERE name = :n", $parameters);
        // dd($users);

        $user = new User();
        $results = $user->getUser('João');
        dd($results);
    }
}
