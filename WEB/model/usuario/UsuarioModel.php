<?php 
	// require_once '../controller/dbcontrol/db.inc.php';
	// require_once '../lib/sanitize.php';
	
	class UsuarioModel 
	{ 	
		/* REGION GETTERS E SETTERS */ 
		private $iduser = null;
		private $login = null;
		private $senha = null;
		private $apelido = null;
		private $email = null;
		private $level = null;
		private $ultimoUpdate = null;
		private $ultimaConexao = null;
		private $status = null;
		
		//---------------------------------------------------------------------------
		public function getIduser(){
			return $this->iduser;
		}
	
		public function setIduser($iduser){
			$this->iduser = $iduser;
		}
		//---------------------------------------------------------------------------
		public function getLogin(){
			return $this->login;
		}
	
		public function setLogin($login){
			$this->login = $login;
		}
		//---------------------------------------------------------------------------
		public function getSenha(){
			return $this->senha;
		}
	
		public function setSenha($senha){
			$this->senha = $senha;
		}
		//---------------------------------------------------------------------------
		public function getApelido(){
			return $this->apelido;
		}
	
		public function setApelido($apelido){
			$this->apelido = $apelido;
		}
		//---------------------------------------------------------------------------
		public function getEmail(){
			return $this->email;
		}
	
		public function setEmail($email){
			$this->email = $email;
		}
		//---------------------------------------------------------------------------
		public function getLevel(){
			return $this->level;
		}
	
		public function setLevel($level){
			$this->level = $level;
		}
		//---------------------------------------------------------------------------
		public function getUltimoUpdate(){
			return $this->ultimoUpdate;
		}
	
		public function setUltimoUpdate($ultimoUpdate){
			$this->ultimoUpdate = $ultimoUpdate;
		}
		//---------------------------------------------------------------------------
		public function getUltimaConexao(){
			return $this->ultimaConexao;
		}
	
		public function setUltimaConexao($ultimaConexao){
			$this->ultimaConexao = $ultimaConexao;
		}
		//---------------------------------------------------------------------------
		public function getStatus(){
			return $this->status;
		}
	
		public function setStatus($status){
			$this->status = $status;
		}
		//---------------------------------------------------------------------------
		/* ENDREGION GETTERS E SETTERS */		
		//---------------------------------------------------------------------------
		/* REGION SAVE */
		public function save() 
		{ 
			$mysqlObj = new MySQLDB();
			$login = $this->getLogin();
			$email = $this->getEmail();
			$senha = md5($this->getSenha());
			$apelido = $this->getApelido();
			$status = $this->getStatus();
			$level = $this->getLevel();
			$sql = "INSERT INTO usuarios(login,senha,apelido,email,status,level,ultimo_update) VALUES('$login','$email','$senha','$apelido', '$status', $level, sysdate())";
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
		//---------------------------------------------------------------------------
		function searchLoginAndPassword()		
		{	
			$mysqlObj = new MySQLDB();
			$login = $this->getLogin();
			$password = $this->getSenha();	
			$password = md5($password);
			$sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$password'";			
			return $mysqlObj->query($sql);		
		}

		function all()		
		{	
			$mysqlObj = new MySQLDB();
			$sql = "SELECT * FROM usuarios";			
			return $mysqlObj->query($sql);		
		}	
		/* ENDREGION SELECT */
		
		/*REGION OUTRAS FUNÇOES*/
		
		/* ENDREGION OUTRAS FUNÇOES */
}
?>
