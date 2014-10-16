<?php 
	include "header.php";
	require_once '../controller/consulta/ConsultaController.php';
	$consulta = new ConsultaController();	
?> 

		
<!--Modal novo cadastro-->
	<div class="modal fade" id="myModal-Cadastro" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Novo Cadastro</h4>
				</div>
				<div class="modal-body">
					    
                	 <form action="#" class="form-horizontal row-border" method="post">
                    <div class="form-group">
					<label class="col-sm-3 control-label">Pacotes</label>
						<div class="col-sm-6">
							<!-- COLOCAR AQUI O SELECT PARAR MOSTRAR AS COISAS -->
						</div>
					</div>
                    
                    <div class="form-group">
					<label class="col-sm-3 control-label">Coordenador</label>
						<div class="col-sm-6">
							<!-- COLOCAR AQUI O SELECT PARAR MOSTRAR AS COISAS -->
						</div>
					</div>
                      
					
						<div class="col-sm-6">
							<input type="hidden" value="" id="hue1" name="hue"> 
						</div>
					
                    <div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
					<button  class="btn btn-primary" name="cadastra" type="submit">Cadastrar</button>
				</div>       
                </form>				</div>
				
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
<div id="page-content">
    <div id='wrap'>
        <div id="page-heading">
            <ol class="breadcrumb">
                <li class='active'><a href="js/index.htm">Dashboard</a></li>
            </ol>

            <h1>Dashboard</h1>            
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12 clearfix">
                                    <h4 class="pull-left" style="margin:0 0 10px">Relatorio parcial</h4>
                                    <div class="pull-right">
                                        <a href="javascript:;" class="btn btn-default-alt btn-sm"><i class="fa fa-refresh"></i></a>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div id="" style="width: 90px; margin: 0 auto; padding: 10px 0 6px;"><canvas width="90" height="45" style="display: inline-block; width: 90px; height: 45px; vertical-align: top;"></canvas></div>
                                    <h3 style="text-align: center; margin: 0; color: #808080;">98</h3>
                                    <p style="text-align: center; margin: 0;">Total de consultas</p>
                                    <hr class="hidden-md hidden-lg">
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div id="" style="width: 90px; margin: 0 auto; padding: 10px 0 6px;"><canvas width="90" height="45" style="display: inline-block; width: 90px; height: 45px; vertical-align: top;"></canvas></div>
                                    <h3 style="text-align: center; margin: 0; color: #808080;">22</h3>
                                    <p style="text-align: center; margin: 0;">Total de consultas (Hoje)</p>
                                    <hr class="hidden-md hidden-lg">
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div id="" style="width: 90px; margin: 0 auto; padding: 10px 0 6px;"><canvas width="90" height="45" style="display: inline-block; width: 90px; height: 45px; vertical-align: top;"></canvas></div>
                                    <h3 style="text-align: center; margin: 0; color: #808080;">6.92</h3>
                                    <p style="text-align: center; margin: 0;">Média de consultas diárias</p>
                                    <hr class="hidden-md hidden-lg">
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div id="indexavgvisit" style="width: 90px; margin: 0 auto; padding: 10px 0 6px;"><canvas width="90" height="45" style="display: inline-block; width: 90px; height: 45px; vertical-align: top;"></canvas></div>
                                    <h3 style="text-align: center; margin: 0; color: #808080;">00:04:17</h3>
                                    <p style="text-align: center; margin: 0;">Média de tempo para resposta</p>
                                    <hr class="hidden-md hidden-lg">
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div id="indexnewvisits" style="width: 90px; margin: 0 auto; padding: 10px 0 6px;"><canvas width="90" height="45" style="display: inline-block; width: 90px; height: 45px; vertical-align: top;"></canvas></div>
                                    <h3 style="text-align: center; margin: 0; color: #808080;">35</h3>
                                    <p style="text-align: center; margin: 0;">Consultas em aberto</p>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-2">
                                    <div id="indexbouncerate" style="width: 90px; margin: 0 auto; padding: 10px 0 6px;"><canvas width="90" height="45" style="display: inline-block; width: 90px; height: 45px; vertical-align: top;"></canvas></div>
                                    <h3 style="text-align: center; margin: 0; color: #808080;">NULL</h3>
                                    <p style="text-align: center; margin: 0;">Consultas conlcuidas</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>              
                <div class="col-md-6">
                    <div class="panel panel-midnightblue">
                        <div class="panel-heading">
                              <h4>
                                <ul class="nav nav-tabs">
                                  <li class="active"><a href="#nvc" data-toggle="tab"><i class="fa fa-list visible-xs icon-scale"></i><span class="hidden-xs">Novas consultas</span></a></li>
                                  <li><a href="#cpa" data-toggle="tab"><i class="fa fa-comments visible-xs icon-scale"></i><span class="hidden-xs">Consultas para aprovar</span></a></li>                                </ul>
                              </h4>
                              <!-- <div class="options">
                                <a href="javascript:;"><i class="fa fa-cog"></i></a>
                                <a href="javascript:;"><i class="fa fa-wrench"></i></a> 
                              </div> -->
                        </div>
                        <div class="panel-body">
                            <div class="tab-content">
                                <div class="tab-pane active" id="nvc">
                                    <ul class="panel-threads">
                                     	
                                        <?=$consulta->loadConsultasADefinir()?>
                                        <a href="#" class="btn btn-default-alt btn-sm pull-right">Carregar mais</a>
                                     </ul>
                                </div>
                                <div class="tab-pane" id="cpa">
                                
                                    <ul class="panel-users">
                                       <?=$consulta->loadConsultasAAprovar()?>
									</ul>
                                    <a href="#" class="btn btn-default-alt btn-sm pull-right">Carregar mais</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- container -->
    </div> <!--wrap -->
</div> <!-- page-content -->
<?php
	 include "footer.php";
	 
	 if(isset($_GET['cons'])){
		?>        	
           <script>
				$(function() {    				
					$('#myModal-Cadastro').modal('toggle');
				});
				
            </script>
        <?php
	}
 ?>