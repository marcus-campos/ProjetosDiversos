<?php
  include "header.php";
  require_once '../controller/consulta/PrioridadeConsultaController.php';
  $breadcumb = ['lista-prioridade-consulta.php' => 'Prioridades de consulta', 'cadastro-prioridade-consulta.php' => 'Cadastro'];
?>

<div id="page-content">
<div id='wrap'>
  <div id="page-heading">
    <?php include 'breadcumb.php' ?>
    <h1>Prioridades de consulta</h1>
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
            <h4>Prioridades de consulta</h4>
          </div>
          <div class="panel-body">
            <h3>NOVO</h3>
            <br>
            <form class="form-horizontal" id="prioridade-consulta-form" method="post">
              <input name="btn_submit" type="hidden" value="true" class="form-control" id="fd_login">
              <div class="form-group">
                <label for="fd_titulo" class="col-sm-3 control-label">Título</label>
                <div class="col-sm-6">
                  <input name="titulo" type="text" class="form-control" id="fd_titulo">
                </div>
              </div>
              <div class="form-group">
                <label for="fd_dias" class="col-sm-3 control-label">Dias</label>
                <div class="col-sm-6">
                  <input name="dias" type="number" class="form-control" id="fd_dias">
                </div>
              </div>
              <div class="form-group">
                <label for="fd_horas" class="col-sm-3 control-label">Horas</label>
                <div class="col-sm-6">
                  <input name="horas" type="number" class="form-control" id="fd_horas">
                </div>
              </div>
              <div class="form-group">
                <label for="fd_minutos" class="col-sm-3 control-label">Minutos</label>
                <div class="col-sm-6">
                  <input name="minutos" type="number" class="form-control" id="fd_minutos">
                </div>
              </div>
            </form>
          </div>
          <div class="panel-footer">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <div class="btn-toolbar">
                  <button class="btn-primary btn" onclick="javascript:$('#prioridade-consulta-form').submit();">Cadastrar</button>
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