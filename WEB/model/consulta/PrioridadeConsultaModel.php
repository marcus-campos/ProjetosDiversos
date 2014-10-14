<?php
  require_once '../controller/dbcontrol/db.inc.php';

  class PrioridadeConsultaModel
  {
    private $titulo = null;
    private $dias = null;
    private $horas = null;
    private $minutos = null;
    private $idprioridadeConsulta = null;

    public function getTitulo(){
      return $this->titulo;
    }

    public function setTitulo($titulo){
      $this->titulo = $titulo;
    }

    public function getDias(){
      return $this->dias;
    }

    public function setDias($dias){
      $this->dias = $dias;
    }

    public function getHoras(){
      return $this->horas;
    }

    public function setHoras($horas){
      $this->horas = $horas;
    }

    public function getMinutos(){
      return $this->minutos;
    }

    public function setMinutos($minutos){
      $this->minutos = $minutos;
    }

    public function getIdprioridadeConsulta(){
      return $this->idprioridadeConsulta;
    }

    public function setIdprioridadeConsulta($idprioridadeConsulta){
      $this->idprioridadeConsulta = $idprioridadeConsulta;
    }

    public function save()
    {
      $mysqlObj = new MySQLDB();
      $titulo = $this->getTitulo();
      $dias = $this->getDias();
      $horas = $this->getHoras();
      $minutos = $this->getMinutos();

      $sql = "INSERT INTO prioridade_consulta(titulo, dias, horas, minutos) VALUES('$titulo', $dias, $horas, $minutos)";
      $mysqlObj->query($sql);
      $id = $mysqlObj->last_id();
      return $id;
    }

    function all()
    {
      $mysqlObj = new MySQLDB();
      $sql = "SELECT * FROM prioridade_consulta";
      return $mysqlObj->query($sql);
    }
  }
?>