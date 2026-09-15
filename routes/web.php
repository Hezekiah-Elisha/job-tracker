<?php

use App\Http\Controllers\Auth\Login;
use App\Http\Controllers\Auth\Logout;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('home');
    });
});

Route::post('/logout', Logout::class)
    ->middleware('auth')->name('logout');

Route::get('/login', function () {
    return view('auth.login');
})->middleware('guest')->name('login');
Route::post('/login', Login::class);
