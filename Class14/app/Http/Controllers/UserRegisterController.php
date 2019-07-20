<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserRegisterController extends Controller
{
    //

    public function index()
    {
        return view('user.register');
    }
    public function register()
    {
//        $this->validate(request(), [
//            'name'=>'required|alpha_dash',
//            'email'=>'required',
//            'password'=>'required|confirmed',
//        ]);
        User::create([
            'name'=>request('UserName'),
            'email'=>request('Email'),
            'password'=>bcrypt(request('Password')),
            'image'=>'hello.jpg'
        ]);
        return "hello";
    }
}
