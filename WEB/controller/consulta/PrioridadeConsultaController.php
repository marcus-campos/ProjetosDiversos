<?php
  if($_POST && $_POST['btn_submit']){
    $controller = new PrioridadeConsultaController;
    $salvo = $controller->cadastrar();
  }

  class PrioridadeConsultaController
  {
    public function listar()
    {
      require_once '../model/consulta/PrioridadeConsultaModel.php';
      require_once '../controller/dbcontrol/db.inc.php';
      require_once '../lib/sanitize.php';

      $prioridade_consulta = new PrioridadeConsultaModel;

      return $prioridade_consulta->all();
    }

    public function cadastrar(){
      require_once '../model/consulta/PrioridadeConsultaModel.php';
      require_once '../controller/dbcontrol/db.inc.php';
      require_once '../lib/sanitize.php';

      $prioridade_consulta = new PrioridadeConsultaModel;
      $prioridade_consulta->setTitulo($_POST['titulo']);
      $prioridade_consulta->setDias($_POST['dias']);
      $prioridade_consulta->setHoras($_POST['horas']);
      $prioridade_consulta->setMinutos($_POST['minutos']);
      return $prioridade_consulta->save();
    }
  }
?>