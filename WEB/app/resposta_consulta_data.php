<?php
  require_once '../controller/consulta/RespostaConsultaController.php';
  $controller = new RespostaConsultaController;
  $result = $controller->listar();

  $rows = array();
  while($r = mysqli_fetch_assoc($result)) {
      $rows[] = $r;
  }
  print json_encode($rows);