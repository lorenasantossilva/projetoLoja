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

    public function carrinho($tipo, $action, $id, $quantidade)
    {


        if (!isset($_SESSION['produtos'])){
            $_SESSION['produtos'] = array();
        }

        if (isset($tipo) && $tipo == 'true'){
            if (isset($action) && $action == 'add') {
                $idProduto = $id;
                if (!isset($_SESSION['produtos'][$idProduto])) {
                    $_SESSION['produtos'][$idProduto] = $_GET['quantidade'];
                } else {
                    $_SESSION['produtos'][$idProduto] += $_GET['quantidade'];
                }
            }
        }

        if (isset($tipo) && $tipo == 'true') {
            if (isset($action) && $action == 'add') {
                $idProduto = $id;
                if (!isset($_SESSION['produtos'][$idProduto])) {
                    $_SESSION['produtos'][$idProduto] = 1;
                } else {
                    $_SESSION['produtos'][$idProduto] += 1;
                }
            }

            if (isset($action) && $action == 'rm') {
                $idProduto = $id;
                if ( $_SESSION['produtos'][$idProduto] > 0){
                    $_SESSION['produtos'][$idProduto] -= 1;
                }
            }


            if (isset($action) && $action == 'del') {
                $idProduto = $id;
                unset( $_SESSION['produtos'][$idProduto]);
            }
        }
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
