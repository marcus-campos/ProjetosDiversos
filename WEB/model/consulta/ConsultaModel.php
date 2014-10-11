<?php 
	require_once '../controller/dbcontrol/db.inc.php';
	
	class ConsultaModel 
	{ 	
		private $idconsulta = null;
		private $usuariosIduser = null;
		private $naturezaConsultaIdnaturezaConsulta = null;
		private $descricao = null;
		private $prioridadeConsultaIdprioridadeConsulta = null;
		private $dataConsulta = null;
		private $entregaConsulta = null;
		private $etapa = null;
	
		public function getIdconsulta(){
			return $this->idconsulta;
		}
	
		public function setIdconsulta($idconsulta){
			$this->idconsulta = $idconsulta;
		}
	
		public function getUsuariosIduser(){
			return $this->usuariosIduser;
		}
	
		public function setUsuariosIduser($usuariosIduser){
			$this->usuariosIduser = $usuariosIduser;
		}
	
		public function getNaturezaConsultaIdnaturezaConsulta(){
			return $this->naturezaConsultaIdnaturezaConsulta;
		}
	
		public function setNaturezaConsultaIdnaturezaConsulta($naturezaConsultaIdnaturezaConsulta){
			$this->naturezaConsultaIdnaturezaConsulta = $naturezaConsultaIdnaturezaConsulta;
		}
	
		public function getDescricao(){
			return $this->descricao;
		}
	
		public function setDescricao($descricao){
			$this->descricao = $descricao;
		}
	
		public function getPrioridadeConsultaIdprioridadeConsulta(){
			return $this->prioridadeConsultaIdprioridadeConsulta;
		}
	
		public function setPrioridadeConsultaIdprioridadeConsulta($prioridadeConsultaIdprioridadeConsulta){
			$this->prioridadeConsultaIdprioridadeConsulta = $prioridadeConsultaIdprioridadeConsulta;
		}
	
		public function getDataConsulta(){
			return $this->dataConsulta;
		}
	
		public function setDataConsulta($dataConsulta){
			$this->dataConsulta = $dataConsulta;
		}
	
		public function getEntregaConsulta(){
			return $this->entregaConsulta;
		}
	
		public function setEntregaConsulta($entregaConsulta){
			$this->entregaConsulta = $entregaConsulta;
		}
	
		public function getEtapa(){
			return $this->etapa;
		}
	
		public function setEtapa($etapa){
			$this->etapa = $etapa;
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
		
		public function colaboradorConsulta()
		{
			$mysqlObj = new MySQLDB();
			$colaborador = getColaborador();
			$sql = "UPDATE consulta SET colaborador_consulta = $colaborador, prioridade_consulta_idprioridade_consulta = $prioridade, $entrega_consulta = $entrega, etapa = '3'";			
			return $mysqlObj->query($sql);		
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
		function loadNaturezaConsulta()		
		{		
			$mysqlObj = new MySQLDB();
			$sql = "SELECT * FROM natureza_consulta nome ORDER BY natureza";			
			return $mysqlObj->query($sql);		
		}	
		//---------------------------------------------------------------------------
		function loadConsultasADefinir()		
		{		
			$mysqlObj = new MySQLDB();
			$sql = "SELECT c.idconsulta, c.assunto, c.descricao, c.data_consulta, c.etapa, u.iduser, p.nome, p.sobrenome, n.idnatureza_consulta, n.natureza FROM consulta c 
						INNER JOIN usuarios u ON c.usuarios_iduser = u.iduser 
						INNER JOIN natureza_consulta n ON c.natureza_consulta_idnatureza_consulta = n.idnatureza_consulta
						INNER JOIN pessoas p ON u.iduser = p.usuarios_iduser
					WHERE c.etapa = '1'";			
			return $mysqlObj->query($sql);		
		}	
		function loadConsultasAAprovar()		
		{		
			$mysqlObj = new MySQLDB();
			$sql = "SELECT c.idconsulta, c.assunto, c.descricao, c.data_consulta, c.etapa, u.iduser, p.nome, p.sobrenome, n.idnatureza_consulta, n.natureza FROM consulta c 
						INNER JOIN usuarios u ON c.usuarios_iduser = u.iduser 
						INNER JOIN natureza_consulta n ON c.natureza_consulta_idnatureza_consulta = n.idnatureza_consulta
						INNER JOIN pessoas p ON u.iduser = p.usuarios_iduser
					WHERE c.etapa = '4'";			
			return $mysqlObj->query($sql);		
		}		
		//---------------------------------------------------------------------------
		function loadNaturezaConsulta()		
		{		
			$mysqlObj = new MySQLDB();
			$sql = "SELECT count(*) FROM consulta";			
			return $mysqlObj->query($sql);		
		}	
		/* ENDREGION SELECT */
	} 
?>