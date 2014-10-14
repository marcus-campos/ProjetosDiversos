<?php
  require_once '../controller/consulta/PrioridadeConsultaController.php';
  $controller = new PrioridadeConsultaController;
  $result = $controller->listar();

  $rows = array();
  while($r = mysqli_fetch_assoc($result)) {
      $rows[] = $r;
  }
  print json_encode($rows);