<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Carrinho</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> 
        
         <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
            
        </style>

        <style>
            body {
                /* background: #fff url(../img/fundo.png) repeat-x; */
                font-family: 'Nunito', sans-serif;
                text-align: left;
                text: 10px;
                color:#A52A2A;
            }
            h1{
                color: #fff;
            }
            h2{
                font: 2em;
                text-align: center; 
            }

            h4{
                color:#fff;
                font: 1em;
                text-transform: uppercase;
                text-align: center;
            }
            #container{
               text-align: left;
               position: auto;
               width:center;
               top:50%;
               padding: 20px;
           }
           #produto {
                color:#A52A2A;
                padding: 15px 5px;
                margin: 15px 5px;
                text-align: center;
            }
            #logo{
                background: url(../img/logo.png) no-repeat;
                text-align: right;   
            }
            #logo h1 {
                float: left;
                text-transform: uppercase;
                /* letter-spacing: 2px; */
                width: 70px;
                height: 20px;
            }
            #logo a {
                width: 60px;
                height: 40px;
                display: block;
                text-align: center;
                font-size:30px;
                background: url(../img/logo.png) no-repeat;
            }
            #valor, #totalCompras{
                padding: 80px;
            }
            header{
                padding: 80px o;
                height: 150px;
                width: -600px;
                float: auto;
                background: #fff url(../img/fundo.png) repeat-x;
            }
            nav ul{
                list-style: none;
                margin: 20px;
	            float: right;
                color: #A52A2A;
            }
            nav ul li {
                float: left;
            }
            nav ul li a:hover{
                border-bottom: 1px solid #fff;
            }
            nav ul li a:link {
                display: block;
                margin-right: 10px;
                padding-bottom: 30px;
                text-transform: uppercase;
            }

            a:link, a:active, a:visited{
                text-decoration: none;
            }
            a:hover {
                color: #fff;
            }
            p a {
                display: inline;
            }

            p a:hover {
                color: #fff;
            }

        </style>

    </head>

    <body>

    <div><!-- inicio principal -->

        <header><!--inicio header-->
                    
            <div id="logo">
                 <h1><a href="Loja de Vinhos"></a></h1>
            </div>

                <nav><!--inicio nav-->
                    <ul>
                        <li><a href="">Home</a></li>
                        <li><a href="">Produtos</a></li>
                        <li><a href="">Carrinho</a></li>
                        <li><a href="">Contato</a></li>
                    </ul>
                </nav><!--/fim nav-->

        </header><!--/fim header-->

        <div id="container"><!-- inicio conteudo -->

            <div id="produto">

                <div class="row">
                    <div class="col-md-4">
                        <h2>Produto</h2>
                        <img class="mr-2 align-self-center" src="../img/vinho1.jpg" width="100" height="120">
                        <h4>
                            Vinho Vale D. Maria 750ml
                        </h4>
                        <hr>

                        <h2>qtd.</h2>
                        <input class="campo" style="width: 35px" type="number" id="qtd" value="1">
                    </div>

                    <div id="valor" class="col-md-4">
                        <h2>Valor unitário</h2>
                        <label for="unitario">R$ 23,43</label>
                        <br>
                        <hr>
                        <br>

                        <h2>Valor Total</h2>
                        <label for="total">R$ 23,43</label>
                    </div>

                    <div id="totalCompras" class="col-md-4">
                        <h2>Total da compra</h2>
                        <label for="totalCompra">R$ 23,43</label>
                        <br><hr><br>
                        <input class="btn btn-success" type="submit" value="Finalizar compra">
                    </div>
                </div>

            </div>

        </div><!--/ fim conteudo -->

    </div><!--/ fim principal-->
    

    
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="js/bootstrap.min.js"></script>

    </body>
</html>
