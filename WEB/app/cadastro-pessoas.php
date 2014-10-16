<?php
  include "header.php";
  require_once '../controller/dbcontrol/db.inc.php';
  require_once '../controller/pessoa/PessoaController.php';
  require_once '../controller/pessoa/TipoPessoaController.php';
  $tipo_pessoas_ctrl = new TipoPessoaController;
  $mysqlObj = new MySQLDB();
  $tipo_pessoas = $tipo_pessoas_ctrl->listar();

  $empresas_ctrl = new PessoaController;
  $empresas = $empresas_ctrl->listar_empresas();
  $breadcumb = [URL . 'lista-pessoas.php' => 'Pessoas', URL . 'cadastro-pessoas.php' => 'Cadastro'];
?>

<div id="page-content">
<div id='wrap'>
  <div id="page-heading">
    <?php include 'breadcumb.php' ?>
    <h1>Pessoas</h1>
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
            <h4>Pessoas</h4>
          </div>
          <div class="panel-body">
            <h3>NOVO</h3>
            <br>
            <form class="form-horizontal" id="usuario-form" method="post">
              <input name="btn_submit_pessoa" type="hidden" value="true" class="form-control" id="fd_login">
              <div class="form-group">
                <label for="fd_nome" class="col-sm-3 control-label">Nome</label>
                <div class="col-sm-6">
                  <input name="nome" type="text" class="form-control" id="fd_nome">
                </div>
              </div>
              <div class="form-group">
                <label for="fd_sobrenome" class="col-sm-3 control-label">Sobrenome</label>
                <div class="col-sm-6">
                  <input name="sobrenome" type="text" class="form-control" id="fd_sobrenome">
                </div>
              </div>
              <div class="form-group">
                <label for="fd_telefone" class="col-sm-3 control-label">Telefone</label>
                <div class="col-sm-6">
                  <input name="telefone" type="text" class="form-control" id="fd_telefone">
                </div>
              </div>
              <div class="form-group">
                <label for="fd_celular" class="col-sm-3 control-label">Celular</label>
                <div class="col-sm-6">
                  <input name="celular" type="text" class="form-control" id="fd_celular">
                </div>
              </div>
              <div class="form-group">
                <label for="fd_rg" class="col-sm-3 control-label">RG</label>
                <div class="col-sm-6">
                  <input name="rg" type="text" class="form-control" id="fd_rg">
                </div>
              </div>
              <div class="form-group">
                <label for="fd_cpf" class="col-sm-3 control-label">CPF</label>
                <div class="col-sm-6">
                  <input name="cpf" type="text" class="form-control" id="fd_cpf">
                </div>
              </div>
              <div class="form-group">
                <label for="fd_cnpj" class="col-sm-3 control-label">CNPJ</label>
                <div class="col-sm-6">
                  <input name="cnpj" type="text" class="form-control" id="fd_cnpj">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 control-label">Data de nascimento</label>
                <div class="col-sm-6">
                  <input type="text" name="data_nasc" class="form-control" id="datepicker">
                </div>
              </div>
              <!-- tipo_pessoa_idtipo_pessoa -->
              <div class="form-group">
                <label for="fd_tipo_pessoa_idtipo_pessoa" class="col-sm-3 control-label">Tipo de Pessoa</label>
                <div class="col-sm-6">
                  <select name="tipo_pessoa_idtipo_pessoa" id="fd_tipo_pessoa_idtipo_pessoa" class="form-control">
                    <?php while($row = $mysqlObj->fetch_array($tipo_pessoas)):?>
                      <option value="<?=$row['idtipo_pessoa']?>"><?=$row['titulo']?></option>
                    <?php endwhile;?>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label for="fd_pessoas_idpessoa" class="col-sm-3 control-label">Empresa</label>
                <div class="col-sm-6">
                  <select name="pessoas_idpessoa" id="fd_pessoas_idpessoa" class="form-control">
                    <option value="" selected>Não pertence a uma empresa</option>
                    <?php while($row = $mysqlObj->fetch_array($empresas)):?>
                      <option value="<?=$row['idpessoa']?>"><?=$row['nome']?></option>
                    <?php endwhile;?>
                  </select>
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

<script>
$(document).ready(function() {
  $('#datepicker').datepicker();
});
</script>