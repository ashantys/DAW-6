<?php

use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/producto', [ProductoController::class, 'index']);
Route::resource('productos', ProductoController::class);

Route::get('/edit', 'EditController@edit')->name('edit');
