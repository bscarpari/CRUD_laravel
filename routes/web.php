<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProductController;

/*
 * Este arquivo é responsável por definir as rotas da aplicação.
 *
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Auth::routes();

Route::resource('products', ProductController::class);
