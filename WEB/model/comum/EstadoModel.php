<?php 
	require_once '../controller/dbcontrol/db.inc.php';	
	class EstadosModel
	{ 		
		/* REGION GETTERS E SETTERS */ 
		private $id = null;
		private $nome = null;
		private $uf = null;
		private $pais = null;
		
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
		public function getUf(){
			return $this->uf;
		}
	
		public function setUf($uf){
			$this->uf = $uf;
		}
		//---------------------------------------------------------------------------
		public function getPais(){
			return $this->pais;
		}
	
		public function setPais($pais){
			$this->pais = $pais;
		}
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
		function loadStateQuery()		
		{			
			$mysqlObj = new MySQLDB();	
			$sql = "SELECT * FROM estado ORDER BY nome ASC";			
			return $mysqlObj->query($sql);		
		}
		/* ENDREGION SELECT */
	} 
?>

