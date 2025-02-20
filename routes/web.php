<?php

use App\Livewire\Guest\Login;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return redirect('/login');
});

Route::get('/login', Login::class);