<?php
  require_once '../controller/pessoa/PessoaController.php';
  $controller = new PessoaController;
  $result = $controller->listar_empresas();

  $rows = array();
  while($r = mysqli_fetch_assoc($result)) {
      $rows[] = $r;
  }
  print json_encode($rows);