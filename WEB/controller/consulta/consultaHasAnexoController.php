<?php
	require_once '../model/consulta/consultaHasAnexoModel.php'; 

	
	class consultaHasAnexoController
	{	
		public function save()
		{
			$consultaHasAnexo = new consultaHasAnexoModel();
			$anexo_idanexo = $_REQUEST['idAnexo'];
			$consulta_idconsulta = $_REQUEST['idConsulta'];
			$consultaHasAnexo ->setConsultaIdconsulta($anexo_idanexo);
			$consultaHasAnexo->setAnexoIdanexo($consulta_idconsulta);		
			return $consultaHasAnexo->save(); 
		}	
	}
?>