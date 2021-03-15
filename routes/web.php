<?php

use Illuminate\Support\Facades\Route; 

//Route::get('/', function () {
// return view('welcome');
//});

Route::get('/home', [\App\Http\Controllers\BladeController::class, 'index'])->name('home');
Route::get('/contact', [\App\Http\Controllers\BladeController::class, 'contact'])->name('contact');
Route::get('/about', [App\Http\Controllers\BladeController::class, 'about'])->name('about');