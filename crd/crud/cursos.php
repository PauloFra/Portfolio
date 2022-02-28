<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud-Cursos</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style type="text/css"> 

    .uniq{
        background-color:#222;
        color:white;
    }

    </style>    
</head>
<body>

<?php

include('conecta-bd.php');
include('menu.php');


if(isset($_GET['busca']) ) {
    $busca = $_GET['busca'];
    $mysql = $conexao->prepare("SELECT * FROM cursos WHERE nome LIKE '%$busca%' " );

}else{

$mysql = $conexao->prepare("SELECT * FROM cursos");

}
$mysql -> execute();
$cursos = $mysql->fetchAll();

?>
<div class="container">
    <h3>Cursos Cadastrados</h3>
    <hr>

    <form method="GET" class="form-inline" action="cursos.php">
        <input type="search" name="busca" class="form-control" placeholder="Buscar Curso">
        <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-search"></i></button>
        <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-repeat"></i></button>
    </form>

    <hr>
    <?php
    
    if(sizeof($cursos)== 0){
    

    ?>

    <div class="alert alert-warning">Nenhum Registro Encontrado!</div>
    
    <?php
    }else{
    ?>
    <table class="table table-bordered">
        <thead>
            <tr class="uniq">
                <td>Nome</td>
                <td>Carga Horaria</td>
            </tr>
        </thead>
        <tbody>
            <?php

             foreach($cursos as $c){
                 
            ?>            
            <tr>
                <td><?php echo $c['nome']; ?></td>
                <td><?php echo $c['carga_horaria']; } ?></td>

            </tr>
        </tbody>
    </table>
    <?php
        } 
    ?>
    
    <hr>
    <a href="listar-curso.php" class="btn btn-default"><i class="glyphicon glyphicon-home"></i> Menu </a>
</div>
    
</body>
</html>