<?php
	require_once '../model/consulta/AnexoModel.php'; 

	
	class AnexoController
	{	
		public function save()
		{
			$anexo = new AnexoModel();
			$nome = $_REQUEST['nomeArquivo'];
			$caminhoServidor = $_REQUEST['caminhoArquivo'];
			$anexo ->setNome($nome);
			$anexo ->setCaminhoServidor($caminhoServidor);		
			return $anexo ->save(); 
		}	
	}
?>