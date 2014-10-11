<?php
	class AnexoModel{
		private $idanexo = null;
		private $nome = null;
		private $caminhoServidor = null;
	
		public function getIdanexo(){
			return $this->idanexo;
		}
	
		public function setIdanexo($idanexo){
			$this->idanexo = $idanexo;
		}
	
		public function getNome(){
			return $this->nome;
		}
	
		public function setNome($nome){
			$this->nome = $nome;
		}
	
		public function getCaminhoServidor(){
			return $this->caminhoServidor;
		}
	
		public function setCaminhoServidor($caminhoServidor){
			$this->caminhoServidor = $caminhoServidor;
		}
		
		public function save(){
			require_once '../controller/dbcontrol/db.inc.php';
			$mysqlObj = new MySQLDB();
			$nome = $this->getNome();
			$caminho_servidor = $this->	getCaminhoServidor();
			$sql = "INSERT INTO anexo (nome,caminho_servidor) VALUES ('$nome','$caminho_servidor')";
			$mysqlObj->query($sql);
			$idAnexo = $mysqlObj->last_id();			
			return $idAnexo;
		}
	}
?>