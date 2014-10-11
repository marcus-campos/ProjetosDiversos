<?php 
	session_start();
	include "header.php";
	
	if(isset($_SESSION['level']) && $_SESSION['level'] < 1){
 
		 header("Location: ../"); 
      
	}

    
?>

<div id="page-content">
    <div id='wrap'>
        <div id="page-heading">
            <ol class="breadcrumb">
                <li><a href="index.php">Dashboard</a></li>
                <li>Advanced Tables</li>
                <li class="active">Cadastro de Pessoas</li>
            </ol>

            <!-- Modal -->
             <div class="modal fade" id="myModal-Cadastro" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                               <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title">Editar Pessoas</h4>
                                        </div>
                                        <div class="modal-body">
                                            <form action="" class="form-horizontal row-border">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Nome</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" required="required">
                        </div>
                        <div class="col-sm-3"><p class="help-block">Ex: Marcus</p></div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Sobrenome</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" required="required">
                        </div>
                        <div class="col-sm-3"><p class="help-block">Ex: Vinicius Campos</p></div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">RG</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control mask" data-inputmask="'mask': 'AA 99.999.999'">
                        </div>
                    <div class="col-sm-3"><p class="help-block">Ex: MG 12.345.678</p></div>
                    </div>  
                    <div class="form-group">
                        <label class="col-sm-3 control-label">CPF</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control mask" data-inputmask="'mask': '999-999-999-99'">
                        </div>
                        <div class="col-sm-3"><p class="help-block">Ex: 123.456.789-90</p></div>
                    </div>           
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Telefone</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control mask" data-inputmask="'mask':'(999) 9999-9999'">
                        </div>
                        <div class="col-sm-3"><p class="help-block">Ex (031) 9999-9999</p></div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Celular</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control mask" data-inputmask="'mask':'(999) 9999-9999'"></div>
                        <div class="col-sm-3"><p class="help-block">Ex (031) 9999-9999</p></div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Data de nascimento</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control mask" data-inputmask="'alias': 'date'">
                        </div>
                        <div class="col-sm-3"><p class="help-block">Ex: 23/04/1995</p></div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Logradouro</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-3"><p class="help-block">Ex: Rua ABC</p></div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Numero</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-3"><p class="help-block">Ex: 210</p></div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Complemento</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-3"><p class="help-block">Ex: Apto 202</p></div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Bairro</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-3"><p class="help-block">Ex: Limoeiro</p></div>
                    </div>
                    <div class="form-group">
                    <label class="col-sm-3 control-label">Estado</label>
                        <div class="col-sm-6">
                            <?php $estados->listar(); ?>
                        </div>
                    </div>
                    <div class="form-group">
                    <label class="col-sm-3 control-label">Cidade</label>
                        <div class="col-sm-6">
                            <span id="sbox_cidades">
                                <select class="form-control" id="source">
                                        <option value=''>---------------------</option>
                                </select>
                           </span>  
                        </div>
                    </div>
                    <div class="panel-footer">
                        <div class="row">
                            <div class="col-sm-6 col-sm-offset-3">
                                <div class="btn-toolbar">
                                    <button class="btn-primary btn">Cadastrar</button>
                                    <button type="button" class="btn-danger btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>
                                    <div class="form-group">
                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->

            <h1>Cadastro de Pessoas</h1>
        <div class="container">
            <div class="row">
              <div class="col-md-12">
                    <div class="panel panel-sky">
                        <div class="panel-heading">
                            <h4>Cadastro de Pessoas</h4>
                            <div class="options">   
                                <a href="javascript:;"><i class="fa fa-cog"></i></a>
                                <a href="javascript:;"><i class="fa fa-wrench"></i></a>
                                <a href="javascript:;" class="panel-collapse"><i class="fa fa-chevron-down"></i></a>
                            </div>
                        </div>
                        <div class="panel-body collapse in">
                          <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered datatables" id="example">
                                <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th>Sobrenome</th>
                                        <th>Usuario</th>
                                        <th>Data Cadastro</th>
                                        <th>CPF</th>
                                        <th>RG</th>
                                        <th>Status</th>
                                        <th>Açoes</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd gradeX">
                                        <td>Miguel</td>
                                        <td>Junior</td>
                                        <td>miguel</td>
                                        <td>20/09/2014</td>
                                        <td>090.432.123.32</td>
                                        <td>15.812.322</td>
                                        <td class="center">
                                           
                                            <div class="col-sm-3 control-label">
                                                <div class="toggle toggle-success"></div>
                                            </div>
                                        </td>
                                        <td text-align="center">
                                            <button class="btn btn-primary" data-toggle="modal" href="#myModal-Cadastro">Editar</button>
                                            <button class="btn btn-danger">Excluir</button>
                                        </td>
                                       </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div> <!-- container -->
    </div> <!--wrap -->
</div> <!-- page-content -->

<?php include "footer.php" ?>