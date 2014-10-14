<?php
include "header.php";
$breadcumb = [URL . 'lista-natureza-consulta.php' => 'Natureza das consultas'];
?>

<div id="page-content">
  <div id='wrap'>
    <div id="page-heading">
      <?php include 'breadcumb.php' ?>
      <h1>Natureza das consultas</h1>
    </div>


<div class="container">
<div class="row">
  <div class="col-md-12">

    <div class="panel panel-sky">
      <div class="panel-heading">
        Listagem das Natureza das consultas
      </div>
      <!-- /.panel-heading -->
      <div class="panel-body">
        <div class="">
          <table class="table table-striped table-bordered table-hover datatables" id="dataTables-natureza-consulta">
            <thead>
              <tr>
                <th>Natureza</th>
                <th>Observação</th>
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
          "url": '<?php echo URL; ?>natureza_consulta_data.php',
          "dataSrc": function(json){
            return json;
          }
        },
        "columns": [
            { "data": "natureza" },
            { "data": "observacao" },
        ],
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