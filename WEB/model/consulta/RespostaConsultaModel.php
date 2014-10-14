<?php
  require_once '../controller/dbcontrol/db.inc.php';

  class RespostaConsultaModel
  {
    private $idrespostaConsulta = null;
    private $acao = null;
    private $fundamento = null;
    private $dataResposta = null;
    private $usuariosIduser = null;

    public function getIdrespostaConsulta(){
      return $this->idrespostaConsulta;
    }

    public function setIdrespostaConsulta($idrespostaConsulta){
      $this->idrespostaConsulta = $idrespostaConsulta;
    }

    public function getAcao(){
      return $this->acao;
    }

    public function setAcao($acao){
      $this->acao = $acao;
    }

    public function getFundamento(){
      return $this->fundamento;
    }

    public function setFundamento($fundamento){
      $this->fundamento = $fundamento;
    }

    public function getDataResposta(){
      return $this->dataResposta;
    }

    public function setDataResposta($dataResposta){
      $this->dataResposta = $dataResposta;
    }

    public function getUsuariosIduser(){
      return $this->usuariosIduser;
    }

    public function setUsuariosIduser($usuariosIduser){
      $this->usuariosIduser = $usuariosIduser;
    }

    public function save()
    {
      $mysqlObj = new MySQLDB();
      $acao = $this->getAcao();
      $fundamento = $this->getFundamento();
      $usuarios_iduser = $this->getUsuariosIduser();

      $sql = "INSERT INTO resposta_consulta(acao, fundamento, data_resposta, usuarios_iduser) VALUES('$acao', '$fundamento', sysdate(), $usuarios_iduser)";
      $mysqlObj->query($sql);
      $id = $mysqlObj->last_id();
      return $id;
    }

    function all()
    {
      $mysqlObj = new MySQLDB();
      $sql = "SELECT * FROM resposta_consulta";
      return $mysqlObj->query($sql);
    }
  }
?>

