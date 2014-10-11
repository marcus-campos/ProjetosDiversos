<?php 	
	include "header.php";
	
	$userLogin = $_SESSION['login'];
	
	if(isset($_POST['btncadastrar']))
	{
		$usuario = new UsuarioController();
		$usuario->cadastrar();
	}
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
			<h4>Novo cadastro</h4>
			<div class="options">   				
				<a href="javascript:;" class="panel-collapse"><i class="fa fa-chevron-down"></i></a>
			</div>
		</div>
            <div class="panel-body">
                <form action="#" method="post" class="form-horizontal row-border">
					<div class="form-group">
						<label class="col-sm-3 control-label">Apelido</label>
						<div class="col-sm-6">
							<input type="text" name="txtapelido" <?=isset($userLogin)?"value='".$userLogin."'":''?> class="form-control" required="required">
						</div>
						<div class="col-sm-3"><p class="help-block">Ex: miguel</p></div>
					</div>
						<div class="form-group">
						<label class="col-sm-3 control-label">Usuario</label>
						<div class="col-sm-6">
							<input type="text" name="txtusuario" class="form-control" required="required">
						</div>
						<div class="col-sm-3"><p class="help-block">Ex: Vinicius Campos</p></div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Email</label>
						<div class="col-sm-6">
							<input type="text" name="txtemail" class="form-control" required="required">
						</div>
						<div class="col-sm-3"><p class="help-block">Ex: miguel@miguel.com.br</p></div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Senha</label>
						<div class="col-sm-6">
							<input type="password" name="txtsenha" class="form-control" required="required">
						</div>
						<div class="col-sm-3"><p class="help-block">Ex: SuaSenha123</p></div>
					</div>
						<div class="form-group">
						<label class="col-sm-3 control-label">Confirmar Senha</label>
						<div class="col-sm-6">
							<input type="password" name="txtconfirmasenha" class="form-control" required="required">
						</div>
						<div class="col-sm-3"><p class="help-block">Ex: SuaSenha123</p></div>
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