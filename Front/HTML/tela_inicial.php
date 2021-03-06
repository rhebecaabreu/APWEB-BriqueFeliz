<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="main.css" type="text/css" rel="stylesheet">

    <title>Brinque Feliz</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-md-5 bg-light justify-content-center text-center">

                <div class="my-3 py-3" style="color:#60267D">
                    <h1><strong>Brinque Feliz</strong></h1>
                    <p>Era uma vez uma grande loja...</p>
                </div>

                <div class="card mb-4 shadow-sm mx-auto" style="width:18rem;" >
                    <div class="card-body">
                        <h5 class="card-title">Entrar</h5>
                        <form class="form-inline" method="post">
                            <input type="hidden" name="funcao" value="realizarLogin">

                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">@</div>
                                </div>
                                <label for="numeroId"><span class="glyphicon glyphicon-user"></span></label>
                                <input type="text" class="form-control" name="numeroId" id="numeroId" placeholder="Número de Identificação">
                            </div>

                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">@</div>
                                </div>
                                <label for="cpf"><span class="glyphicon glyphicon-lock"></span></label>
                                <input type="text" class="form-control" name="cpf" id="cpf" placeholder="CPF">
                            </div>
                            <input type="submit" class="btn btn-primary btn-block " style="background:#60267D; border-color: #60267D; color:#FFFF00" value="Entrar">

                        </form>
                    </div>
                </div>
            </div>

            <div class="col px-0 bg-dark" > 
                <img src="Recursos/pao.jpg" class="h-100 img-fluid img-thumbnailrounded mx-auto d-block" alt="Nature" style="width:100%">            
            </div>


        </div>

    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

</body>

</html>