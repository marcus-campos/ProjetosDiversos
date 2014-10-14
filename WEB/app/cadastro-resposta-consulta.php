<?php
  include "header.php";
  require_once '../controller/consulta/RespostaConsultaController.php';
  $breadcumb = ['lista-resposta-consulta.php' => 'Respostas das consultas', 'cadastro-resposta-consulta.php' => 'Cadastro'];
?>

<div id="page-content">
<div id='wrap'>
  <div id="page-heading">
    <?php include 'breadcumb.php' ?>
    <h1>Resposta da consulta</h1>
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
            <h4>Resposta das consultas</h4>
          </div>
          <div class="panel-body">
            <h3>NOVO</h3>
            <br>
            <form class="form-horizontal" id="resposta-consulta-form" method="post">
              <input name="btn_submit" type="hidden" value="true" class="form-control" id="fd_login">
              <div class="form-group">
                <label for="fd_acao" class="col-sm-3 control-label">Ação</label>
                <div class="col-sm-6">
                  <textarea name="acao" id="fd_acao" cols="50" rows="4" class="form-control"></textarea>
                </div>
              </div>
              <div class="form-group">
                <label for="fd_fundamento" class="col-sm-3 control-label">Fundamento</label>
                <div class="col-sm-6">
                  <textarea name="fundamento" id="fd_fundamento" cols="50" rows="4" class="form-control"></textarea>
                </div>
              </div>
            </form>
          </div>
          <div class="panel-footer">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <div class="btn-toolbar">
                  <button class="btn-primary btn" onclick="javascript:$('#resposta-consulta-form').submit();">Cadastrar</button>
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