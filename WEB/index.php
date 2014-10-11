<?php
session_unset(); //limpamos as variaveis globais das sessões
session_start();

if(isset($_SESSION['iduser']) && $_SESSION['iduser'] != NULL && isset($_SESSION['nome']) && $_SESSION['nome'] != NULL && isset($_SESSION['login']) && $_SESSION['login'] != NULL && isset($_SESSION['sobre_nome']) && $_SESSION['sobre_nome'] != NULL && isset($_SESSION['level']) && $_SESSION['level'] != NULL && isset($_SESSION['status']) && $_SESSION['status'] == '1')
{
		$_SESSION['ultima_acao'] = date("Y-m-d H:i:s");
		header("Location: app/");	
}
else
{	
	require_once 'controller/usuario/UsuarioController.php';
	if(isset($_POST['btnlogar']))
	{			
		$logar = new UsuarioController(); 
		$loginInfo = $logar->logar();
	}
}
?>
<html>
	<head>
		<link rel="stylesheet" href="app/assets/css/login.css" type="text/css" />
		<link rel="stylesheet" type="text/css" href="app/assets/css/slick_lf.css" media="screen" />
		<meta charset="utf-8" />
		<title></title>	
	</head>
	<body>
		<div id="container">
						<div id="formulario">
							<section id="slick">
								<!-- Login form -->
								<div class="login-form">
									<!-- Title -->
									<!--<div class="title">Said Jur</div> -->
									<!-- Intro text -->
									<p class="logo"><img src="media/images/c_logo.png" /> </p>
									<p class="intro">Para acessar o sistema <b>SaidJur</b> digite seu usuário e senha nos campos abaixo!</p>										
									<!-- Form fields -->
									<form action="#" name="login" id="login" method="post">
										<!-- Username input -->
										<div class="field">
											<input name="login" placeholder="Usuário" type="text" id="username" required />
											<span class="entypo-user icon"></span>
											<span class="slick-tip left">Digite aqui seu usuário</span>
										</div>
										<!-- Password input -->
										<div class="field">
											<input name="password" placeholder="Senha" type="password" id="password" required />
											<span class="entypo-lock icon"></span>
											<span class="slick-tip left">Digite aqui sua senha</span>
										</div>
										<?php if(isset($loginInfo)):?>
											<p class = "error_msg">
												<?="<center><font color='red'>Login ou senha inválida!!!</font></center>";?>
											</p>									
										<?php endif;?>	
                                        <?php if(isset($_SESSION['status']) && $_SESSION['status'] == '0'):?>
											<p class = "error_msg">
												<?="<center><font color='red'>Usuário desativado. </br>Favor entrar em contato com o administrador.</font></center>";?>
											</p>									
										<?php endif;?>	
										<div class="clrfx mt-10"></div>
										<!-- Signed in button -->
										<div class="w-47 mr-5 mt-5">
											<!-- <input type="checkbox" id="signed-in" name="signed-in" checked="checked" />
									 <label for="signed-in" class="tick"><span>Me matenha conectado</span></label> -->
								</div>
								<!-- Send button -->
								<span class="botao-form">
									<input type="submit" value="Entrar" class="send" form="login" name="btnlogar" />
								</span>
							</form>
							<!-- / Form fields -->							
						</div>
						<!-- / Login form -->											
					</section>
				</div>
			</div>
			<footer id="rodape"> <span class="txt_rodape">Copyright © <?=date('Y')?> Said Comunicação & Sistemas</span> </footer>
	</body>
</html>
