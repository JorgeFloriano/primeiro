<?php

namespace App\Http\Controllers;

use App\Models\Discipline;
use App\Models\Mobile;
use App\Models\User;
use Illuminate\Http\Request;

class ER_Main extends Controller
{
    public function home() {
        echo 'Eloquent: Relationships<br>';

        // 1 - 1 ------------------------------------
        // $id = 14;
        // $user = User::find($id);
        // $mobile = User::find($id)->mobile;
        // echo "$user->name - $mobile->number";
        // dd($mobile);

        // 1 - N --------------------------------------
        //$results = User::find(1)->mobiles;
        // $user = User::where('name', 'name 1')->first();
        // $mobiles = User::where('name', 'name 1')->first()->mobiles;

        // echo $user->name.'<br>';

        // foreach ($mobiles as $mobile) {
        //     echo $mobile->number.'<br>';
        // }
        
        // Inverse----------------------------------------
        // $n = 1;
        // $user = Mobile::find($n)->user;
        // $mobile = Mobile::find($n);
        // echo "$user->name - $mobile->number";
        
        // N - N --------------------------------------------
        // $user = User::find(5);
        // echo "Studant: $user->name <br>";

        // foreach ($user->disciplines as $discipline) {
        //     echo "$discipline->description <br>";
        // }
        // echo '<hr>';
        // $discipline = Discipline::find(1);
        // echo "Discipline: $discipline->description <br>";

        // foreach ($discipline->users as $user) {
        //     echo "$user->name <br>";
        // }
    }
}
