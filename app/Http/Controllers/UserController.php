<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\LaravelIgnition\Recorders\DumpRecorder\DumpHandler;

class UserController extends Controller
{

    // return $users;
        // dd($users);
        // Dump($users);
        //  foreach($users as $user){
        //     echo $user->name, $user->email, $user->age . "<Br>";
        //  }
            // $users = DB::table('users')->where('age','<','40')->get();
        // $users = DB::table('users')->find(5);
    public function showUser()
    {
        $users = DB::table('users')->paginate(4);



        return view('allusers', ['data' => $users]);
    }
    public function singleUser(string $id)
    {
        $users = DB::table('users')->where('id', $id)->get();
        // $users = DB::table('users')->find(5);

        // return $users;
        // dd($users);
        // Dump($users);
        //  foreach($users as $user){
        //     echo $user->name, $user->email, $user->age . "<Br>";
        //  }
        return view('singleUser', ['data' => $users]);
    }
    public function addUsers(Request $req)
    {

        $users   = DB::table('users')
            ->insertOrIgnore(
                [
                    'name' => $req->username,
                    'email' => $req->useremail,
                    'age' => $req->userage,
                    'city' => $req->usercity,
                    // 'created_at'=> now(),
                    // 'updated_at'=> now(),

                ]
            );
        if ($users) {
            return redirect()->route('home');
        } else {
            echo "<h1>Data not added</h1>";
        }
    }
    public function updatepage(string $id){
        $users = DB::table('users')->find($id);
        // return $users;
            return view('updateuser',['data'=> $users]);
    }


   public function updateUser(Request $req,$id)

    {

         $users   = DB::table('users')
            ->where('id', $id)
            ->update([
                    'name' => $req->username,
                    'email' => $req->useremail,
                    'age' => $req->userage,
                    'city' => $req->usercity,
            ]);
        if ($users) {
            return redirect()->route('home');        }
    }


    public function deletUser(string $id)
    {
        $users   = DB::table('users')
            ->where('id', $id)
            ->delete();
        if ($users) {
            return redirect()->route('home');
        } else {
            echo "Record Not found : ";
        }
    }
}
