<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class Users extends Controller
{
    public function testData(){
        //return DB::select("select * from users"); -- default , use sql command
        //return User::all(); // --> use model

        //$data = User::all();
        /*$data = User::paginate(5); --> retrieve data to five pages
        return view('userInner',['users'=>$data]);
        */

        $data = User::select('ID','name','email')->paginate(5);
        return view('innerUser3',['users'=>$data]);

    }

    public function addUser(Request $req)
    {
        $user =  new User;
        $user -> name = $req -> name;
        $user -> email = $req -> email;
        $user -> save();

        return redirect("addUser");
    }

    function updateUser(Request $req)
    {
        $data = User::find($req -> ID);
        print $data;
        $data -> name = $req -> name;
        $data -> email = $req -> email;
        print $data;
        $data -> save();
    }

    function showUpdate($id)
    {
        $data = User::find($id);
        return view("updateUser",['data' => $data]);

    }
    
    public function deleteUser($id)
    {
        echo $id;
        $data = User::find($id);
        if($data)
        {
            $data -> delete();
            //DB::delete('DELETE FROM users WHERE id = ?', [$id]);
            return response()->json(['message' =>'User deleted successfully']);

        } else{
            return response()-> json(['error'=>'User not found']);
        }
        


    }
   /* public function Index($user){
        echo $user;
        echo "\n";
        echo "Hello from Users Controller!";
        echo "\n";
        return ['name' =>'ABC', 'age'=>40];
    }

    public function loadView($username){
        $users = ["Alex", "John", "Emma"];
        return view('user',['user'=> $username, 'users'=>$users]);
    }
    */
}
