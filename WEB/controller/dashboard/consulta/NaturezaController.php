<?php 
	require_once '../model/dashboard/consulta/NaturezaModel.php';	
	
	class NaturezaController 
	{ 
		public function listar() 
		{ 	
			$natureza = new NaturezaModel();
			$naturezas = $natureza->loadNaturezaConsulta(); 
			$_REQUEST['nconsultas'] = $naturezas;
			require_once '../view/dashboard/consulta/NaturezaView.php'; 
		} 
	} 
?>