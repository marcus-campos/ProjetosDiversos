<?php
	require_once '../controller/dbcontrol/db.inc.php';

	class NaturezaModel
	{
		/* REGION GETTERS E SETTERS */
		private $idnaturezaconsulta = null;
		private $natureza = null;
		private $observacao = null;
		//---------------------------------------------------------------------------
		public function getIdnaturezaconsulta(){
			return $this->idnaturezaconsulta;
		}

		public function setIdnaturezaconsulta($idnaturezaconsulta){
			$this->idnaturezaconsulta = $idnaturezaconsulta;
		}
		//---------------------------------------------------------------------------
		public function getNatureza(){
			return $this->natureza;
		}

		public function setNatureza($natureza){
			$this->natureza = $natureza;
		}
		//---------------------------------------------------------------------------
		public function getObservacao(){
			return $this->observacao;
		}

		public function setObservacao($observacao){
			$this->observacao = $observacao;
		}


		//---------------------------------------------------------------------------
		/* ENDREGION GETTERS E SETTERS */
		//---------------------------------------------------------------------------
		/* REGION SAVE */
		public function save()
    {
      $mysqlObj = new MySQLDB();
      $natureza = $this->getNatureza();
      $observacao = $this->getObservacao();

      $sql = "INSERT INTO natureza_consulta(natureza, observacao) VALUES('$natureza', '$observacao')";
      $mysqlObj->query($sql);
      $id = $mysqlObj->last_id();
      return $id;
    }
		/* ENDREGION SAVE */
		//---------------------------------------------------------------------------
		/* REGION UPDATE */
		//---------------------------------------------------------------------------
		public function update()
		{
			// logica para atualizar cliente no banco
		}
		/* ENDREGION UPDATE */
		//---------------------------------------------------------------------------
		/* REGION REMOVE */
		//---------------------------------------------------------------------------
		public function remove()
		{
			// logica para remover cliente do banco
		}

		/* ENDREGION REMOVE */
		//---------------------------------------------------------------------------
		/* REGION SELECT */

		//---------------------------------------------------------------------------
		function loadNaturezaConsulta()
		{
			$mysqlObj = new MySQLDB();
			$sql = "SELECT * FROM natureza_consulta nome ORDER BY natureza";
			return $mysqlObj->query($sql);
		}

    function all()
    {
      $mysqlObj = new MySQLDB();
      $sql = "SELECT * FROM natureza_consulta";
      return $mysqlObj->query($sql);
    }
	}
?>