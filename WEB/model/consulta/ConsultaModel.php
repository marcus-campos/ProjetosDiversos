<?php 
	require_once '../controller/dbcontrol/db.inc.php';
	
	class ConsultaModel 
	{ 	
		private $idconsulta = null;
		private $usuariosIduser = null;
		private $naturezaConsultaIdnaturezaConsulta = null;
		private $assunto = null;
		private $descricao = null;
		private $prioridadeConsultaIdprioridadeConsulta = null;
		private $colaboradorConsulta = null;
		private $dataConsulta = null;
		private $entregaConsulta = null;
		private $etapa = null;
	
		//---------------------------------------------------------------------------
		public function getIdconsulta(){
			return $this->idconsulta;
		}
	
		public function setIdconsulta($idconsulta){
			$this->idconsulta = $idconsulta;
		}
		//---------------------------------------------------------------------------
		public function getUsuariosIduser(){
			return $this->usuariosIduser;
		}
	
		public function setUsuariosIduser($usuariosIduser){
			$this->usuariosIduser = $usuariosIduser;
		}
		//---------------------------------------------------------------------------
		public function getNaturezaConsultaIdnaturezaConsulta(){
			return $this->naturezaConsultaIdnaturezaConsulta;
		}
	
		public function setNaturezaConsultaIdnaturezaConsulta($naturezaConsultaIdnaturezaConsulta){
			$this->naturezaConsultaIdnaturezaConsulta = $naturezaConsultaIdnaturezaConsulta;
		}
		//---------------------------------------------------------------------------
		public function getAssunto(){
			return $this->assunto;
		}
	
		public function setAssunto($assunto){
			$this->assunto = $assunto;
		}
		//---------------------------------------------------------------------------
		public function getDescricao(){
			return $this->descricao;
		}
	
		public function setDescricao($descricao){
			$this->descricao = $descricao;
		}
		//---------------------------------------------------------------------------
		public function getPrioridadeConsultaIdprioridadeConsulta(){
			return $this->prioridadeConsultaIdprioridadeConsulta;
		}
	
		public function setPrioridadeConsultaIdprioridadeConsulta($prioridadeConsultaIdprioridadeConsulta){
			$this->prioridadeConsultaIdprioridadeConsulta = $prioridadeConsultaIdprioridadeConsulta;
		}
		//---------------------------------------------------------------------------
		public function getColaboradorConsulta(){
			return $this->colaboradorConsulta;
		}
	
		public function setColaboradorConsulta($colaboradorConsulta){
			$this->colaboradorConsulta = $colaboradorConsulta;
		}
		//---------------------------------------------------------------------------
		public function getDataConsulta(){
			return $this->dataConsulta;
		}
	
		public function setDataConsulta($dataConsulta){
			$this->dataConsulta = $dataConsulta;
		}
		//---------------------------------------------------------------------------
		public function getEntregaConsulta(){
			return $this->entregaConsulta;
		}
	
		public function setEntregaConsulta($entregaConsulta){
			$this->entregaConsulta = $entregaConsulta;
		}
		//---------------------------------------------------------------------------
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
			require_once '../controller/dbcontrol/db.inc.php';	
			$mysqlObj = new MySQLDB();
			$usuariosIduser = $this->getUsuariosIduser();	
			$assunto = $this->getAssunto();
			$naturezaConsultaIdnaturezaConsulta = $this->getNaturezaConsultaIdnaturezaConsulta();
			$descricao = $this->getDescricao();
			$sql = "INSERT INTO consulta(usuarios_iduser,natureza_consulta_idnatureza_consulta,assunto,descricao,data_consulta,etapa) VALUES($usuariosIduser,$naturezaConsultaIdnaturezaConsulta,'$assunto','$descricao',sysdate(),'1')";	
			$mysqlObj->query($sql);
			$idConsulta = $mysqlObj->last_id();			
			return $idConsulta;
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