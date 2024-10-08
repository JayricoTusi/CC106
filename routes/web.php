<?php

use App\Livewire\Auth\Authhome;
use App\Livewire\Auth\Authlogin;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', Authhome::class)->name('home');
Route::get('/login', Authlogin::class)->name('login');