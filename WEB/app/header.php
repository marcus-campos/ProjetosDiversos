<?php
	session_start();
	$sessao_expirada = true;
	if(!(isset($_SESSION['iduser']) && isset($_SESSION['ultima_acao']) && isset($_SESSION['level']) && isset($_SESSION['status'])))
	{
		//header("Location: ../");	
	}
	else
	{	
		/* Define o limitador de cache para 'private' */
		session_cache_limiter('private');
		session_cache_limiter();
		
		/* Define o limite de tempo do cache em 30 minutos, mas caso haja alguma ação por parte do usuário, a sessão aumenta para + 30 minutos */
		session_cache_expire(30);
		session_cache_expire();	
		
		 $data1 = $_SESSION['ultima_acao'];
		 $data2 = date("Y-m-d H:i:s");
	
		if($data1 > $data2)
		{
			session_destroy(); //pei!!! destruimos a sessão ;)
			session_unset(); //limpamos as variaveis globais das sessões					
			header("Location: ../");
		}
		else
		{	
			$unix_data1 = strtotime($data1);
			$unix_data2 = strtotime($data2);
			
			 //$nHoras   = ($unix_data2 - $unix_data1) / 3600;
			 $nMinutos = (($unix_data2 - $unix_data1) % 3600) / 60;
			
			if($nMinutos > 30.0)
			{
				 echo '<span id="modalLogin">
							<!--Modal nova consulta-->
							<div class="modal show" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">					
											<h4 class="modal-title">Tempo esgotado!</h4>
										</div>
										<div class="modal-body">
											<label>Você ficou por mais de 30 minutos inativo, favor entrar novamente.</label>
										</div>
										<div class="modal-footer">
											<a href="?a=logout"><button type="button" class="btn btn-default" data-dismiss="loginModal">OK</button></a>
										</div>
									</div><!-- /.modal-content -->
								</div><!-- /.modal-dialog -->
							</div><!-- /.modal -->
						</span>';
						$sessao_expirada == true;
			}
		}
		if($sessao_expirada == FALSE)
			$_SESSION['ultima_acao'] = date("Y-m-d H:i:s");	
	}
	if(isset($_GET['a']))
	{
		switch ($_GET['a']) {
			case "logout":
					session_destroy(); //pei!!! destruimos a sessão ;)
					session_unset(); //limpamos as variaveis globais das sessões
					
					header("Location: ../");
			break;
			default:
       			NULL;		
		}		
	}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<title>Henrrique</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--<meta name="description" content="Avant">
	<meta name="author" content="The Red Team">-->

	<!-- The following CSS are included as plugins and can be removed if unused-->
    <?php function asset($path){ return $path; } ?>

    <!-- <link href="<?php echo asset('assets/less/styles.less') ?>" rel="stylesheet/less" media="all">  -->
    <link rel="stylesheet" href="<?php echo asset('assets/css/styles.css?=121') ?>">
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600' rel='stylesheet' type='text/css'>
    <link href='<?php echo asset("assets/demo/variations/default.css") ?>' rel='stylesheet' type='text/css' media='all' id='styleswitcher'>
    <link href='<?php echo asset("assets/demo/variations/default.css") ?>' rel='stylesheet' type='text/css' media='all' id='headerswitcher'>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries. Placeholdr.js enables the placeholder attribute -->
    <!--[if lt IE 9]>
    <link rel="stylesheet" href="<?php echo asset('assets/css/ie8.css') ?>">
    <script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.1.0/respond.min.js"></script>
    <script type="text/javascript" src="<?php echo asset('assets/plugins/charts-flot/excanvas.min.js') ?>"></script>
    <![endif]-->
    <!-- The following CSS are included as plugins and can be removed if unused-->
    <link rel='stylesheet' type='text/css' href='<?php echo asset("assets/plugins/codeprettifier/prettify.css") ?>' />
    <link rel='stylesheet' type='text/css' href='<?php echo asset("assets/plugins/form-toggle/toggles.css") ?>' />
    <link href="<?php echo asset('assets/plugins/datatables/dataTables.css') ?>" rel="stylesheet">
    <!-- <script type="text/javascript" src="<?php echo asset('assets/js/less.js') ?>"></script> -->
</head>

