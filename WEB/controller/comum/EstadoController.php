<?php 
	require_once '../model/comum/EstadoModel.php'; 
	
	class EstadosController 
	{ 
		public function listar() 
		{ 
			$estado = new EstadosModel(); 
			$estados = $estado->loadStateQuery(); 
			$_REQUEST['estados'] = $estados;
			require_once '../view/comum/EstadoView.php'; 
		} 
	} 
?>