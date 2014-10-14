<?php
  include "header.php";
  require_once '../controller/pessoa/TipoPessoaController.php';
  $breadcumb = ['lista-tipo-pessoa.php' => 'Tipos de Pessoas', 'cadastro-tipo-pessoa.php' => 'Cadastro'];
?>

<div id="page-content">
<div id='wrap'>
  <div id="page-heading">
    <?php include 'breadcumb.php' ?>
    <h1>Tipo de Pessoa</h1>
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
            <h4>Tipos de Pessoas</h4>
          </div>
          <div class="panel-body">
            <h3>NOVO</h3>
            <br>
            <form class="form-horizontal" id="tipo-pessoa-form" method="post">
              <input name="btn_submit" type="hidden" value="true" class="form-control">
              <div class="form-group">
                <label for="fd_titulo" class="col-sm-3 control-label">Título</label>
                <div class="col-sm-6">
                  <input name="titulo" type="text" class="form-control" id="fd_titulo">
                </div>
              </div>
              <div class="form-group">
                <label for="fd_dashboard" class="col-sm-3 control-label">Dashboard</label>
                <div class="col-sm-6">
                  <input name="dashboard" type="text" class="form-control" id="fd_dashboard">
                </div>
              </div>
            </form>
          </div>
          <div class="panel-footer">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <div class="btn-toolbar">
                  <button class="btn-primary btn" onclick="javascript:$('#tipo-pessoa-form').submit();">Cadastrar</button>
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