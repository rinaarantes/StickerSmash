<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    </head>
</head>
<body>
<?php 
include_once 'pedaco.php';
      ?>

      <div class="container"><h2>Formulario para Cadastro de Livro</h2>
      <form action="inserir.php" method="POST">


    <div class="mb-1">
            <input placeholder="Digite o titulo do livro"  type= "text" name="titulo" class="form-control" >
        </div>

        <div class="mb-1">
            <input placeholder="Digite genero do livro"  type= "text" name="genero" class="form-control" >
        </div>


        <div class="mb-1">
            <input placeholder="Digite o autor do livro"  type= "text" name="autor" class="form-control" >
        </div>

        <div class="mb-1">
            <input placeholder="Digite o ano do livro"  type= "text" name="ano" class="form-control" >
            </div> 

            <div class="mb-3">
            <input placeholder="Digite a quantidade de paginas do livro"  type= "text" name="paginas" class="form-control" >
       

        </div>

        <button type="submit" class="btn btn-primary">cadastrar</button>
        </form>

        <a href="index.php" class="btn btn-primary active" aria-current="page">Voltar</a>
    
    </div>
      


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>