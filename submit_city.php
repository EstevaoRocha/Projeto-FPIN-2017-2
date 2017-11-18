<?php
	include ('conf.php');
	
	$city_state = $_POST['city_state'];
	$city_name = $_POST['city_name']; 
	$city_popu = $_POST['city_popu'];
	
	$db_name = 'name';	
		
	//Checagem de valores ja cadastrados
	//Nome
		$check = "SELECT * FROM cidade WHERE city_name = '$city_name'";
		$sqlcheck = mySQLi_query($connection, $check);
		
		while($line = mysqli_fetch_array($sqlcheck)){
			$db_name = $line['city_name'];
		}
		
		if($db_name == $city_name){
			echo "<script type='text/javascript'> alert( 'Cidade Já Cadastrada', window.location='cad_partido.php'); </script>";
		}else{
			
	$insert = "INSERT INTO cidade (city_state, city_name, city_popu) VALUES ('$city_state','$city_name','$city_popu')";
	
	$sql = mySQLi_query($connection, $insert);
	if($sql){
		echo "<script type='text/javascript'> alert( 'Cidade Cadastrada!', window.location='cad_estado.php' ); </script>";
	}else {
		echo "<script type='text/javascript'> alert( 'Falhou!', window.location='cad_estado.php' ); </script>";
	}
	
}//else Nome
?>