<div class="modal fade" id="modal-exclusao-<?php echo $c['id_curso']; ?>">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i></button>
        <h4 class="modal-title text-center">Exclusão de Curso</h4>
      </div>
      <div class="modal-body text-left">
        Confirma exclusão do curso : <?php echo $c['nome']; ?> ?
      </div>
      <div class="modal-footer text-center">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <a href="acao-cursos.php?acao=excluir&id_curso=<?php echo $c['id_curso']; ?> " class="btn btn-danger">Excluir</a>
      </div>
    </div>
  </div>
</div>