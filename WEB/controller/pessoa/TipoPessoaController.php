<?php
  if($_POST && isset($_POST['btn_submit'])){
    $controller = new TipoPessoaController;
    $salvo = $controller->cadastrar();
  }

  class TipoPessoaController
  {
    public function listar()
    {
      require_once '../model/pessoa/TipoPessoaModel.php';
      require_once '../controller/dbcontrol/db.inc.php';
      require_once '../lib/sanitize.php';

      $tipo_pessoa = new TipoPessoaModel;

      return $tipo_pessoa->all();
    }

    public function cadastrar(){
      require_once '../model/pessoa/TipoPessoaModel.php';
      require_once '../controller/dbcontrol/db.inc.php';
      require_once '../lib/sanitize.php';
      $tipo_pessoa = new TipoPessoaModel;
      $tipo_pessoa->setTitulo($_POST['titulo']);
      $tipo_pessoa->setDashboard($_POST['dashboard']);
      return $tipo_pessoa->save();
    }
  }
?>