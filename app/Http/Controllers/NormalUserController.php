<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NormalUser;
use Illuminate\Support\Facades\Hash;

class NormalUserController extends Controller
{
    function login(Request $req)
    {
        $user = NormalUser::where(['email'=>$req->email])->first();

        if(!$user || !Hash::check($req->password, $user->password))
        {
            return "The username or password does not match our records.";
        }
        else{
            $req->session()->put('user', $user);
            return redirect('/wishlist');
        }
    }
    function register(Request $req){
        return $req->input();
        $user = new NormalUser;
        $user->name=$req->name;
        $user->email=$req->email;
        $user->password=Hash::make($req->password);
        $user->save();
        return redirect('/login');
    }
}