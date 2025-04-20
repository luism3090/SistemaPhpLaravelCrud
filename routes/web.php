<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;

Route::get('/', function () {
    return view('auth.login');
});


Route::resource('empleado',EmpleadoController::class);
Auth::routes();

Route::get('/home', [EmpleadoController::class, 'index'])->name('home');

Route::group(['middleware'=>'auth'], function(){

    Route::get('/home', [EmpleadoController::class, 'index'])->name('home');

});


