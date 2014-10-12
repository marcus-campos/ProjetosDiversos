<?php
  include "header.php";
  require_once '../controller/usuario/UsuarioController.php';
  $breadcumb = ['lista-usuarios.php' => 'Usuários', 'cadastro-usuarios.php' => 'Cadastro'];
?>

<div id="page-content">
<div id='wrap'>
  <div id="page-heading">
    <?php include 'breadcumb.php' ?>
    <h1>Usuários</h1>
    <!-- <div class="options">
      <div class="btn-toolbar">
        <div class="btn-group hidden-xs">
          <a href='#' class="btn btn-default dropdown-toggle" data-toggle='dropdown'><i class="fa fa-cloud-download"></i><span class="hidden-sm"> Export as  </span><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Text File (*.txt)</a></li>
            <li><a href="#">Excel File (*.xlsx)</a></li>
            <li><a href="#">PDF File (*.pdf)</a></li>
          </ul>
        </div>
        <a href="#" class="btn btn-default"><i class="fa fa-cog"></i></a>
      </div>
    </div> -->
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
            <h4>Usuários</h4>
          </div>
          <div class="panel-body">
            <h3>NOVO</h3>
            <br>
            <form class="form-horizontal" id="usuario-form" method="post">
              <input name="btn_submit" type="hidden" value="true" class="form-control" id="fd_login">
              <div class="form-group">
                <label for="fd_login" class="col-sm-3 control-label">Login</label>
                <div class="col-sm-6">
                  <input name="login" type="text" class="form-control" id="fd_login">
                </div>
              </div>
              <div class="form-group">
                <label for="fd_login" class="col-sm-3 control-label">Senha</label>
                <div class="col-sm-6">
                  <input name="senha" type="password" class="form-control" id="fd_login">
                </div>
              </div>
              <div class="form-group">
                <label for="fd_login" class="col-sm-3 control-label">Apelido</label>
                <div class="col-sm-6">
                  <input name="apelido" type="text" class="form-control" id="fd_login">
                </div>
              </div>
              <div class="form-group">
                <label for="fd_login" class="col-sm-3 control-label">Email</label>
                <div class="col-sm-6">
                  <input name="email" type="email" class="form-control" id="fd_login">
                </div>
              </div>
            </form>
          </div>
          <div class="panel-footer">
            <div class="row">
              <div class="col-sm-6 col-sm-offset-3">
                <div class="btn-toolbar">
                  <button class="btn-primary btn" onclick="javascript:$('#usuario-form').submit();">Cadastrar</button>
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