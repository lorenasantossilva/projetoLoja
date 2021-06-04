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
    </head>

    <body >
            <div class="container"><!-- inicio container-->

                <section id="postagens">

                    <article>
                        <a href="">
                             <img class="imagem" src="../img/vinho1.jpg" height="200" width="200">
                             <h4>Vale D.Maria</h4>
                             <h5>R$1.173,90</h5>
                        </a>

                        <div id="botao"><!-- inicio buttão -->
                                <button class="btn btn-success btn-lg" type="button">Incluir</button>
                        </div><!--/ fim botão-->
                    </article>

                    <article>
                        <a href="">
                             <img class="imagem" src="../img/vinho2.jpg" height="200" width="200">
                             <h4>Pérgola</h4>
                             <h5>R$23,43</h5>

                             <div id="botao"><!-- inicio buttão -->
                                <button class="btn btn-success btn-lg" type="button">Incluir</button>
                            </div><!--/ fim botão-->
                        </a>
                    </article>

                    <article>
                        <a href="">
                             <img class="imagem" src="../img/vinho4.jpg" height="200" width="200">
                             <h4>Pinta Negra</h4>
                             <h5>R$69,99</h5>

                            <div id="botao"><!-- inicio buttão -->
                                <button class="btn btn-success btn-lg" type="button">Incluir</button>
                            </div><!--/ fim botão-->
                        </a>
                    </article>


                </section>

            </div><!--/fim container-->
    </body>
</html>
