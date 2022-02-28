
<?php 
include('conecta-bd.php');
// agora vamos buscar os cursos no nosso banco de dados


$sql = $conexao->prepare('SELECT * FROM cursos ORDER BY NOME');

$sql->execute();
$cursos = $sql->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - Listagem de Cursos</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <?php
    include('menu.php');    
    ?>
    <div class="container"> 
        <h3>Listagem de Cursos</h3>
        <hr>


            <a href="cadastrar-curso.php" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i>   NOVO</a>
           
        
        <hr> 
        <table class="table table-striped">
            <thead>
                <tr>
                    <td>Nome</td>
                    <td>Carga Horária</td>
                    <td class="text-right">Ações</td>
                </tr>
            </thead>
            <tbody>
            <?php
            foreach($cursos as $c){

            
            ?>
                <tr>
                    <td><?php echo $c['nome'];?></td>
                    <td><?php echo $c['carga_horaria'];?></td>
                    <td class="text-right">
                        <a href="editar-cursos.php?id_curso=<?php echo $c['id_curso'];   ?>" class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-pencil "></i></a>
                        <a data-toggle="modal" data-target="#modal-exclusao-<?php echo $c['id_curso']; ?>" href="" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash " ></i></a>

                        <?php
                        include('modal.php');
                        ?>
                    </td>
                </tr>
             <?php
             }?>   
            </tbody>
            
        </table>
      

        <hr>
        <a href="cursos.php" class="btn btn-default"><i class="glyphicon glyphicon-cloud"></i> Cursos Cadastrados</a>
        <hr>
        
    </div> 
</body>
</html>


