<?php 	
	include "header.php";
	require_once "../controller/consulta/NaturezaController.php";
	require_once "../controller/consulta/ConsultaController.php";
	$userLogin = $_SESSION['login'];
	$consulta = new ConsultaController();
	
	/*if(isset($_POST['btncadastrar']))
	{
		$usuario = new UsuarioController();
		$usuario->cadastrar();
	}*/
	
	$tipoNatureza = new NaturezaController();
	if(isset($_POST['btncadastrar'])){
		$idConsulta = $consulta->save();
		$nomePasta = md5($idConsulta);
		$caminhoPasta = "../upload/".$nomePasta."/";
		
		mkdir("../upload/".$nomePasta, 0700);
		// Pasta onde o arquivo vai ser salvo
		$_UP['pasta'] = $caminhoPasta;
		
		// Tamanho máximo do arquivo (em Bytes)
		$_UP['tamanho'] = 1024 * 1024 * 5; // 2Mb
		
		// Array com as extensões permitidas
		$_UP['extensoes'] = array('jpg', 'png', 'gif', 'mp3', 'bmp', 'pdf', 'txt', 'zip', 'rar');
		
		// Renomeia o arquivo? (Se true, o arquivo será salvo como .jpg e um nome único)
		$_UP['renomeia'] = false;
		
		// Array com os tipos de erros de upload do PHP
		$_UP['erros'][0] = 'Não houve erro';
		$_UP['erros'][1] = 'O arquivo no upload é maior do que o limite do PHP';
		$_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especifiado no HTML';
		$_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
		$_UP['erros'][4] = 'Não foi feito o upload do arquivo';
		
		// Verifica se houve algum erro com o upload. Se sim, exibe a mensagem do erro
		if ($_FILES['arquivo']['error'] != 0) {
		die("Não foi possível fazer o upload, erro:<br />" . $_UP['erros'][$_FILES['arquivo']['error']]);
		exit; // Para a execução do script
		}
		
		// Caso script chegue a esse ponto, não houve erro com o upload e o PHP pode continuar
		
		// Faz a verificação da extensão do arquivo
		$extensao = strtolower(end(explode('.', $_FILES['arquivo']['name'])));
		if (array_search($extensao, $_UP['extensoes']) === false) {
		echo "Por favor, envie arquivos com as seguintes extensões: jpg, png ou gif";
		}
		
		// Faz a verificação do tamanho do arquivo
		else if ($_UP['tamanho'] < $_FILES['arquivo']['size']) {
		echo "O arquivo enviado é muito grande, envie arquivos de até 2Mb.";
		}
		
		// O arquivo passou em todas as verificações, hora de tentar movê-lo para a pasta
		else {
		// Primeiro verifica se deve trocar o nome do arquivo
		if ($_UP['renomeia'] == true) {
		// Cria um nome baseado no UNIX TIMESTAMP atual e com extensão .jpg
		$nome_final = time().'.jpg';
		} else {
		// Mantém o nome original do arquivo
		$nome_final = $_FILES['arquivo']['name'];
		}
		
		// Depois verifica se é possível mover o arquivo para a pasta escolhida
		if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta'] . $nome_final)) {
		// Upload efetuado com sucesso, exibe uma mensagem e um link para o arquivo
		echo "Upload efetuado com sucesso!";
		echo '<br /><a href="' . $_UP['pasta'] . $nome_final . '">Clique aqui para acessar o arquivo</a>';
		} else {
		// Não foi possível fazer o upload, provavelmente a pasta está incorreta
		echo "Não foi possível enviar o arquivo, tente novamente";
		}
		
		}
	}

?>

<script type="text/javascript" src="js/lib/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/functions.js"></script>
<script type="text/javascript" src="assets/js/jqueryui-1.10.3.min.js"></script>
<div id="page-content">
    <div id='wrap'>
        <div id="page-heading">
            <ol class="breadcrumb">
                <li><a href="index.php">Dashboard</a></li>
                <li>Registros</li>
                <li class="active">Pessoas</li>
            </ol>

            <h1>Cadastrar Usuario</h1>
        </div>
<div class="container">

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-midnightblue">
            <div class="panel-heading">
				<h4>Novo consulta</h4>
			<div class="options">   				
				<a href="javascript:;" class="panel-collapse"><i class="fa fa-chevron-down"></i></a>
			</div>
		</div>
            <div class="panel-body">
                <form action="#" method="post" class="form-horizontal row-border" enctype="multipart/form-data">
				
					
					<div class="form-group">
						<label class="col-sm-3 control-label">Natureza da Duvida</label>
                    <div class="col-sm-6">
                        <?php $tipoNatureza->listar();?>
                    </div>
            </div>
            	<div class="form-group">
						<label class="col-sm-3 control-label">Envolvidos</label>
						<div class="col-sm-6">
							<input type="text" name="txtenvolvidos" class="form-control" required="required">
						</div>
						<div class="col-sm-3"><p class="help-block">Ex: Joao,Maria,Jose</p></div>
				</div>  
                <div class="form-group">
						<label class="col-sm-3 control-label">Assunto</label>
						<div class="col-sm-6">
							<input type="text" name="txtassunto" class="form-control" required="required">
						</div>
						<div class="col-sm-3"><p class="help-block">Ex: Funcionario faltoso</p></div>
				</div>  
           <div class="form-group">
                <label class="col-sm-3 control-label">Descriçao</label>
                <div class="col-sm-6">
                    <textarea class="form-control" name="descricao"></textarea>
                </div>
            </div>  <div class="form-group">
                <label class="col-sm-3 control-label">Anexo de Arquivos</label>
                <div class="col-sm-6">
                    <div class="fileinput fileinput-new" data-provides="fileinput">
                        <div class="input-group">
                            <div class="form-control uneditable-input" data-trigger="fileinput">
                                <i class="fa fa-file fileinput-exists"></i>&nbsp;<span class="fileinput-filename"></span>
                            </div>
                            <span class="input-group-addon btn btn-default btn-file">
                                <span class="fileinput-new">Selecionar Arquivo</span>
                                <span class="fileinput-exists">Alterar</span>
                                <input type="file" name="arquivo">
                            </span>
                            <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remover</a>
                        </div>
                    </div>
                </div>
            </div>
            </div>
					
					<div class="panel-footer">
						<div class="row">
							<div class="col-sm-6 col-sm-offset-3">
								<div class="btn-toolbar">
									<button type="submit" name="btncadastrar" class="btn-primary btn">Cadastrar</button>
									<button class="btn-default btn">Cancelar</button>
								</div>
							</div>
						</div>
					</div>
                </form>
            </div>
            
            
        </div>
    </div>
</div>


</div> <!-- container -->
    </div> <!--wrap -->
</div> <!-- page-content -->

<?php include "footer.php" ?>