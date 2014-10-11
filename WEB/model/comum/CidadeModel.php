<?php 
	require_once '../../controller/dbcontrol/db.inc.php';
	
	class CidadesModel 
	{ 	
		/* REGION GETTERS E SETTERS */ 
		private $id = null;
		private $nome = null;
		private $estadoId = null;
		
		//---------------------------------------------------------------------------
		public function getId(){
			return $this->id;
		}
	
		public function setId($id){
			$this->id = $id;
		}
		//---------------------------------------------------------------------------
		public function getNome(){
			return $this->nome;
		}
	
		public function setNome($nome){
			$this->nome = $nome;
		}
		//---------------------------------------------------------------------------
		public function getEstadoId(){
			return $this->estadoId;
		}
	
		public function setEstadoId($estadoId){
			$this->estadoId = $estadoId;
		}
		//---------------------------------------------------------------------------
		/* ENDREGION GETTERS E SETTERS */		
		//---------------------------------------------------------------------------
		/* REGION SAVE */
		public function save() 
		{ 
			// logica para salvar cliente no banco 
		} 
		/* ENDREGION SAVE */
		//---------------------------------------------------------------------------
		/* REGION UPDATE */
		//---------------------------------------------------------------------------
		public function update() 
		{ 
			// logica para atualizar cliente no banco 
		} 
		/* ENDREGION UPDATE */
		//---------------------------------------------------------------------------
		/* REGION REMOVE */
		//---------------------------------------------------------------------------
		public function remove() 
		{ 
			// logica para remover cliente do banco 
		}
		
		/* ENDREGION REMOVE */	
		//---------------------------------------------------------------------------		
		/* REGION SELECT */
		
		//---------------------------------------------------------------------------
		function loadCitiesQuery()		
		{		
			$mysqlObj = new MySQLDB();
			$ufId = $this->getEstadoId();	
			$sql = "SELECT * FROM cidade nome WHERE estado_id = $ufId ORDER BY nome";			
			return $mysqlObj->query($sql);		
		}		
		/* ENDREGION SELECT */
	} 
?>

