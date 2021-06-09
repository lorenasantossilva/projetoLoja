<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\CarrinhoController;
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
Route::get('/', [HomeController::class, 'index'])->name('index');

Route::get('/carrinho/{id?}', [CarrinhoController::class, 'index'])->name('carrinho');

Route::get('/teste', function () {
    return view('teste');
});

Route::get('/cadastro-produtos', function () {
    return view('cadastroProdutos');
});

Route::get('/carrinho', function () {
    return view('carrinho');
});

