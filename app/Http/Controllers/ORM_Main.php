<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class ORM_Main extends Controller
{
    public function home() {

        $users = User::all();

        $users = User::where('score', 20)->get();

        echo $users[0]->email;
        die();

        echo '<pre>';
        print_r($users);

        // foreach ($users as $user) {
        //     echo $user->name.'<br>';
        // }
    }
}
