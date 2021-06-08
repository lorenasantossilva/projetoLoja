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
<div id="menu_carrinho" style="z-index: 999!important;">
    <input type="checkbox" id="control-nav">
    <label for="control-nav" class="control-nav">
        <?php if (count($_SESSION['produtos']) == 0) { ?>
        <a href="carrinho.php">
            <img src="imagens/icone_cesta.png">
        </a>
        <span id="qtd">0</span>
        <?php } else { ?>
        <img src="imagens/icone_cesta.png">
        <span id="qtd"><?= count($_SESSION['produtos']) ?></span>
        <?php } ?>
    </label>
    <?php if (count($_SESSION['produtos']) > 0) { ?>
    <label for="control-nav" class="control-nav-close"></label>
    <nav id="list_carrinho">

        <h4>Itens Adicionados</h4>
        <div id="max_height_carrinho">
            <?php
            $valorTotalCompra = 0;
            foreach ($_SESSION['produtos'] as $idProduto => $key) {
            $query = "select * from produto where id = {$idProduto}";
            $result = $action->query_db($query);
            if ($action->result_quantidade($result) > 0) {
            $produto = array_map_deep($action->array_db($result)[0], 'utf8_encode');
            $total = $key * $produto['valor_item'];
            $valorTotalCompra += $total;
            ?>
            <div id="boxCarrinho<?= $produto['id']; ?>" class="box_carrinho">
                <div class="capa_carrinho">
                    <img src='https://clickacai.com.br/extranet/files/venda_config/<?= $produto['id'] ?>/capa.jpg' alt='<?= $produto['titulo'] ?>' title='<?= $produto['titulo'] ?>'>
                </div>
                <div class="desc_carrinho">
                    <h3><?= $produto['titulo'] ?></h3>
                    <form>
                        <div class="qtd_carrinho_lateral">

                        <!-- <input type="button" value="-" onclick="menos(<?= $produto['id']; ?>)" class="menos">-->

                        <!--  <input name="quantidade" type="text" value="<?= $key ?>" size="3" maxlength="3" id="<?= $produto['id']; ?>" readonly> -->

                        <!--  <input type="button" value="+" onclick="mais(<?= $produto['id']; ?>)" class="mais">-->


                            <input type="button" value="-" onclick="remProduto('<?= $produto['id']; ?>', false)" class="menos">

                            <input name="quantidade" type="text" value="<?= $key ?>" size="3" maxlength="3" id="<?= $produto['id']; ?>" readonly>

                            <input type="button" value="+" onclick="addProduto('<?= $produto['id']; ?>', false)" class="mais">

                        </div>
                    </form>

                    <strong>R$ <span id="valorProduto<?= $produto['id']; ?>"><?= number_format($total, 2, ',', '.') ?></span></strong>
                </div>
            </div>
            <?php
            }
            }
            ?>
        </div>
        <div id="sub_total_carrinho">
            <div style="overflow:auto;">
                <span>SUBTOTAL</span>
                <strong>R$ <b id="valorTotalCarrinho"> <?= number_format($valorTotalCompra, 2, ',', '.') ?></</b></strong>
            </div>
            <a href="{{ route('conteudo.listar', ['categoria' => $util->url('noticias') ]) }}">FINALIZAR COMPRA</a>
        </div>


    </nav>
    <?php
    }
    ?>
</div>

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
                        <a href="#" onclick="addProduto('{{$item->id}}')" class="btn btn-success btn-sm mt-2">Incluir produto</a>
                    </div>
                </div>
            </div>
            @endforeach
        </section>

    </div>
</body>
</html>
