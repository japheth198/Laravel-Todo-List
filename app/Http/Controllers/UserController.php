<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class UserController extends Controller
{
    public function uploadAvatar(Request  $request){
        if ($request->hasFile("image")){
            User::uploadAvatar($request->image);
            return redirect()->back()->with('message','Image Uploaded.');
        }
        return redirect()->back()->with('error','Image not Uploaded.');
    }

    public function index()
    {

//      Create
//      DB::insert("insert into users (name,email,password)values(?,?,?)",["Japheth","japhethjuur19@gmail.com","saimon32"]);

//      Elaquent
//      $user = new User();
//      $user->name = "Japheth";
//      $user->email = "japhethjuur19@gmail.com";
//      $user->password = "saimon32";
//      $user->save();

        $data = [
            'name' => 'japheth',
            'email' => 'japhethjuur@gmail.com',
            'password' => 'password',
        ];
        //User::create($data);

        // Read RAW SQL
        //$users = User::all();

//      Read
//      $users = DB::select("select * from users");

//      Update
//      DB::update("update users set name=? where id = 1", ["Uuendatud Japheth"]);

//      User::where("id",1)->update(["Name"=>"Elaquent"]);

//      Delete
//      DB::delete("delete from users where id = 1");
        //User::where("id",1)->delete();
        //$users = DB::select("select * from users");
        return User::all();

    }
}
