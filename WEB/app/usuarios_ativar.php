<?php
  require_once 'util.php';
  require_once '../controller/usuario/UsuarioController.php';

  $usuario = new UsuarioController;
  $usuario = $usuario->enable();

  return header("Location: ".URL."lista-usuarios.php");