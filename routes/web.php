<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('empleado',EmpleadoController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');