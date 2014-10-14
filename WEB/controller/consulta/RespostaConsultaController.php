<?php
  if($_POST && $_POST['btn_submit']){
    $controller = new RespostaConsultaController;
    $salvo = $controller->cadastrar();
  }

  class RespostaConsultaController
  {
    public function listar()
    {
      require_once '../model/consulta/RespostaConsultaModel.php';
      require_once '../controller/dbcontrol/db.inc.php';
      require_once '../lib/sanitize.php';

      $resposta_consulta = new RespostaConsultaModel;

      return $resposta_consulta->all();
    }

    public function cadastrar(){
      require_once '../model/consulta/RespostaConsultaModel.php';
      require_once '../controller/dbcontrol/db.inc.php';
      require_once '../lib/sanitize.php';

      $resposta_consulta = new RespostaConsultaModel;
      $resposta_consulta->setAcao($_POST['acao']);
      $resposta_consulta->setFundamento($_POST['fundamento']);
      $resposta_consulta->setUsuariosIduser($_SESSION['iduser']);
      return $resposta_consulta->save();
    }
  }
?>