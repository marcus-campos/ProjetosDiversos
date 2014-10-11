<?php
	$naturezas = $_REQUEST['naturezas'];
	$mysqlObj = new MySQLDB();
?>
	<select class="form-control" id="source" name="tiposnatureza">
    	<option value=''>Selecione a natureza da consulta</option>
		<?php while($row = $mysqlObj->fetch_array($naturezas)):?>
			<option value="<?=$row['idnatureza_consulta']?>"><?=$row['natureza']?></option>
		<?php endwhile;?>
    </select>