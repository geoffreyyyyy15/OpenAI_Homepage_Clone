<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session as FacadesSession;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',  [SessionController::class, 'create'])->name('login')->middleware('guest');
Route::get('/register', [RegisterController::class, 'create'])->name('register')->middleware('guest');
Route::post('/sessions', [SessionController::class, 'show'])->name('home.index')->middleware('guest');
Route::get('/home', [SessionController::class, 'home'])->name('user.home')->middleware('auth');

Route::post('/register-create', [RegisterController::class, 'store'])->name('user.create');
Route::get('logout', [SessionController::class, 'destroy'])->name('logout')->middleware('auth');

