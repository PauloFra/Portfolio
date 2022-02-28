<?php

include('conecta-bd.php');


if( isset($_GET['id_curso'] ) ) {

    $id_curso = $_GET['id_curso'];

    $sql = $conexao->prepare("SELECT * FROM CURSOS WHERE id_curso = $id_curso");
    $sql ->execute();
    
    $curso = $sql->fetchAll();

    $nome = $curso[0] ['nome'];
    $carga_horaria = $curso[0] ['carga_horaria'];



}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - Editar Curso</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<?php
    include('menu.php');    
    ?>
    <div class="container">
        <h3>Editar Curso</h3>
        <hr>

        <form action="acao-cursos.php" method="POST" class="form-inline">
            <input type="text" name="nome" placeholder="Nome do Curso" class="form-control" value="<?php echo $nome; ?>" >
            <input type="number" name="carga_horaria" placeholder="Duração" class="form-control" value = "<?php echo $carga_horaria;?>" >
            <input type="hidden" name="acao" value="editar">


            <input type="hidden" name="id_curso" value = "<?php echo $id_curso;?>">

            <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-floppy-disk"></i> Editar</button>
        </form>
        



        <hr>
        <a href="listar-curso.php" class="btn btn-default"> <i class="glyphicon glyphicon-chevron-left"></i>Voltar</a>
    </div>
    
</body>
</html>