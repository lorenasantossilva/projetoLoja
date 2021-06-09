<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Listagem de Produtos</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <script src="/js/funcaoApiProdutos.js"></script>
</head>

<body >
<!-- JS QUANTIDADE INPUT -->
<script type="text/javascript">
    function id(el) {
        return document.getElementById(el);
    }

    function menos(id_qnt) {
        var qnt = parseInt(id(id_qnt).value);
        if (qnt > 0)
            id(id_qnt).value = qnt - 1;
    }

    function mais(id_qnt) {
        id(id_qnt).value = parseInt(id(id_qnt).value) + 1;
    }
</script>
<!-- JS QUANTIDADE INPUT -->

<div class="container">
        <section class="row">
            @foreach($produto as $item)
            <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2 p-3">
                <div class="w-100 p-2" style="border: 1px solid #ccc; border-radius:8px">

                    <img class="img-fluid" src="../img/vinho1.jpg">
                    <span class="d-block text-center">{{$item->nome}}</span>
                    <span class="d-block text-center">R$ {{$item->valor}}</span>

                    <div class="text-center">
                        <a href="{{route('carrinho', ['id'=> $item->id])}}" class="btn btn-success btn-sm mt-2">Incluir produto</a>
                    </div>
                </div>
            </div>
            @endforeach
        </section>

    </div>
</body>
</html>
