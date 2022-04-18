<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/transfer', function () {
    return view('transfer');
})->name('transfer');

Route::get('/history', function () {
    return view('history');
})->name('history');

Route::get('/summary', function () {
    return view('summary');
})->name('summary');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/update', function () {
    return view('update');
})->name('update');

Route::get('/reset', function () {
    return view('password');
})->name('reset');