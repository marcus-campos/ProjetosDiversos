<?php
  if($_POST && $_POST['btn_submit_pessoa']){
    $controller = new PessoaController;
    $salvo = $controller->cadastrar();
  }

  class PessoaController
  {
    public function listar()
    {
      require_once '../model/pessoa/PessoaModel.php';
      require_once '../controller/dbcontrol/db.inc.php';
      require_once '../lib/sanitize.php';

      $pessoas = new PessoaModel;

      return $pessoas->all();
    }

    public function cadastrar(){
      require_once '../model/pessoa/PessoaModel.php';
      require_once '../controller/dbcontrol/db.inc.php';
      require_once '../lib/sanitize.php';
      $pessoa = new PessoaModel;
      $pessoa->setNome($_POST['nome']);
      $pessoa->setSobrenome($_POST['sobrenome']);
      $pessoa->setTelefone($_POST['telefone']);
      $pessoa->setCelular($_POST['celular']);
      $pessoa->setRg($_POST['rg']);
      $pessoa->setCpf($_POST['cpf']);
      $pessoa->setCnpj($_POST['cnpj']);
      $pessoa->setDataNasc(date("Y-m-d", strtotime($_POST['data_nasc'])));
      $pessoa->setUsuariosIduser($_SESSION['iduser']);
      $pessoa->setTipoPessoaIdtipoPessoa($_POST['tipo_pessoa_idtipo_pessoa']);
      return $pessoa->save();
    }
  }
?>