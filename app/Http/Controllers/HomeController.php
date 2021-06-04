<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Produtos;

class HomeController extends Controller
{
    public function index()
    {
        $produto = Produtos::get();
        return view('listagemProdutos')->with(compact('produto'));
    }


    public function create()
    {

    }



    public function store()
    {
    }


    public function show()
    {
        //
    }


    public function edit()
    {


    }


    public function update()
    {

    }


    public function destroy()
    {



    }
}
