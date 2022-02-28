<?php
include('conecta-bd.php');

# este arquivo é conhecido como " controller " do CRUD
# pois ele que controla se os dados recebidos serão inseridos ou excluído no BD

#

if ( isset( $_REQUEST['acao']) ){
    $acao = $_REQUEST['acao'];
    
    switch($acao){
        case 'inserir':
            if (isset($_POST['nome']) && isset($_POST['carga_horaria'])){
                
                $nome = $_POST['nome'];
                $carga_horaria = $_POST['carga_horaria'];

                echo $_POST['nome'];
                echo $_POST['carga_horaria'];

                $sql = $conexao->prepare("INSERT INTO cursos (nome , carga_horaria) VALUES ('$nome' , '$carga_horaria')  ");
                $sql -> execute();
            }
        
        break;

        case 'editar':

            if(isset($_POST['nome'] ) && isset($_POST['carga_horaria']) && isset($_POST['id_curso'])    )  { 


           $id_curso = $_POST['id_curso'];
           $nome = $_POST['nome'];
           $carga_horaria = $_POST['carga_horaria'];

            $sql = $conexao->prepare("UPDATE CURSOS SET nome = '$nome', carga_horaria = '$carga_horaria' WHERE id_curso = '$id_curso' ");

            $sql-> execute();
            
        }
   
            break;

        case 'excluir':
            if(isset($_GET['id_curso'] ) ) {

                $id_curso = $_GET['id_curso'];
                $sql = $conexao->prepare(" DELETE FROM CURSOS WHERE id_curso = $id_curso");
                $sql->execute();
            }

        break;
        
    }
}

#redirecionar
header('location:listar-curso.php');

/*echo $_POST['acao'];

echo $_POST['nome'];

echo $_POST['carga_horaria'];*/



?>
