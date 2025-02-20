<?php

use App\Http\Middleware\RedirectIfNotAuthenticated;
use App\Livewire\Auth\Home;
use App\Livewire\Guest\Login;
use App\Livewire\Guest\Register;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return redirect('/login');
});

// GUEST
Route::get('/login', Login::class)->name('login');
Route::get('/cadastrar', Register::class)->name('register');

// AUTH
Route::get('/home', Home::class)->name('home')->middleware(RedirectIfNotAuthenticated::class);