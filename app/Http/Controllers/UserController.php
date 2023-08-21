<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        // $users = User::where('age', '>=', '18)-> orWhere('zip_code', '>=', 213132)-> orderBy('age', 'asc')-> limit(5,10)->get()
        // $users = User::all();
        //$users = DB::select(DB::raw("SELECT * FROM users WHERE age = '$zip_code'"));
        $users = DB::select("SELECT * FROM users");
        //return view("user.index", ["users" => $users]);
        return view("user.index", compact('users'));
    }

    public function create()
    {
        $user = new User;
        $user->name = "Juanjo";
        $user->email = "demo4@demo.com";
        $user->password = Hash::make('123456');
        $user->address = "calle demo 123";
        $user->zip_code = 231323;
        $user->save();

        User::create([
            "name" => "javier",
            "email" => "demo22@demo.com",
            "password" => Hash::make('123456'),
            "address" => "calle demo 123",
            "zip_code" => 231323
        ]);

        return redirect()->route('user.index');
    }
}
