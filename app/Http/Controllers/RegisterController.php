<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

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
            'picture' => ['required', 'image'],
            'username' => ['required', 'unique:users,username'],
            'password' => ['required', 'min:7'],
        ]);

        $attributes['picture'] = request()->file('picture')->store('profile_picture');
        $user = User::create($attributes);

        auth()->login($user);
        return redirect('/home')->with('success' , 'you are logged in!');
    }
}
