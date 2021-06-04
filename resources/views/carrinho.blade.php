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
    <main>
        <div class="container"><!-- inicio conteudo -->
            <div class="w-100 my-3 text-center">
                <h2>Carrinho de produtos</h2>
            </div>

            <div class="row">
                <div class="col-12 col-sm-12 col-md-10 col-lg-10 col-xl-10">
                    <?php for ($x = 0; 10 > $x; $x++){ ?>
                    <div class="row p-0 m-0 mb-3" style="border: 1px solid #ccc; border-radius:8px">
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                            <div class="float-end w-75 p-3">
                                <h1 class="h5">Vinhox Vale D. Mawria 750ml</h1>
                                <form class="w-100">
                                    <label for="qtdProduto">qtd.</label>
                                    <input name="qtdProduto" class="campo" style="width: 35px" type="number" id="qtd"
                                           value="1">
                                </form>
                            </div>
                            <div class="float-end w-25 mt-3">
                                <img class="w-100 img-fluid" src="{{ URL::asset("/img/vinho1.jpg") }}">
                            </div>
                        </div>

                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                            <p class="h4 mt-3">Valor por unidade</p>
                            <p>Valor total: <b>R$ 23,43</b></p>
                        </div>

                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                            <p class="h4 mt-3">Soma deste produto</p>
                            <p>Valor total: <b>R$ 23,43</b></p>
                        </div>
                    </div>
                    <?php } ?>
                </div>

                <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2 mt-3 mt-sm-3">
                    <p class="h3">Total da compra</p>
                    <span class="fw-bolder d-block w-100 mb-2">R$ 23,43</span>
                    <input class="btn btn-success" type="submit" value="Finalizar compra">
                </div>
            </div>
        </div><!--/ fim conteudo -->
    </main>
</body>
</html>
