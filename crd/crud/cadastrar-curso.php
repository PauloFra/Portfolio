<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - Cadastrar Curso</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<?php
    include('menu.php');    
    ?>
    <div class="container">
        <h3>Cadastro de Curso</h3>
        <hr>

        <form action="acao-cursos.php" method="POST" class="form-inline">
            <input type="text" name="nome" placeholder="Nome do Curso" class="form-control">
            <input type="number" name="carga_horaria" placeholder="Duração" class="form-control">
            <input type="hidden" name="acao" value="inserir">
            <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-floppy-disk"></i> Salvar</button>
        </form>
        



        <hr>
        <a href="listar-curso.php" class="btn btn-default"> <i class="glyphicon glyphicon-home"></i> Menu</a>
    </div>
    
</body>
</html>