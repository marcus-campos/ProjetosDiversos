<?php
  if(isset($_POST['btn_submit_pessoa']) && $_POST['btn_submit_pessoa']){
    $controller = new PessoaController;
    $salvo = $controller->cadastrar();
  }else if(isset($_POST['btn_submit_empresa']) && $_POST['btn_submit_empresa']){
    $controller = new PessoaController;
    $salvo = $controller->cadastrar_empresa();
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

    public function listar_empresas()
    {
      require_once '../model/pessoa/PessoaModel.php';
      require_once '../controller/dbcontrol/db.inc.php';
      require_once '../lib/sanitize.php';

      $pessoas = new PessoaModel;

      return $pessoas->all_empresas();
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

      if($_POST['pessoas_idpessoa']){
        $empresa->setPessoaIdpessoa($_POST['pessoas_idpessoa']);
      }

      return $pessoa->save();
    }

    public function cadastrar_empresa(){
      require_once '../model/pessoa/PessoaModel.php';
      require_once '../controller/dbcontrol/db.inc.php';
      require_once '../lib/sanitize.php';
      $empresa = new PessoaModel;
      $empresa->setNome($_POST['nome']);
      $empresa->setSobrenome($_POST['sobrenome']);
      $empresa->setTelefone($_POST['telefone']);
      $empresa->setCelular($_POST['celular']);
      $empresa->setCnpj($_POST['cnpj']);

      if($_POST['pessoas_idpessoa']){
        $empresa->setPessoaIdpessoa($_POST['pessoas_idpessoa']);
      }
      $empresa->setTipoPessoaIdtipoPessoa($_POST['tipo_pessoa_idtipo_pessoa']);
      $id = $empresa->save_empresa();

      if(!$_POST['pessoas_idpessoa']){
        $empresa->setPessoaIdpessoa($id);
        $empresa->save_empresa();
      }

      return $id;
    }
  }
?>