<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Client;

class ORM_Main extends Controller
{
    public function home() {

        // INSERT RECORDER------------------------------------
        // $client = new Client();
        // $client->name = "Carlos";
        // $client->email = "Carlos@hotmail.com";
        // $client->save();

        // UPDATE RECORDER----------------------------------
        // $client = Client::find(1);
        // $client->name = "Jorge Luis";
        // $client->save();

        // DELETE RECORDER------------------------------------
        // $client = Client::find(5);
        // $client->delete();
        //Client::withTrashed()->find(4)->forceDelete();
        //Client::destroy([1,3,100]);
        //Client::find(4)->delete();
        //Client::withTrashed()->find(4)->restore();

        // INSERT SEVERAL RECORDS--------------------------
        //$this->insertTest();

        // SHOW-------------------------------------------
        //$clients = Client::onlyTrashed()->get();
        //$clients = Client::withTrashed()->get();
        $client = Client::all();
        dd($client);

        // $users = User::all();

        // $users = User::where('score', 20)->get();

        // echo $users[0]->email;
        // die();

        // echo '<pre>';
        // print_r($users);

        // foreach ($users as $user) {
        //     echo $user->name.'<br>';
        // }
    }
    // INSERT SEVERAL RECORDS FOR TEST----------------------
    private function insertTest($clients_num = 10) {

        // create clients
        $names = ['joao', 'carlos', 'pedro', 'marcos', 'antonio', 'luis', 'eduardo'];
        $surnames = ['silva', 'oliveira', 'castro', 'martins', 'souza', 'santana'];
        $emails = ['@gmail.com', '@hotmail.com', '@outlook.com'];

        $clients = [];
        for ($i=1; $i <= $clients_num; $i++) {
            $name = $names[rand(0, count($names)-1)];
            $surname = $surnames[rand(0, count($surnames)-1)];
            $email = $name.'_'.$surname.$emails[rand(0, count($emails)-1)];

            array_push($clients, [
                'name' => "$name $surname",
                'email' => $email,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
        }
        // clear clients table
        Client::truncate();

        // insert the new recorders
        Client::insert($clients);
    }
}
