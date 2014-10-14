<?php 
	require_once '../controller/dbcontrol/db.inc.php';
	
	class PessoaModel 
	{ 	
		/* REGION GETTERS E SETTERS */ 
		private $idpessoa = null;
		private $nome = null;
		private $sobrenome = null;
		private $telefone = null;
		private $celular = null;
		private $rg = null;
		private $cpf = null;
		private $cnpj = null;
		private $dataNasc = null;
		private $ultimoUpdate = null;
		private $status = null;
		private $usuariosIduser = null;
		private $tipoPessoaIdtipoPessoa = null;
		private $pessoaIdpessoa = null;
		
		//---------------------------------------------------------------------------
		public function getIdpessoa(){
			return $this->idpessoa;
		}
	
		public function setIdpessoa($idpessoa){
			$this->idpessoa = $idpessoa;
		}
		//---------------------------------------------------------------------------
		public function getNome(){
			return $this->nome;
		}
	
		public function setNome($nome){
			$this->nome = $nome;
		}
		//---------------------------------------------------------------------------
		public function getSobrenome(){
			return $this->sobrenome;
		}
	
		public function setSobrenome($sobrenome){
			$this->sobrenome = $sobrenome;
		}
		//---------------------------------------------------------------------------
		public function getTelefone(){
			return $this->telefone;
		}
	
		public function setTelefone($telefone){
			$this->telefone = $telefone;
		}
		//---------------------------------------------------------------------------
		public function getCelular(){
			return $this->celular;
		}
	
		public function setCelular($celular){
			$this->celular = $celular;
		}
		//---------------------------------------------------------------------------
		public function getRg(){
			return $this->rg;
		}
	
		public function setRg($rg){
			$this->rg = $rg;
		}
		//---------------------------------------------------------------------------
		public function getCpf(){
			return $this->cpf;
		}
	
		public function setCpf($cpf){
			$this->cpf = $cpf;
		}
		//---------------------------------------------------------------------------
		public function getCnpj(){
			return $this->cnpj;
		}
	
		public function setCnpj($cnpj){
			$this->cnpj = $cnpj;
		}
		//---------------------------------------------------------------------------
		public function getDataNasc(){
			return $this->dataNasc;
		}
	
		public function setDataNasc($dataNasc){
			$this->dataNasc = $dataNasc;
		}
		//---------------------------------------------------------------------------
		public function getUltimoUpdate(){
			return $this->ultimoUpdate;
		}
	
		public function setUltimoUpdate($ultimoUpdate){
			$this->ultimoUpdate = $ultimoUpdate;
		}
		//---------------------------------------------------------------------------
		public function getStatus(){
			return $this->status;
		}
	
		public function setStatus($status){
			$this->status = $status;
		}
		//---------------------------------------------------------------------------
		public function getUsuariosIduser(){
			return $this->usuariosIduser;
		}
	
		public function setUsuariosIduser($usuariosIduser){
			$this->usuariosIduser = $usuariosIduser;
		}
		//---------------------------------------------------------------------------
		public function getTipoPessoaIdtipoPessoa(){
			return $this->tipoPessoaIdtipoPessoa;
		}
	
		public function setTipoPessoaIdtipoPessoa($tipoPessoaIdtipoPessoa){
			$this->tipoPessoaIdtipoPessoa = $tipoPessoaIdtipoPessoa;
		}
		//---------------------------------------------------------------------------
		public function getPessoaIdpessoa(){
			return $this->pessoaIdpessoa;
		}
	
		public function setPessoaIdpessoa($pessoaIdpessoa){
			$this->pessoaIdpessoa = $pessoaIdpessoa;
		}
		
		//---------------------------------------------------------------------------
		/* ENDREGION GETTERS E SETTERS */		
		//---------------------------------------------------------------------------
		/* REGION SAVE */
		public function save() 
		{ 
			$mysqlObj = new MySQLDB();
      $nome = $this->getNome();
      $sobrenome = $this->getSobrenome();
      $telefone = $this->getTelefone();
      $celular = $this->getCelular();
      $rg = $this->getRg();
      $cpf = $this->getCpf();
      $cnpj = $this->getCnpj();
      $data_nasc = $this->getDataNasc();

			$sql = "INSERT INTO pessoas(nome, sobrenome, telefone, celular, rg, cpf, cnpj, data_nasc,ultimo_update, status) VALUES('$nome', '$sobrenome', '$telefone', '$celular', '$rg', '$cpf', '$cnpj', '$data_nasc', sysdate(), '1')";
			$mysqlObj->query($sql);
			$id = $mysqlObj->last_id();
			return $id;
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
		

		function all()		
		{	
			$mysqlObj = new MySQLDB();
			$sql = "SELECT * FROM pessoas";			
			return $mysqlObj->query($sql);		
		}	
		//---------------------------------------------------------------------------
		function loadTipoAndIdPessoa()		
		{		
			$mysqlObj = new MySQLDB();
			$sql = "SELECT p.idpessoa, p.nome, p.sobrenome, p.status, tp.titulo, tp.dashboard FROM pessoas P
					INNER JOIN	tipo_pessoa tp ON p.tipo_pessoa_idtipo_pessoa = tp.p.idtipo_pessoa";			
			return $mysqlObj->query($sql);		
		}		
		/* ENDREGION SELECT */
	} 
?>