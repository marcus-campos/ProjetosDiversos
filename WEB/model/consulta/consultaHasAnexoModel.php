<?php
	class consultaHasAnexoModel{
		private $consultaIdconsulta = null;
		private $anexoIdanexo = null;
		private $dataAnexo = null;
		private $status = null;
	
		public function getConsultaIdconsulta(){
			return $this->consultaIdconsulta;
		}
	
		public function setConsultaIdconsulta($consultaIdconsulta){
			$this->consultaIdconsulta = $consultaIdconsulta;
		}
	
		public function getAnexoIdanexo(){
			return $this->anexoIdanexo;
		}
	
		public function setAnexoIdanexo($anexoIdanexo){
			$this->anexoIdanexo = $anexoIdanexo;
		}
	
		public function getDataAnexo(){
			return $this->dataAnexo;
		}
	
		public function setDataAnexo($dataAnexo){
			$this->dataAnexo = $dataAnexo;
		}
	
		public function getStatus(){
			return $this->status;
		}
	
		public function setStatus($status){
			$this->status = $status;
		}
		
		
		public function save(){
			require_once '../controller/dbcontrol/db.inc.php';
			$mysqlObj = new MySQLDB();
			$consulta_idconsulta = $this->getConsultaIdconsulta();
			$anexo_idanexo= $this->getAnexoIdanexo();
			$sql = "INSERT INTO consulta_has_anexo (consulta_idconsulta,anexo_idanexo,data_anexo,status) VALUES ($anexo_idanexo,$consulta_idconsulta,sysdate(),'1')";
			$mysqlObj->query($sql);			
		}
	}

?>