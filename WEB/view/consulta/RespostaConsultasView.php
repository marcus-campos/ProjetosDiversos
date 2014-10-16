<?php
	$nconsultas = $_REQUEST['nconsultas'];
	$mysqlObj = new MySQLDB();
?>
		<?php while($row = $mysqlObj->fetch_array($nconsultas)):		
			/*date_default_timezone_set('America/Sao_Paulo');
			
			$dataConvert = date("d/m/Y H:i:s", $row['data_consulta']);
			$data1 = mktime($dataConvert("H")-3, $dataConvert("i"), $dataConvert("s"), $dataConvert("m"), $dataConvert("d"), $dataConvert("Y"));
			$data2 = mktime(date("H")-3, date("i"), date("s"), date("m"), date("d"), date("Y"), 0);
			$diferenca = $data2 - $data1; //CALCULA-SE A DIFERENÇA EM SEGUNDOS
			$dias = ($data2/(60*60*24));
			$horas = ($data2/(60*60));
			$minutos = ($data2/60);
			$segundos = ($data2);
			
			$stringFormada = "";
			if($dias < 1)
			{
				if($horas < 1)
				{
					if($minutos < 1)
					{
						if($segundos < 1)
						{
							$stringFormada = $segundos." segundos.";
						}
						else
						{
							$stringFormada = $segundos." segundos.";
						}
					}
					else
					{
						$stringFormada = $minutos." minutos ".$segundos." segundos.";
					}
				}
				else
				{
					$stringFormada = $horas. " horas ".$minutos." minutos ".$segundos." segundos.";
				}
			}
			else
			{
				$stringFormada = $dias . " dias ".$horas. " horas ".$minutos." minutos ".$segundos." segundos.";
			}*/
		
		?>		
        	 <li>                                           
                <div class="content">
                    <span class="time"><?=$row['data_consulta']?></span>
                    <a href="?cons1=hue1" class="title"><?=$row['assunto']?></a>
                    <span class="thread">pergunta feita por <a href="#"><?=$row['nome']." ".$row['sobrenome']?></a></span>
                </div>
            </li> 
		<?php endwhile;?>									  