<?php
  require_once '../controller/usuario/UsuarioController.php';

  $usuario = new UsuarioController;
  $usuario = $usuario->enable();

  return header("Location: /app/lista-usuarios.php");