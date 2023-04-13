<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create() {
        return view('login.index');
    }
    public function show() {
        $attributes = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if(! auth()->attempt($attributes)) {
            throw ValidationException::withMessages(['email' => 'Your credentials are not validated!']);
        }
        session()->regenerate();

        return redirect('/home')->with('success' , 'You are logged in!');
    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/login')->with('success', 'You Logged Out!');
    }
    public function home() {
        return view('home.index')
                ->with('posts', Post::latest()->paginate(10))
                ->with('users' , User::all());
    }
}
