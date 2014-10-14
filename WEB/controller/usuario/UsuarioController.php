<?php

  if(isset($_POST['btn_submit']) && $_POST['btn_submit']){
    $controller = new UsuarioController;
    $salvo = $controller->cadastrar();
  }

	class UsuarioController 
	{ 
		public function listar() 
		{ 
			require_once '../model/usuario/UsuarioModel.php';
      require_once '../controller/dbcontrol/db.inc.php';
      require_once '../lib/sanitize.php';

      $usuarios = new UsuarioModel;

      return $usuarios->all();
		} 		


    public function enable(){
      require_once '../model/usuario/UsuarioModel.php';
      require_once '../controller/dbcontrol/db.inc.php';
      require_once '../lib/sanitize.php';

      $usuario = new UsuarioModel;
      $usuario->setIduser($_GET['usuario']);

      return $usuario->enable();
    }

    public function disable(){
      require_once '../model/usuario/UsuarioModel.php';
      require_once '../controller/dbcontrol/db.inc.php';
      require_once '../lib/sanitize.php';

      $usuario = new UsuarioModel;
      $usuario->setIduser($_GET['usuario']);

      return $usuario->disable();
    }

    public function cadastrar(){
      require_once '../model/usuario/UsuarioModel.php';
      require_once '../controller/dbcontrol/db.inc.php';
      require_once '../lib/sanitize.php';
      $usuario = new UsuarioModel;
      $usuario->setLogin($_POST['login']);
      $usuario->setEmail($_POST['email']);
      $usuario->setSenha($_POST['senha']);
      $usuario->setApelido($_POST['apelido']);
      $usuario->setLevel(0);
      $usuario->setStatus('1');
      return $usuario->save();
    }
		//---------------------------------------------------------------------------
		public function logar() 
		{ 			
			require_once 'model/usuario/UsuarioModel.php'; 
			require_once 'controller/dbcontrol/db.inc.php';
			require_once 'lib/sanitize.php';
			$mysqlObj = new MySQLDB();
			$usuario = new UsuarioModel();
			$usuario->setLogin($_POST['login']);
			$usuario->setSenha($_POST['password']); 
			$usuarios = $usuario->searchLoginAndPassword(); 
			
			
			if($row = $mysqlObj->fetch_array($usuarios))
			{		
				$_SESSION['iduser'] = $row['iduser'];			
				$_SESSION['apelido'] = $row['apelido'];
				$_SESSION['login'] = $row['login'];
				$_SESSION['level'] = $row['level'];
				$_SESSION['status'] = $row['status'];
				
				if($row['status'] == 1)
				{
					header("Location: app/");	
				}
				else
				{
					header("Location: index.php");	
				}
			}
			else
			{
				return "Login ou senha inválido!";
			}
		} 
	} 
?>
