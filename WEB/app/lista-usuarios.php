<?php
include "header.php";
require_once '../controller/usuario/UsuarioController.php';
$controller = new UsuarioController;
$usuarios = $controller->listar();
$mysqlObj = new MySQLDB();
?>

<div id="page-content">
    <div id='wrap'>
        <div id="page-heading">
            <ol class="breadcrumb">
                <li><a href="index.php">Dashboard</a></li>
                <li>Advanced Tables</li>
                <li class="active">Data Tables</li>
            </ol>

            <h1>Data Tables</h1>
        </div>


        <div class="container">
            <div class="row">
              <div class="col-md-12">
                    <div class="panel panel-sky">
                        <div class="panel-heading">
                            <h4>Data Tables</h4>
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
                                        <th>Login</th>
                                        <th>Apelido</th>
                                        <th>Senha</th>
                                        <th>-</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php while($row = $mysqlObj->fetch_array($usuarios)):?>
                                  <tr class="odd gradeX">
                                    <td><?=$row['login']?></td>
                                    <td><?=$row['apelido']?></td>
                                    <td><?=$row['senha']?></td>
                                    <td>-</td>
                                  </tr>
                                <?php endwhile;?>
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