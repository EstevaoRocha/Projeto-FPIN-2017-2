<?php
	include ('conf.php');
	
	$part_name = $_POST['part_name'];
	$part_sigla = $_POST['part_sigla']; 
	$part_cand = $_POST['part_cand'];
	$part_city = $_POST['part_city'];
	
	$db_sigla = 'sigla';	
		
	//Checagem de valores ja cadastrados
	//Sigla
		$check = "SELECT * FROM partido WHERE part_sigla = '$part_sigla'";
		$sqlcheck = mySQLi_query($connection, $check);
		
		while($linemail = mysqli_fetch_array($sqlcheck)){
			$db_sigla = $linemail['part_sigla'];
		}
		
		if($db_sigla == $part_sigla){
			echo "<script type='text/javascript'> alert( 'Sigla Já Cadastrada', window.location='cad_partido.php'); </script>";
		}else{
		
	$insert = "INSERT INTO partido (part_name, part_sigla, part_cand, part_city) VALUES ('$part_name','$part_sigla','$part_cand','$part_city')";
	
	$sql = mySQLi_query($connection, $insert);
	if($sql){
		echo "<script type='text/javascript'> alert( 'Partido Cadastrado!', window.location='cad_partido.php' ); </script>";
	}else {
		echo "<script type='text/javascript'> alert( 'Falhou!', window.location='cad_partido.php' ); </script>";
	}
	
}//else EMAIL
?>