<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Carrinho</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

</head>

<body>
@php

@endphp
    <main>
        <div class="container"><!-- inicio conteudo -->
            <div class="w-100 my-3 text-center">
                <h2>Carrinho de produtos</h2>
            </div>

            <div class="row">
                <div class="col-12 col-sm-12 col-md-10 col-lg-10 col-xl-10">
                    @foreach($produtosCarrinhos as $item)
                    <div class="row p-0 m-0 mb-3" style="border: 1px solid #ccc; border-radius:8px">
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                            <div class="float-end w-75 p-3">
                                <h1 class="h5">{{$item->nome_produto}}</h1>
                            </div>
                            <div class="float-end w-25 mt-3">
                                <img class="w-100 img-fluid" src="{{ URL::asset("/img/vinho1.jpg") }}">
                            </div>
                        </div>

                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                            <p class="h4 mt-3">Valor por unidade</p>
                            <p>Valor total: <b>R$ {{$item->valor}}</b></p>
                        </div>

                    </div>
                    @endforeach
                </div>

                <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2 mt-3 mt-sm-3">
                    <p class="h3">Total da compra</p>
                    <span class="fw-bolder d-block w-100 mb-2">R$ {{$valorTotal}}</span>
                    <form>
                        <label>informe a distancia do frete</label>
                        <input style="width: 100px" type="number" name="distancia" placeholder="distancia" required>
                        <input class="btn btn-success mt-3" type="submit" value="Finalizar compra">
                    </form>

                </div>
            </div>
        </div><!--/ fim conteudo -->
    </main>
</body>
</html>
