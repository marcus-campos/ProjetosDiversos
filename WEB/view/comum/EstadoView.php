<?php
	$estados = $_REQUEST['estados'];
	$mysqlObj = new MySQLDB();
?>
	<select required="required" class="form-control" id="selectuf" name='selectuf'>
    	<option value=''>Selecione um estado</option>
		<?php while($row = $mysqlObj->fetch_array($estados)):?>
			<option value="<?=$row['id']?>"><?=$row['nome']?></option>
		<?php endwhile;?>
    </select>