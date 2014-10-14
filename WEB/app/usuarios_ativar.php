<?php
  require_once '../controller/usuario/UsuarioController.php';

  $usuario = new UsuarioController;
  $usuario = $usuario->enable();

  return header("Location: /projetosdiversos/WEB/app/lista-usuarios.php");