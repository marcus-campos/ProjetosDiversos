<?php 	
	include "header.php";
	require_once "../controller/dashboard/consulta/NaturezaController.php";
	
	$userLogin = $_SESSION['login'];
	
	if(isset($_POST['btncadastrar']))
	{
		$usuario = new UsuarioController();
		$usuario->cadastrar();
	}
	
	$tipoNatureza = new NaturezaController();
?>

<script type="text/javascript" src="js/lib/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/functions.js"></script>

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
                <form action="#" method="post" class="form-horizontal row-border">
				
					
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
                                <input type="file" name="...">
                            </span>
                            <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                        </div>
                    </div>
                </div>
            </div>
            
                <div class="form-group">
                <label class="col-sm-3 control-label">Descriçao</label>
                <div class="col-sm-6">
                    <textarea class="form-control" name="descricao"></textarea>
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