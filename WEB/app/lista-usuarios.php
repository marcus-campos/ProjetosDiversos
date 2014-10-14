<?php
include "header.php";
require_once '../controller/usuario/UsuarioController.php';
$controller = new UsuarioController;
$usuarios = $controller->listar();
$mysqlObj = new MySQLDB();
$breadcumb = ['lista-usuarios.php' => 'Usuários'];
?>

<div id="page-content">
<div id='wrap'>
  <div id="page-heading">
    <?php include 'breadcumb.php' ?>

    <h1>Usuários</h1>
  </div>


<div class="container">
<div class="row">
  <div class="col-md-12">

    <div class="panel panel-sky">
      <div class="panel-heading">
        Listagem dos Usuários
      </div>
      <!-- /.panel-heading -->
      <div class="panel-body">
        <div class="">
          <table class="table table-striped table-bordered table-hover datatables" id="dataTables-user">
            <thead>
              <tr>
                <th>Login</th>
                <th>Apelido</th>
                <th>Email</th>
                <th>-</th>
                <!-- <th>-</th> -->
              </tr>
            </thead>
          </table>
        </div>
        <!-- /.table-responsive -->
      </div>
      <!-- /.panel-body -->
    </div>
    <!-- /.panel -->
  </div>
  <!-- /.col-lg-12 -->
</div>

        </div> <!-- container -->
    </div> <!--wrap -->
</div> <!-- page-content -->


<?php include "footer.php" ?>


<!-- /.row -->
<!-- DataTables JavaScript -->
<!-- <script src="//cdn.datatables.net/1.10.3/js/jquery.dataTables.min.js"></script> -->
<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="assets/plugins/datatables/dataTables.bootstrap.js"></script>


<script>// -------------------------------
// Initialize Data Tables
// -------------------------------

$(document).ready(function() {
  var extensions = {
        "sFilter": "dataTables_filter custom_filter_class",
        "sLength": "dataTables_length custom_length_class"
    }
    // Used when bJQueryUI is false
    $.extend($.fn.dataTableExt.oStdClasses, extensions);
    // Used when bJQueryUI is true
    $.extend($.fn.dataTableExt.oJUIClasses, extensions);
    $('.datatables').dataTable({
        "dom": "<'row'<'col-xs-6'l><'col-xs-6'f>r>t<'row'<'col-xs-6'i><'col-xs-6'p>>",
        "pagingType": "bootstrap",
        "ajax": {
          "url": '<?php echo URL; ?>usuarios_data.php',
          "dataSrc": function(json){
            return json;
          }
        },
        "columns": [
            { "data": "login" },
            { "data": "apelido" },
            { "data": "email" },
        ],
        "columnDefs": [ {
            "targets": 3,
            "render": function(data, type, row){
              return function(){
                if(row['status'] && row['status'] == 1){
                  return '<a href="<?php echo URL; ?>usuarios_desativar.php?usuario='+ row['iduser'] +'" class="btn btn-danger">Desativar</a>'
                }else{
                  return '<a href="<?php echo URL; ?>usuarios_ativar.php?usuario='+ row['iduser'] +'" class="btn btn-success">Ativar</a>'
                }
              }
            }
        } ],
        language: {
            url: "assets/i18n/datatables/Portuguese-Brasil.txt"
        }
    });

    $('.datatables').on( 'draw.dt', function () {
      $('.dataTables_filter input').addClass('form-control').attr('placeholder','Pesquisar...');
      $('.dataTables_length select').addClass('form-control');
    } );
});
</script>