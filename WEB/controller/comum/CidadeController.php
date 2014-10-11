<?php 
	require_once '../../model/comum/m_cidades.php';
	
	if ($_GET['type'] == 'uf') {		
		$ajxCidade = new CidadesController(); 
		$ajxCidade->listar();
	}

	class CidadesController 
	{ 
		public function listar() 
		{ 	
			$ufId = $_GET['ufid'];
			$cidade = new CidadesModel();
			$cidade->setEstadoId($ufId); 
			$cidades = $cidade->loadCitiesQuery(); 
			$_REQUEST['cidades'] = $cidades;
			require_once '../../view/comum/v_cidades.php'; 
		} 
	} 
?>