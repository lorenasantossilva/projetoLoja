<?php

namespace App\Http\Controllers;

use App\Models\Carrinho;
use App\Models\Produtos;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class CarrinhoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($idProduto = null)
    {

        if ($idProduto == null){
            if (isset($_COOKIE['token'])){

                $produtosCarrinhos = Carrinho::where('token', $_COOKIE['token'])->get();


                $valorTotal = Carrinho::select(\DB::raw('sum(valor) as valor_total'))->where('token', $_COOKIE['token'])->get();
                $valorTotal = $valorTotal[0]->valor_total;
                return view('carrinho')->with(compact('produtosCarrinhos', 'valorTotal'));

            }else{
                $token = rand(1,1000);
                setcookie("token", $token, time() + (86400 * 1), "/"); // 86400 = 1 day

                $produtosCarrinhos = Carrinho::where('token', $token)->get();
                $valorTotal = Carrinho::select(\DB::raw('sum(valor) as valor_total'))->where('token', $token)->get();
                $valorTotal = $valorTotal[0]->valor_total;
                return view('carrinho')->with(compact('produtosCarrinhos', 'valorTotal'));
            }
        }else{
            if (isset($_COOKIE['token'])){

                $produto = Produtos::Where('id', $idProduto)->first();

                $carrinho = new Carrinho();
                $carrinho->nome_produto = $produto->nome;
                $carrinho->tipo_vinho = $produto->tipo_vinho;
                $carrinho->valor = $produto->valor;
                $carrinho->token = $_COOKIE['token'];
                $carrinho->peso = "10";
                $carrinho->save();
                $produtosCarrinhos = Carrinho::where('token', $_COOKIE['token'])->get();

            }else{
                $token = rand(1,1000);
                setcookie("token", $token, time() + (86400 * 1), "/"); // 86400 = 1 day

                $produto = Produtos::Where('id', $idProduto)->first();

                $carrinho = new Carrinho();
                $carrinho->nome_produto = $produto->nome;
                $carrinho->tipo_vinho = $produto->tipo_vinho;
                $carrinho->valor = $produto->valor;
                $carrinho->token = $token;
                $carrinho->peso = "10";
                $carrinho->save();
                $produtosCarrinhos = Carrinho::where('token', $token)->get();
            }

            $valorTotal = Carrinho::select(\DB::raw('sum(valor) as valor_total'))->where('token', $_COOKIE['token'])->get();
            $valorTotal = $valorTotal[0]->valor_total;

            return view('carrinho')->with(compact('produtosCarrinhos', 'valorTotal'));

        }

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