<body class="<?php if (isset($_COOKIE["admin_leftbar_collapse"])) echo ($_COOKIE['admin_leftbar_collapse'] . " "); // check collapse state with php
                 if (isset($_COOKIE["admin_rightbar_show"])) echo $_COOKIE['admin_rightbar_show'];
                 if (isset($_COOKIE["fixed-header"])) echo ' static-header';
                ?>">
    
    <div id="headerbar">
        <div class="container">
            <div class="row">
                <div data-toggle="modal" href="#myModal" class="col-xs-6 col-sm-2">
                    <a href="#" class="shortcut-tiles tiles-brown">
                        <div class="tiles-body">
                            <div class="pull-left"><i class="fa fa-pencil"></i></div>
                        </div>
                        <div  class="tiles-footer">
							Nova consulta
                        </div>
                    </a>
                </div>
                <div class="col-xs-6 col-sm-2">
                    <a href="#" class="shortcut-tiles tiles-grape">
                        <div class="tiles-body">
                            <div class="pull-left"><i class="fa fa-group"></i></div>
                            <div class="pull-right"><span class="badge">2</span></div>
                        </div>
                        <div class="tiles-footer">
                            Contacts
                        </div>
                    </a>
                </div>
                <div class="col-xs-6 col-sm-2">
                    <a href="#" class="shortcut-tiles tiles-primary">
                        <div class="tiles-body">
                            <div class="pull-left"><i class="fa fa-envelope-o"></i></div>
                            <div class="pull-right"><span class="badge">10</span></div>
                        </div>
                        <div class="tiles-footer">
                            Messages
                        </div>
                    </a>
                </div>
                <div class="col-xs-6 col-sm-2">
                    <a href="#" class="shortcut-tiles tiles-inverse">
                        <div class="tiles-body">
                            <div class="pull-left"><i class="fa fa-camera"></i></div>
                            <div class="pull-right"><span class="badge">3</span></div>
                        </div>
                        <div class="tiles-footer">
                            Gallery
                        </div>
                    </a>
                </div>

                <div class="col-xs-6 col-sm-2">
                    <a href="#" class="shortcut-tiles tiles-midnightblue">
                        <div class="tiles-body">
                            <div class="pull-left"><i class="fa fa-cog"></i></div>
                        </div>
                        <div class="tiles-footer">
                            Settings
                        </div>
                    </a>
                </div>
                <div class="col-xs-6 col-sm-2">
                    <a href="#" class="shortcut-tiles tiles-orange">
                        <div class="tiles-body">
                            <div class="pull-left"><i class="fa fa-wrench"></i></div>
                        </div>
                        <div class="tiles-footer">
                            Plugins
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <header class="navbar navbar-inverse <?php if (isset($_COOKIE["fixed-header"])) {echo 'navbar-static-top';} else {echo 'navbar-fixed-top';} ?>" role="banner">
        <a id="leftmenu-trigger" class="tooltips" data-toggle="tooltip" data-placement="right" title="Toggle Sidebar"></a>

        <div class="navbar-header pull-left">
            <a class="navbar-brand" href="index.php">Avant</a>
        </div>

        <ul class="nav navbar-nav pull-right toolbar">
        	<li class="dropdown">
        		<a href="#" class="dropdown-toggle username" data-toggle="dropdown"><span class="hidden-xs"><?=$_SESSION['apelido']?><i class="fa fa-caret-down"></i></span><img src="assets/demo/avatar/dangerfield.png" alt="Dangerfield" /></a>
        		<ul class="dropdown-menu userinfo arrow">
        			<li class="username">
                        <a href="#">
        				    <div class="pull-left"><img src="assets/demo/avatar/dangerfield.png" alt="Jeff Dangerfield"/></div>
        				    <div class="pull-right"><h5>Olá, <?=$_SESSION['apelido']?>!</h5><small>Logado como <span><?=$_SESSION['login']?></span></small></div>
                        </a>
        			</li>
        			<li class="userlinks">
        				<ul class="dropdown-menu">
        					<li><a href="#">Editar Perfil - Em breve <i class="pull-right fa fa-pencil"></i></a></li>
        					<li><a href="#">Conta - Em breve<i class="pull-right fa fa-cog"></i></a></li>
        					<li><a href="#">Ajuda - Em breve! <i class="pull-right fa fa-question-circle"></i></a></li>
        					<li class="divider"></li>
        					<li><a href="?a=logout" class="text-right">Sair</a></li>
        				</ul>
        			</li>
        		</ul>
        	</li>
		</ul>
    </header>

    <div id="page-container">
        <!-- BEGIN SIDEBAR -->
        <nav id="page-leftbar" role="navigation">
                <!-- BEGIN SIDEBAR MENU -->
            <ul class="acc-menu" id="sidebar">
                <li id="search">
                    <a href="javascript:;"><i class="fa fa-search opacity-control"></i></a>
                     <form>
                        <input type="text" class="search-query" placeholder="Pesquisar...">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </li>
                <li class="divider"></li>
                <li><a href="index.php"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
                <li><a href="javascript:;"><i class="fa fa-pencil"></i> <span>Pessoas</span></a>
                    <ul class="acc-menu">
                        <li><a href="cadastro-pessoas.php">Cadastro</a></li>
                        <li><a href="lista-pessoas.php">Todos</a></li>
                    </ul>
                </li>
                <li><a href="javascript:;"><i class="fa fa-pencil"></i> <span>Usuários</span></a>
                    <ul class="acc-menu">
                        <li><a href="cadastro-usuarios.php">Cadastro</a></li>
                        <li><a href="lista-usuarios.php">Todos</a></li>
                    </ul>
                </li>
                <li><a href="javascript:;"><i class="fa fa-pencil"></i> <span>Prioridade de consultas</span></a>
                    <ul class="acc-menu">
                        <li><a href="cadastro-prioridade-consulta.php">Cadastro</a></li>
                        <li><a href="lista-prioridade-consulta.php">Todos</a></li>
                    </ul>
                </li>
                <li><a href="javascript:;"><i class="fa fa-pencil"></i> <span>Natureza das consultas</span></a>
                    <ul class="acc-menu">
                        <li><a href="cadastro-natureza-consulta.php">Cadastro</a></li>
                        <li><a href="lista-natureza-consulta.php">Todos</a></li>
                    </ul>
                </li>
                <li><a href="javascript:;"><i class="fa fa-pencil"></i> <span>Respostas das consultas</span></a>
                    <ul class="acc-menu">
                        <li><a href="cadastro-resposta-consulta.php">Cadastro</a></li>
                        <li><a href="lista-resposta-consulta.php">Todos</a></li>
                    </ul>
                </li>
                <li><a href="javascript:;"><i class="fa fa-pencil"></i> <span>Consulta</span></a>
                    <ul class="acc-menu">
                        <li><a href="cadastro-usuarios.php">Cadastro</a></li>
                        <li><a href="lista-usuarios.php">Todos</a></li>
                    </ul>
                </li>
            </ul>
            <!-- END SIDEBAR MENU -->
        </nav>