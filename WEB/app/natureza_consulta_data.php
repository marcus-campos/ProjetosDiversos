<?php
  require_once '../controller/consulta/NaturezaController.php';
  $controller = new NaturezaController;
  $result = $controller->listarData();

  $rows = array();
  while($r = mysqli_fetch_assoc($result)) {
      $rows[] = $r;
  }
  print json_encode($rows);