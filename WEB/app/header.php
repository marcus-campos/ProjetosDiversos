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

    <link href="assets/less/styles.less" rel="stylesheet/less" media="all"> 
    <!-- <link rel="stylesheet" href="assets/css/styles.css?=121"> -->
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="js/lib/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/functions.js"></script>

	<?php if (isset($_COOKIE["theme"])) {
	    echo "<link href='assets/demo/variations/". $_COOKIE["theme"] ."' rel='stylesheet' type='text/css' media='all' id='styleswitcher'>";
	} else { ?> 
        <link href='assets/demo/variations/default.css' rel='stylesheet' type='text/css' media='all' id='styleswitcher'> 
    <?php } ?>

    <?php if (isset($_COOKIE["headerstyle"])) {
        echo "<link href='assets/demo/variations/". $_COOKIE["headerstyle"] ."' rel='stylesheet' type='text/css' media='all' id='headerswitcher'>";
    } else { ?>
        <link href='assets/demo/variations/default.css' rel='stylesheet' type='text/css' media='all' id='headerswitcher'> 
    <?php } ?>

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries. Placeholdr.js enables the placeholder attribute -->
	<!--[if lt IE 9]>
        <link rel="stylesheet" href="assets/css/ie8.css">
		<script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.1.0/respond.min.js"></script>
        <script type="text/javascript" src="assets/plugins/charts-flot/excanvas.min.js"></script>
	<![endif]-->

	<!-- The following CSS are included as plugins and can be removed if unused-->

<?php
function linktag($address) {echo "<link rel='stylesheet' type='text/css' href='$address' /> \n";}

$pageName = basename($_SERVER['PHP_SELF']);
if ($pageName == "maps-vector.php") {
    linktag('assets/plugins/jqvmap/jqvmap.css'); // <!-- jQuery vector maps -->
 } elseif ($pageName == "icons-glyphicons.php") {   
    linktag('assets/fonts/glyphicons/css/glyphicons.min.css'); // <!-- glyphicons -->
} elseif ($pageName == "form-components.php") {   
    linktag('assets/plugins/form-select2/select2.css'); //<!-- Select2 -->
    linktag('assets/plugins/form-multiselect/css/multi-select.css'); //<!-- Multiselect -->
    linktag('assets/plugins/jqueryui-timepicker/jquery.ui.timepicker.css'); //<!-- jq UI Timepicker -->
    linktag('assets/plugins/form-daterangepicker/daterangepicker-bs3.css'); //<!-- DateRangePicker -->
    linktag('assets/plugins/form-fseditor/fseditor.css'); //<!-- FullScreen Editor -->
    linktag('assets/plugins/form-tokenfield/bootstrap-tokenfield.css'); //<!-- Tokenfield -->
    linktag('assets/js/jqueryui.css'); // <!-- jquery ui -->
} elseif ($pageName == "ui-paginations.php") {
    linktag('assets/plugins/datepaginator/bootstrap-datepaginator.css');
} elseif ($pageName == "charts-svg.php") {
    linktag('assets/plugins/charts-morrisjs/morris.css'); //> <!-- Charts -->
} elseif ($pageName == "form-fileupload.php") {
	linktag('assets/plugins/jquery-fileupload/css/jquery.fileupload-ui.css'); // <!--File Upload-->
} elseif ($pageName == "form-dropzone.php") {
    linktag('assets/plugins/dropzone/css/dropzone.css'); //<!-- Dropzone-->
} elseif ($pageName == "ui-tour.php") {
    linktag('assets/plugins/bootstro.js/bootstro.min.css'); //<!-- Bootstro.js-->
} elseif ($pageName == "ui-sliders.php") {
    linktag('assets/plugins/progress-skylo/skylo.css'); // <!-- Sky Loader Progress Bar -->
    linktag('assets/js/jqueryui.css'); // <!-- jquery ui -->
} elseif ($pageName == "form-imagecrop.php") {
    linktag('assets/plugins/jcrop/css/jquery.Jcrop.min.css'); // <!-- jCrop -->
} elseif ($pageName == "index.php") {
    linktag('assets/plugins/form-daterangepicker/daterangepicker-bs3.css'); //<!-- DateRangePicker -->
    linktag('assets/plugins/fullcalendar/fullcalendar.css'); // <!-- Calendar -->
    linktag('assets/plugins/form-markdown/css/bootstrap-markdown.min.css');
} elseif ($pageName == "calendar.php") {
    linktag('assets/plugins/fullcalendar/fullcalendar.css'); // <!-- Calendar -->
} elseif ($pageName == "ui-nestable.php") {
    linktag('assets/plugins/form-nestable/jquery.nestable.css'); //<!-- Nestable Lists-->
} elseif ($pageName == "tables-data.php") {
    linktag('assets/plugins/datatables/dataTables.css'); // <!-- Data Tables -->
} elseif ($pageName == "cadastro-pessoas.php") {
    linktag('assets/plugins/datatables/dataTables.css'); // <!-- Data Tables de pessoa -->
}elseif ($pageName == "tables-editable.php") {
    linktag('assets/plugins/datatables/dataTables.css'); // <!-- Data Tables -->
} elseif ($pageName == "form-xeditable.php") {
    linktag('assets/plugins/form-xeditable/bootstrap3-editable/css/bootstrap-editable.css'); // <!-- X-Editable -->
} elseif ($pageName == "ui-alerts.php") {
    linktag('assets/plugins/pines-notify/jquery.pnotify.default.css');
}
    linktag('assets/plugins/codeprettifier/prettify.css'); // <!-- Google Code Prettifier -->
    linktag('assets/plugins/form-toggle/toggles.css'); //<!-- Toggles -->
