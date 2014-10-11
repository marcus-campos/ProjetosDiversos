<?php
	
	
	class UsuarioController 
	{ 
		public function listar() 
		{ 
			
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
