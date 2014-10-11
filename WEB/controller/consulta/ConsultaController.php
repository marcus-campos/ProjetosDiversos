<?php
	require_once '../model/consulta/ConsultaModel.php'; 
	
	class ConsultaController
	{
		public function loadConsultasADefinir() 
		{ 
			$consulta = new ConsultaModel();
			$consultas = $consulta ->loadConsultasADefinir(); 
			$_REQUEST['nconsultas'] = $consultas;
			require_once '../view/consulta/NovasConsultasView.php'; 			
		} 	
		
		public function loadConsultasAAprovar() 
		{ 
			$consulta = new ConsultaModel();
			$consultas = $consulta ->loadConsultasAAprovar(); 
			$_REQUEST['nconsultas'] = $consultas;
			require_once '../view/consulta/RespostaConsultasView.php'; 			
		} 
		
		public function save()
		{
			$consulta = new ConsultaModel();
			$consulta ->setUsuariosIduser($_SESSION['iduser']);	
			$consulta ->setAssunto($_POST['txtassunto']);	
			$consulta ->setNaturezaConsultaIdnaturezaConsulta($_POST['tiposnatureza']);
			$consulta ->setDescricao($_POST['descricao']);
			return $consulta ->save(); 
		}	
	}
?>