?>

<script type="text/javascript" src="assets/js/less.js"></script>
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
        <a id="rightmenu-trigger" class="tooltips" data-toggle="tooltip" data-placement="left" title="Toggle Infobar"></a>

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
        	<li class="dropdown">
        		<a href="#" class="hasnotifications dropdown-toggle" data-toggle='dropdown'><i class="fa fa-envelope"></i><span class="badge">1</span></a>
        		<ul class="dropdown-menu messages arrow">
        			<li class="dd-header">
        				<span>You have 1 new message(s)</span>
        				<span><a href="#">Mark all Read</a></span>
        			</li>
                    <div class="scrollthis">
    			        <li><a href="#" class="active">
    			        	<span class="time">6 mins</span>
    			        	<img src="assets/demo/avatar/doyle.png" alt="avatar" />
    			        	<div><span class="name">Alan Doyle</span><span class="msg">Please mail me the files by tonight.</span></div>
    			        </a></li>
    			        <li><a href="#">
    			        	<span class="time">12 mins</span>
    			        	<img src="assets/demo/avatar/paton.png" alt="avatar" />
    			        	<div><span class="name">Polly Paton</span><span class="msg">Uploaded all the files to server. Take a look.</span></div>
    			        </a></li>
    			        <li><a href="#">
    			        	<span class="time">9 hrs</span>
    			        	<img src="assets/demo/avatar/corbett.png" alt="avatar" />
    			        	<div><span class="name">Simon Corbett</span><span class="msg">I am signing off for today.</span></div>
    			        </a></li>
    			        <li><a href="#">
    			        	<span class="time">2 days</span>
    			        	<img src="assets/demo/avatar/tennant.png" alt="avatar" />
    			        	<div><span class="name">David Tennant</span><span class="msg">How are you doing?</span></div>
    			        </a></li>
                        <li><a href="#">
                            <span class="time">6 mins</span>
                            <img src="assets/demo/avatar/doyle.png" alt="avatar" />
                            <div><span class="name">Alan Doyle</span><span class="msg">Please mail me the files by tonight.</span></div>
                        </a></li>
                        <li><a href="#">
                            <span class="time">12 mins</span>
                            <img src="assets/demo/avatar/paton.png" alt="avatar" />
                            <div><span class="name">Polly Paton</span><span class="msg">Uploaded all the files to server. Take a look.</span></div>
                        </a></li>
                    </div>
        			<li class="dd-footer"><a href="#">View All Messages</a></li>
        		</ul>
        	</li>
        	<li class="dropdown">
        		<a href="#" class="hasnotifications dropdown-toggle" data-toggle='dropdown'><i class="fa fa-bell"></i><span class="badge">3</span></a>
        		<ul class="dropdown-menu notifications arrow">
        			<li class="dd-header">
        				<span>You have 3 new notification(s)</span>
        				<span><a href="#">Mark all Seen</a></span>
        			</li>
                    <div class="scrollthis">
    				    <li>
    				    	<a href="#" class="notification-user active">
    				    		<span class="time">4 mins</span>
    				    		<i class="fa fa-user"></i>
    				    		<span class="msg">New user Registered. </span>
    				    	</a>
    				    </li>
    				    <li>
    				    	<a href="#" class="notification-danger active">
    				    		<span class="time">20 mins</span>
    				    		<i class="fa fa-bolt"></i>
    				    		<span class="msg">CPU at 92% on server#3! </span>
    				    	</a>
    				    </li>
    				    <li>
    				    	<a href="#" class="notification-success active">
    				    		<span class="time">1 hr</span>
    				    		<i class="fa fa-check"></i> 
    				    		<span class="msg">Server#1 is live. </span>
    				    	</a>
    				    </li>
    				    <li>
    				    	<a href="#" class="notification-warning">
    				    		<span class="time">2 hrs</span>
    				    		<i class="fa fa-exclamation-triangle"></i> 
    				    		<span class="msg">Database overloaded. </span>
    				    	</a>
    				    </li>
    				    <li>
    				    	<a href="#" class="notification-order">
    				    		<span class="time">10 hrs</span>
    				    		<i class="fa fa-shopping-cart"></i> 
    				    		<span class="msg">New order received. </span>
    				    	</a>
    				    </li>
    				    <li>
    				    	<a href="#" class="notification-failure">
    				    		<span class="time">12 hrs</span>
    				    		<i class="fa fa-times-circle"></i>
    				    		<span class="msg">Application error!</span>
    				    	</a>
    				    </li>
    				    <li>
    				    	<a href="#" class="notification-fix">
    				    		<span class="time">12 hrs</span>
    				    		<i class="fa fa-wrench"></i>
    				    		<span class="msg">Installation Succeeded.</span>
    				    	</a>
    				    </li>
    				    <li>
    				    	<a href="#" class="notification-success">
    				    		<span class="time">18 hrs</span>
    				    		<i class="fa fa-check"></i>
    				    		<span class="msg">Account Created. </span>
    				    	</a>
    				    </li>
                    </div>
        			<li class="dd-footer"><a href="#">View All Notifications</a></li>
				</ul>
			</li>
            <li>
                <a href="#" id="headerbardropdown"><span><i class="fa fa-level-down"></i></span></a>
            </li>
            <li class="dropdown demodrop">
                <a href="#" class="dropdown-toggle tooltips" data-toggle="dropdown"><i class="fa fa-magic"></i></a>

                <ul class="dropdown-menu arrow dropdown-menu-form" id="demo-dropdown">
                    <li>
                        <label for="demo-header-variations" class="control-label">Header Colors</label>
                        <ul class="list-inline demo-color-variation" id="demo-header-variations">
                            <li><a class="color-black" href="javascript:;"  data-headertheme="header-black.css"></a></li>
                            <li><a class="color-dark" href="javascript:;"  data-headertheme="default.css"></a></li>
                            <li><a class="color-red" href="javascript:;" data-headertheme="header-red.css"></a></li>
                            <li><a class="color-blue" href="javascript:;" data-headertheme="header-blue.css"></a></li>
                        </ul>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <label for="demo-color-variations" class="control-label">Sidebar Colors</label>
                        <ul class="list-inline demo-color-variation" id="demo-color-variations">
                            <li><a class="color-lite" href="javascript:;"  data-theme="default.css"></a></li>
                            <li><a class="color-steel" href="javascript:;" data-theme="sidebar-steel.css"></a></li>
                            <li><a class="color-lavender" href="javascript:;" data-theme="sidebar-lavender.css"></a></li>
                            <li><a class="color-green" href="javascript:;" data-theme="sidebar-green.css"></a></li>
                        </ul>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <label for="fixedheader">Fixed Header</label>
                        <div id="fixedheader" style="margin-top:5px;"></div> 
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
                        <input type="text" class="search-query" placeholder="Search...">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </li>
                <li class="divider"></li>
                <li><a href="index.php"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
                <li style="display: none;"><a href="javascript:;"><i class="fa fa-th"></i> <span>Layout Options</span> </a>
                    <ul class="acc-menu">
                        <li><a href="layout-grid.php"><span>Grids</span></a></li>
                        <li><a href="layout-horizontal.php"><span>Horizontal Navigation</span></a></li>
                        <li><a href="layout-horizontal2.php"><span>Horizontal Navigation 2</span></a></li>
                        <li><a href="layout-fixed.php"><span>Fixed Boxed Layout</span></a></li>
                    </ul>
                </li>
                <li style="display: none;"><a href="javascript:;"><i class="fa fa-list-ol"></i> <span>UI Elements</span> <span class="badge badge-indigo">4</span></a>
                    <ul class='acc-menu'>
                        <li><a href="ui-typography.php">Typography</a></li>
                        <li><a href="ui-buttons.php">Buttons</a></li>
                        <li><a href="tables-basic.php">Tables</a></li>
                        <li><a href="form-layout.php">Forms</a></li>
                        <li><a href="ui-panels.php">Panels</a></li>
                        <li><a href="ui-images.php">Images</a></li>
                    </ul>
                </li>
                <li style="display: none;"><a href="javascript:;"><i class="fa fa-tasks"></i> <span>UI Components</span> <span class="badge badge-info">12</span></a>
                    <ul class="acc-menu">
                        <li><a href="ui-tiles.php">Tiles</a></li>
                        <li><a href="ui-modals.php">Modals &amp; Bootbox</a></li>
                        <li><a href="ui-progressbars.php">Progress Bars</a></li>
						<li><a href="ui-paginations.php">Pagers &amp; Paginations</a></li>
						<li><a href="ui-breadcrumbs.php">Breadcrumbs</a></li>
						<li><a href="ui-labelsbadges.php">Labels &amp; Badges</a></li>
                        <li><a href="ui-alerts.php">Alerts &amp; Notificiations</a></li>
                        <li><a href="ui-sliders.php">Sliders &amp; Ranges</a></li>
                        <li><a href="ui-tabs.php">Tabs &amp; Accordions</a></li>
                        <li><a href="ui-carousel.php">Carousel</a></li>
                        <li><a href="ui-nestable.php">Nestable Lists</a></li>
                        <li><a href="ui-wells.php">Wells</a></li>
                        <li><a href="ui-tour.php">Tour</a></li>
                    </ul>
                </li>
                <li style="display: none;"><a href="javascript:;"><i class="fa fa-table"></i> <span>Advanced Tables</span></a>
                    <ul class="acc-menu">
                        <li><a href="tables-data.php">Data Tables</a></li>
                        <li><a href="tables-responsive.php">Responsive Tables</a></li>
                        <li><a href="tables-editable.php">Editable Tables</a></li>
                    </ul>
                </li>
                <li><a href="javascript:;"><i class="fa fa-pencil"></i> <span>Cadastros</span><span class="badge badge-primary">5</span></a>
                    <ul class="acc-menu">
                        <li><a href="cadastro-pessoas.php">Cadastro de pessoas</a></li>
                      
                        <li><a href="form-wizard.php">Wizards</a></li>
                        <li><a href="form-validation.php">Validation</a></li>
                        <li><a href="form-masks.php">Masks</a></li>
                        <li><a href="form-fileupload.php">Multiple File Uploads</a></li>
                        <li><a href="form-dropzone.php">Dropzone File Uploads</a></li>
                        <li><a href="form-ckeditor.php">WYSIWYG Editor</a></li>
                        <li><a href="form-xeditable.php">Inline Editor</a></li>
                        <li><a href="form-imagecrop.php">Image Cropping</a></li>
                    </ul>
                </li>
                <li style="display: none;"><a href="javascript:;"><i class="fa fa-map-marker"></i> <span>Maps</span></a>
                    <ul class="acc-menu">
                        <li><a href="maps-google.php">Google Maps</a></li>
                        <li><a href="maps-vector.php">Vector Maps</a></li>
                    </ul>
                </li>
                <li style="display: none;"><a href="javascript:;"><i class="fa fa-bar-chart-o"></i> <span>Charts</span></a>
                    <ul class="acc-menu">
                        <li><a href="charts-flot.php">Extensible</a></li>
                        <li><a href="charts-svg.php">Interactive</a></li>
                        <li><a href="charts-canvas.php">Lightweight</a></li>
                        <li><a href="charts-inline.php">Inline</a></li>
                    </ul>
                </li>
                <li style="display: none;"><a href="calendar.php"><i class="fa fa-calendar"></i> <span>Calendar</span></a></li>
                <li style="display: none;"><a href="gallery.php"><i class="fa fa-camera"></i> <span> Gallery</span> </a></li>
                <li style="display: none;"><a href="javascript:;"><i class="fa fa-flag"></i> <span>Icons</span> <span class="badge badge-orange">2</span></a>
                    <ul class="acc-menu">
                        <li><a href="icons-fontawesome.php">Font Awesome</a></li>
                        <li><a href="icons-glyphicons.php">Glyphicons</a></li>
                    </ul>
                </li>
                <li style="display: none;" class="divider"></li>
                <li style="display: none;"><a href="javascript:;"><i class="fa fa-briefcase"></i> <span>Extras</span> <span class="badge badge-danger">1</span></a>
                    <ul class="acc-menu">
                        <li><a href="extras-timeline.php">Timeline</a></li>
                        <li><a href="extras-profile.php">Profile</a></li>
                        <li><a href="extras-inbox.php">Inbox</a></li>
                        <li><a href="extras-search.php">Search Page</a></li>
                        <li><a href="extras-chatroom.php">Chat Room</a></li>
                        <li><a href="extras-invoice.php">Invoice</a></li>
                        <li><a href="extras-registration.php">Registration</a></li>
                        <li><a href="extras-signupform.php">Sign Up</a></li>
                        <li><a href="extras-forgotpassword.php">Password Reset</a></li>
                        <li><a href="extras-login.php">Login 1</a></li>
                        <li><a href="extras-login2.php">Login 2</a></li>
                        <li><a href="extras-404.php">404 Page</a></li>
                        <li><a href="extras-500.php">500 Page</a></li>
                    </ul>
                </li>
                <li style="display: none;"><a href="javascript:;"><i class="fa fa-sitemap"></i> <span>Unlimited Level Menu</span></a>
                    <ul class="acc-menu">
                        <li><a href="javascript:;">Menu Item 1</a></li>
                        <li><a href="javascript:;">Menu Item 2</a>
                            <ul class="acc-menu">
                                <li><a href="javascript:;">Menu Item 2.1</a></li>
                                <li><a href="javascript:;">Menu Item 2.2</a>
                                    <ul class="acc-menu">
                                        <li><a href="javascript:;">Menu Item 2.2.1</a></li>
                                        <li><a href="javascript:;">Menu Item 2.2.2</a>
                                            <ul class="acc-menu">
                                                <li><a href="javascript:;">And deeper yet!</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- END SIDEBAR MENU -->
        </nav>

        <!-- BEGIN RIGHTBAR -->
        <div id="page-rightbar">

            <div id="chatarea">
                <div class="chatuser">
                    <span class="pull-right">Jane Smith</span>
                    <a id="hidechatbtn" class="btn btn-default btn-sm"><i class="fa fa-arrow-left"></i> Back</a>
                </div>
                <div class="chathistory">
                    <div class="chatmsg">
                        <p>Hey! How's it going?</p>
                        <span class="timestamp">1:20:42 PM</span>
                    </div>
                    <div class="chatmsg sent">
                        <p>Not bad... i guess. What about you? Haven't gotten any updates from you in a long time.</p>
                        <span class="timestamp">1:20:46 PM</span>
                    </div>
                    <div class="chatmsg">
                        <p>Yeah! I've been a bit busy lately. I'll get back to you soon enough.</p>
                        <span class="timestamp">1:20:54 PM</span>
                    </div>
                    <div class="chatmsg sent">
                        <p>Alright, take care then.</p>
                        <span class="timestamp">1:21:01 PM</span>
                    </div>
                </div>
                <div class="chatinput">
                    <textarea name="" rows="2"></textarea>
                </div>
            </div>

            <div id="widgetarea">
                <div class="widget">
                    <div class="widget-heading">
                        <a href="javascript:;" data-toggle="collapse" data-target="#accsummary"><h4>Account Summary</h4></a>
                    </div>
                    <div class="widget-body collapse in" id="accsummary">
                        <div class="widget-block" style="background: #7ccc2e; margin-top:10px;">
                            <div class="pull-left">
                                <small>Current Balance</small>
                                <h5>$71,182</h5>
                            </div>
                            <div class="pull-right"><div id="currentbalance"></div></div>
                        </div>
                        <div class="widget-block" style="background: #595f69;">
                            <div class="pull-left">
                                <small>Account Type</small>
                                <h5>Business Plan A</h5>
                            </div>
                            <div class="pull-right">
                                <small class="text-right">Monthly</small>
                                <h5>$19<small>.99</small></h5>
                            </div>
                        </div>
                        <span class="more"><a href="#">Upgrade Account</a></span>
                    </div>
                </div>


                <div id="chatbar" class="widget">
                    <div class="widget-heading">
                        <a href="javascript:;" data-toggle="collapse" data-target="#chatbody"><h4>Online Contacts <small>(5)</small></h4></a>
                    </div>
                    <div class="widget-body collapse in" id="chatbody">
                        <ul class="chat-users">
                            <li data-stats="online"><a href="javascript:;"><img src="assets/demo/avatar/potter.png" alt=""><span>Jeremy Potter</span></a></li>
                            <li data-stats="online"><a href="javascript:;"><img src="assets/demo/avatar/tennant.png" alt=""><span>David Tennant</span></a></li>
                            <li data-stats="online"><a href="javascript:;"><img src="assets/demo/avatar/johansson.png" alt=""><span>Anna Johansson</span></a></li>
                            <li data-stats="busy"><a href="javascript:;"><img src="assets/demo/avatar/jackson.png" alt=""><span>Eric Jackson</span></a></li>
                            <li data-stats="away"><a href="javascript:;"><img src="assets/demo/avatar/jobs.png" alt=""><span>Howard Jobs</span></a></li>
                            <!--li data-stats="offline"><a href="javascript:;"><img src="assets/demo/avatar/watson.png" alt=""><span>Annie Watson</span></a></li>
                            <li data-stats="offline"><a href="javascript:;"><img src="assets/demo/avatar/doyle.png" alt=""><span>Alan Doyle</span></a></li>
                            <li data-stats="offline"><a href="javascript:;"><img src="assets/demo/avatar/corbett.png" alt=""><span>Simon Corbett</span></a></li>
                            <li data-stats="offline"><a href="javascript:;"><img src="assets/demo/avatar/paton.png" alt=""><span>Polly Paton</span></a></li-->
                        </ul>
                        <span class="more"><a href="#">See all</a></span>
                    </div>
                </div>

                <div class="widget">
                    <div class="widget-heading">
                        <a href="javascript:;" data-toggle="collapse" data-target="#taskbody"><h4>Pending Tasks <small>(5)</small></h4></a>
                    </div>
                    <div class="widget-body collapse in" id="taskbody">
                        <div class="contextual-progress" style="margin-top:10px;">
                            <div class="clearfix">
                                <div class="progress-title">Backend Development</div>
                                <div class="progress-percentage"><span class="label label-info">Today</span> 25%</div>
                            </div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-info" style="width: 25%"></div>
                            </div>
                        </div>
                        <div class="contextual-progress">
                            <div class="clearfix">
                                <div class="progress-title">Bug Fix</div>
                                <div class="progress-percentage"><span class="label label-primary">Tomorrow</span> 17%</div>
                            </div>
                            <div class="progress">
                              <div class="progress-bar progress-bar-primary" style="width: 17%"></div>
                            </div>
                        </div>
                        <div class="contextual-progress">
                            <div class="clearfix">
                                <div class="progress-title">Javascript Code</div>
                                <div class="progress-percentage">70%</div>
                            </div>
                            <div class="progress">
                              <div class="progress-bar progress-bar-success" style="width: 70%"></div>
                            </div>
                        </div>
                        <div class="contextual-progress">
                            <div class="clearfix">
                                <div class="progress-title">Preparing Documentation</div>
                                <div class="progress-percentage">6%</div>
                            </div>
                            <div class="progress">
                              <div class="progress-bar progress-bar-danger" style="width: 6%"></div>
                            </div>
                        </div>
                        <div class="contextual-progress">
                            <div class="clearfix">
                                <div class="progress-title">App Development</div>
                                <div class="progress-percentage">20%</div>
                            </div>
                            <div class="progress">
                              <div class="progress-bar progress-bar-orange" style="width: 20%"></div>
                            </div>
                        </div>
                        
                        <span class="more"><a href="ui-progressbars.php">View all Pending</a></span>
                    </div>
                </div>

 

                <div class="widget">
                    <div class="widget-heading">
                        <a href="javascript:;" data-toggle="collapse" data-target="#storagespace"><h4>Storage Space</h4></a>
                    </div>
                    <div class="widget-body collapse in" id="storagespace">
                        <div class="clearfix" style="margin-bottom: 5px;margin-top:10px;">
                            <div class="progress-title pull-left">1.31 GB of 1.50 GB used</div>
                            <div class="progress-percentage pull-right">87.3%</div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar progress-bar-success" style="width: 50%"></div>
                            <div class="progress-bar progress-bar-warning" style="width: 25%"></div>
                            <div class="progress-bar progress-bar-danger" style="width: 12.3%"></div>
                        </div>
                    </div>
                </div>

                <div class="widget">
                    <div class="widget-heading">
                        <a href="javascript:;" data-toggle="collapse" data-target="#serverstatus"><h4>Server Status</h4></a>
                    </div>
                    <div class="widget-body collapse in" id="serverstatus">
                        <div class="clearfix" style="padding: 10px 24px;">
                            <div class="pull-left">
                                <div class="easypiechart" id="serverload" data-percent="67">
                                        <span class="percent"></span>
                                </div>
                                <label for="serverload">Load</label>
                            </div>
                            <div class="pull-right">
                                <div class="easypiechart" id="ramusage" data-percent="20.6">
                                    <span class="percent"></span>
                                </div>
                                <label for="ramusage">RAM: 422MB</label>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- END RIGHTBAR -->