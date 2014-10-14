<?php
	require_once '../controller/dbcontrol/db.inc.php';

	class TipoPessoaModel
	{
		private $titulo = null;
		private $dashboard = null;

		public function getTitulo(){
			return $this->titulo;
		}

		public function setTitulo($titulo){
			$this->titulo = $titulo;
		}

		public function getDashboard(){
			return $this->dashboard;
		}

		public function setDashboard($dashboard){
			$this->dashboard = $dashboard;
		}

		public function save()
    {
      $mysqlObj = new MySQLDB();
      $titulo = $this->getTitulo();
      $dashboard = $this->getDashboard();

      $sql = "INSERT INTO tipo_pessoa(titulo, dashboard) VALUES('$titulo', '$dashboard')";
      $mysqlObj->query($sql);
      $id = $mysqlObj->last_id();
      return $id;
    }

    function all()
    {
      $mysqlObj = new MySQLDB();
      $sql = "SELECT * FROM tipo_pessoa";
      return $mysqlObj->query($sql);
    }
	}
?>