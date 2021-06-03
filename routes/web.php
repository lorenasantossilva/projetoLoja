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
    return view('welcome');
});

Route::get('/teste', function () {
    return view('teste');
});

Route::get('/cadastro-produtos', function () {
    return view('cadastroProdutos');
});

Route::get('/listagem-produtos', function () {
    return view('listagemProdutos');
});

Route::get('/carrinho', function () {
    return view('carrinho');
});

