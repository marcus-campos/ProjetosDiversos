<?php
	require_once '../model/consulta/NaturezaModel.php';

	if($_POST && $_POST['btn_submit']){
    $controller = new NaturezaController;
    $salvo = $controller->cadastrar();
  }

	class NaturezaController
	{
		public function listar()
		{
			$natureza = new NaturezaModel();
			$naturezas = $natureza->loadNaturezaConsulta();
			$_REQUEST['naturezas'] = $naturezas;
			require_once '../view/consulta/NaturezaView.php';
		}

		public function listarData()
    {
      require_once '../model/consulta/NaturezaModel.php';
      require_once '../controller/dbcontrol/db.inc.php';
      require_once '../lib/sanitize.php';

      $natureza = new NaturezaModel;

      return $natureza->all();
    }

    public function cadastrar(){
      require_once '../model/consulta/NaturezaModel.php';
      require_once '../controller/dbcontrol/db.inc.php';
      require_once '../lib/sanitize.php';

      $natureza = new NaturezaModel;
      $natureza->setNatureza($_POST['natureza']);
      $natureza->setObservacao($_POST['observacao']);
      return $natureza->save();
    }
	}
?>