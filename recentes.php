<?php	
	$selecao_cand = "SELECT * FROM candidato ORDER BY cand_id DESC LIMIT 5"; // seleciona os dados dos 5 últimos cadastrados
	$sql_cand = mysqli_query($connection, $selecao_cand); // executa query
								
	while($line = mysqli_fetch_array($sql_cand)){//atribuindo valores vindos do banco em varíaveis
		$cand_id = $line['cand_id'];
		$cand_name = $line['cand_name'];										
		$cand_hist = $line['cand_hist'];
		$cand_work = $line['cand_work'];
																							
	echo"
			<a> <img src='image/camera.png' width='290px' height='170px' class='img1'> </a>
			<a href='candidato.php?cand_id=$cand_id' class='link1'> $cand_name </a>
			<h5 class='texto1'> $cand_hist </h5>
		";		
	}
?>