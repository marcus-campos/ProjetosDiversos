<?php 
	include "header.php";
	require_once '../controller/consulta/ConsultaController.php';
	$consulta = new ConsultaController();	
?> 

		
<!--Modal novo cadastro-->
	<div class="modal fade" id="myModal-NovaConsulta" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Novo Cadastro</h4>
				</div>
				<div class="modal-body">
                
                	
					    
			<div class="row">
				<div class="col-md-12">
				
					<ul class="timeline">
						<li class="timeline-orange">
							<div class="timeline-icon"><i class="fa fa-pencil"></i></div>
							<div class="timeline-body">
								<div class="timeline-header">
									<span class="author">Posted by <a href="#">David Tennant</a></span>
									<span class="date">Monday, November 11, 2013</span>
								</div>
								<div class="timeline-content">
									<h3>Lorem Ipsum Dolor Sit Amet</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia, officiis, molestiae, deserunt asperiores architecto ut vel repudiandae dolore inventore nesciunt necessitatibus doloribus ratione facere consectetur suscipit! Quasi, officia, veniam mollitia recusandae iure aperiam totam culpa aut nobis eveniet porro laborum quisquam non.</p>
								</div>
                                <div>
                                <hr>
                                Anexos:
                                </div>
							</div>
						</li>
                        <li class="timeline-green">
							<div class="timeline-icon"><i class="fa fa-pencil"></i></div>
							<div class="timeline-body">
								<div class="timeline-header">
									<span class="author">Posted by <a href="#">David Tennant</a></span>
									<span class="date">Monday, November 11, 2013</span>
								</div>
								<div class="timeline-content">
									<h3>Lorem Ipsum Dolor Sit Amet</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia, officiis, molestiae, deserunt asperiores architecto ut vel repudiandae dolore inventore nesciunt necessitatibus doloribus ratione facere consectetur suscipit! Quasi, officia, veniam mollitia recusandae iure aperiam totam culpa aut nobis eveniet porro laborum quisquam non.</p>
								</div>
                                <div>
                                 <hr>
                                Anexos:
                                </div>
							</div>
						</li>
					</ul>
				</div>
                </div>
          
                      
					
                            <div class="col-sm-6">
                                <input type="hidden" value="" id="hue1" name="hue"> 
                            </div>
                        
                        <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                        <button type="button" class="btn btn-success">Mais Informações</button>
                        <button  class="btn btn-primary" name="cadastra" type="submit">Cadastrar</button>
                    </div>       
                    </form>				
              	</div>
				
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
  <!--Modal novo cadastro-->
	<div class="modal fade" id="myModal-ConsultasAprovar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Novo Cadastro</h4>
				</div>
				<div class="modal-body">
                
                	
					    
			<div class="row">
				<div class="col-md-12">
				
					<ul class="timeline">
						<li class="timeline-orange">
							<div class="timeline-icon"><i class="fa fa-pencil"></i></div>
							<div class="timeline-body">
								<div class="timeline-header">
									<span class="author">Posted by <a href="#">David Tennant</a></span>
									<span class="date">Monday, November 11, 2013</span>
								</div>
								<div class="timeline-content">
									<h3>Lorem Ipsum Dolor Sit Amet</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia, officiis, molestiae, deserunt asperiores architecto ut vel repudiandae dolore inventore nesciunt necessitatibus doloribus ratione facere consectetur suscipit! Quasi, officia, veniam mollitia recusandae iure aperiam totam culpa aut nobis eveniet porro laborum quisquam non.</p>
								</div>
                                <div>
                                <hr>
                                Anexos:
                                </div>
							</div>
						</li>
                        <li class="timeline-green">
							<div class="timeline-icon"><i class="fa fa-pencil"></i></div>
							<div class="timeline-body">
								<div class="timeline-header">
									<span class="author">Posted by <a href="#">David Tennant</a></span>
									<span class="date">Monday, November 11, 2013</span>
								</div>
								<div class="timeline-content">
									<h3>Lorem Ipsum Dolor Sit Amet</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia, officiis, molestiae, deserunt asperiores architecto ut vel repudiandae dolore inventore nesciunt necessitatibus doloribus ratione facere consectetur suscipit! Quasi, officia, veniam mollitia recusandae iure aperiam totam culpa aut nobis eveniet porro laborum quisquam non.</p>
								</div>
                                <div>
                                 <hr>
                                Anexos:
                                </div>
							</div>
						</li>
					</ul>
				</div>
                </div>
          
                      
					
                            <div class="col-sm-6">
                                <input type="hidden" value="" id="hue1" name="hue"> 
                            </div>
                        
                        <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                        <button type="button" class="btn btn-success">Mais Informações</button>
                        <button  class="btn btn-primary" name="cadastra" type="submit">Cadastrar</button>
                    </div>       
                    </form>				
              	</div>
				
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
               
                <div class="col-md-6">
                    <div class="panel panel-midnightblue">
                        <div class="panel-heading">
                              <h4>
                                <ul class="nav nav-tabs">
                                  <li class="active"><a href="#nvc" data-toggle="tab"><i class="fa fa-list visible-xs icon-scale"></i><span class="hidden-xs">Novas consultas</span></a></li>
                                  <li><a href="#cpa" data-toggle="tab"><i class="fa fa-comments visible-xs icon-scale"></i><span class="hidden-xs">Usuarios</span></a></li>                                </ul>
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
					$('#myModal-NovaConsulta').modal('toggle');
				});
				
            </script>
        <?php
	}
	
	 if(isset($_GET['cons1'])){
		?>        	
           <script>
				$(function() {    				
					$('#myModal-ConsultasAprovar').modal('toggle');
				});
				
            </script>
        <?php
	}
 ?>