<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.index');
    }

    public function store()
    {
       $attributes = request()->validate([
            'email' => ['required', 'unique:users,email', 'email'],
            'name' => ['required'],
            'username' => ['required', 'unique:users,username'],
            'password' => ['required', 'min:7'],
        ]);


      $user = User::create($attributes);

        auth()->login($user);
        return redirect('/home')->with('success' , 'you are logged in!');
    }
}
