<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cadastrar Produtos</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> 
        
         <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        
    </head>
    <body>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-5 bg-info mt-5 p-5" style="border-radius: 8px"> 
                <form id=formulario>
                    <div id="cadastro">
                        <h4 class="text-white text-center">Cadastro de Produto</h4>
                        <div class="form-group mb-2">
                            <label for="nome">Nome:</label>
                            <input class="form-control" type="text" id="nome">
                        </div>

                        <div class="form-group mb-2">
                            <label for="tipoVinho">Tipo de Vinho</label>
                            <select class="form-control" id="tipoVinho">
                                <option>Tinto</option>
                                <option>Branco</option>
                                <option>Rosé</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="peso">Peso:</label>
                            <input class="form-control" type="text" id="peso">
                        </div>  
                    </div>

                    <div class="text-center">
                        <button class="btn btn-dark btn-sm mt-3" type="submit">Cadastrar produto</button>
                    </div>

            </form>
                    
                </div>

            </div>
            
        </div>
    </body>
</html>
