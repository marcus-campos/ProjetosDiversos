<?php
	$cidades = $_REQUEST['cidades'];
	$mysqlObj = new MySQLDB();
?>
	<select required="required" class="form-control" id="selectcidade" name='selectcidade'>
    	<option value=''>Selecione uma cidade</option>
		<?php while($row = $mysqlObj->fetch_array($cidades)):?>
			<option value="<?=$row['id']?>"><?=$row['nome']?></option>
		<?php endwhile;?>
    </select>