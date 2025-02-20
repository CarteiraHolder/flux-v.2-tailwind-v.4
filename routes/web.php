<?php

use App\Livewire\Guest\Login;
use App\Livewire\Guest\Register;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return redirect('/login');
});

Route::get('/login', Login::class);
Route::get('/cadastrar', Register::class);