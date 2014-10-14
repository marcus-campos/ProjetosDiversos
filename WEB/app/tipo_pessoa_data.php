<?php
  require_once '../controller/pessoa/TipoPessoaController.php';
  $controller = new TipoPessoaController;
  $result = $controller->listar();

  $rows = array();
  while($r = mysqli_fetch_assoc($result)) {
      $rows[] = $r;
  }
  print json_encode($rows);