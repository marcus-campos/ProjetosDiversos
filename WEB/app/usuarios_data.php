<?php
  require_once '../controller/usuario/UsuarioController.php';

  $usuario = new UsuarioController;
  $usuarios = $usuario->listar();

  $rows = array();
  while($r = mysqli_fetch_assoc($usuarios)) {
      $rows[] = $r;
  }
  print json_encode($rows);