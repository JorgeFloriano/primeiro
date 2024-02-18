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

        // $user = new User();
        // $results = $user->getUser('João');
        // dd($results);

        //-----------------------------------------------------------------------
        // Raw queries
        

        // $users = DB::select("SELECT * FROM users");
        // dd($users);

        //DB::insert("INSERT INTO users VALUES (0, 'Fernando')");

        //DB::update("UPDATE users SET birth_data = '2010-08-14' WHERE id = 4");

        //DB::delete("DELETE FROM users WHERE id=2");

        //DB::statement("ALTER TABLE users ADD email VARCHAR(50)");

        //-----------------------------------------------------------------
        // Query Builder !!!!!!!!!
        
        //$results = DB::table('users')->get();

        //$results = DB::table('users')->where('id', 3)->get();

        //$results = DB::table('users')->where('id','<=', 3)->get();

        //$results = DB::table('users')->where('id','<=', 3)->first();

        //$results = DB::table('users')->where('id', 3)->value('birth_data');

        //$results = DB::table('users')->find(3); //only if the primary key was id

        //dd($results);

        //------------------------------------------------
        // PLUCK ORDERBY CHUNK

        // $this->create();
        // die('finish');

        //$results = null;
        
        //$results = DB::table('users')->where('id', '<=', 30)->pluck('email', 'id');

        //--------------------------------------------------------------------------
        // IMPORTANT !!!!! USE FOR LIMT LISTS !!!!
        // echo '<pre>';
        // $i = 0;
        // DB::table('users')->orderBy('id')->chunk(17, function($res) {
        //     echo '<hr>';
        //     foreach ($res as $user) {
        //         echo $user->name . '<br>';
        //     }
        //     echo '<hr>';

        //     global $i;
        //     $i++;
        //     if ($i == 3) {
        //         return false;
        //     }
        // });
        //----------------------------------------------------------------------------


        // Aggregates ----------------------------------------------------
        //echo DB::table('users')->where('score', 40)->count();

        //echo DB::table('users')->max('score');

        //echo DB::table('users')->min('score');

        //echo DB::table('users')->avg('score');

        //echo DB::table('users')->where('id', '<', 20)->avg('score');

        // $res = DB::table('users')->where('score', 10)->exists();

        // if ($res) {
        //     echo 'exist';
        // } else {
        //     echo 'does not exist';
        // }

        // Select ---------------------------------------------------------
        //$results = DB::table('users')->select('name', 'email')->get();
        //$results = DB::table('users')->select('email', 'score')->get();

        // select agregado
        // $res = DB::table('users')->select('email', 'score');
        // $results = $res->addSelect('name')->get();

        // raw expressions
        //$res = DB::table('users')->select(DB::raw('COUNT(*) AS total'))->get();
        //$res = DB::table('users')->select(DB::raw('SUM(score) AS total'))->get();
        //$res = DB::table('users')->select(DB::raw('SUM(score) AS total'))->where('id', '<', 50)->get();

        // raw methods
        //$res = DB::table('users')->selectRaw('SUM(score)')->where('id', '<', 50)->get();
        // $multiplier = 0.5;
        // $res = DB::table('users')->selectRaw('name ,score, score * ? as multiplier', [$multiplier])->where('id', '<', 50)->get();

        //joins
        // $res = DB::table('users')
        //     ->join('user_mobile', 'users.id', '=', 'user_mobile.id_user')
        //     ->select('users.name', 'user_mobile.mobile')
        //     ->get();

        $res = DB::table('users')
            ->rightJoin('user_mobile', 'users.id', '=', 'user_mobile.id_user')
            ->select('users.name', 'user_mobile.mobile')
            ->get();

        echo '<pre>';
        print_r($res);

    }
    
    // FUNCTION TO CREATE 300 RECORDS IN DATABASE FOR TESTING
    private function create() {
        DB::statement("TRUNCATE users");
        $rows_num = 300;
        $sql = "INSERT INTO users VALUES";
        for ($i=1; $i <= $rows_num; $i++) {
            $score = rand(1, 50);
            $sql .="(0, 'name $i', '2010-04-12', 'email$i@gmail.com', $score),";
        }
        $sql = rtrim($sql, ',');
        DB::insert($sql);
    }
}
