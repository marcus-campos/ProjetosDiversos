<?php 
	require_once '../model/consulta/NaturezaModel.php';	
	
	class NaturezaController 
	{ 
		public function listar() 
		{ 	
			$natureza = new NaturezaModel();
			$naturezas = $natureza->loadNaturezaConsulta(); 
			$_REQUEST['naturezas'] = $naturezas;
			require_once '../view/consulta/NaturezaView.php'; 
		} 
	} 
?>