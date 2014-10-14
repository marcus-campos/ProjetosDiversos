<?php
  include "header.php";
  require_once '../controller/consulta/NaturezaController.php';
  $breadcumb = ['lista-natureza-consulta.php' => 'Natureza das consultas', 'cadastro-natureza-consulta.php' => 'Cadastro'];
?>

<div id="page-content">
<div id='wrap'>
  <div id="page-heading">
    <?php include 'breadcumb.php' ?>
    <h1>Natureza das consultas</h1>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <?php if(isset($salvo) && $salvo): ?>
          <div class="alert alert-dismissable alert-success">
            Cadastro realizado com sucesso
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          </div>
        <?php endif; ?>

        <div class="panel panel-primary">
          <div class="panel-heading">
            <h4>Natureza das consultas</h4>
          </div>
          <div class="panel-body">
            <h3>NOVO</h3>
            <br>
            <form class="form-horizontal" id="natureza-consulta-form" method="post">
              <input name="btn_submit" type="hidden" value="true" class="form-control" id="fd_login">
              <div class="form-group">
                <label for="fd_natureza" class="col-sm-3 control-label">Natureza</label>
                <div class="col-sm-6">
                  <input name="natureza" type="text" class="form-control" id="fd_natureza">
                </div>
              </div>
              <div class="form-group">
                <label for="fd_observacao" class="col-sm-3 control-label">Observação</label>
                <div class="col-sm-6">
                  <textarea name="observacao" id="fd_observacao" cols="50" rows="4" class="form-control"></textarea>
                </div>
              </div>
            </form>
          </div>
          <div class="panel-footer">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <div class="btn-toolbar">
                  <button class="btn-primary btn" onclick="javascript:$('#natureza-consulta-form').submit();">Cadastrar</button>
                  <button class="btn-default btn">Cancelar</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- container -->
</div>
<!--wrap -->
</div>

<?php include "footer.php" ?>