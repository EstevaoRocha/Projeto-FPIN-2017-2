<?php
	include ('conf.php');
	
	$part_name = $_POST['part_name'];
	$part_sigla = $_POST['part_sigla']; 
	$part_cand = $_POST['part_cand'];
	$part_city = $_POST['part_city'];
	$part_hist = $_POST['part_hist'];
	$part_numb = $_POST['part_numb'];
	$part_pres = $_POST['part_pres'];
	$part_fund = $_POST['part_fund'];
	$part_page = $_POST['part_page'];
	$part_pict = $_FILES['part_pict']['name'];
	// troca de nomes
	$part_pict = $_FILES['part_pict']['name'];
	
	if(isset($part_pict)){
		move_uploaded_file($_FILES['part_pict']['tmp_name'], 'image/' . $part_pict);
	}
	
	$db_sigla = 'sigla';	
		
	//Checagem de valores ja cadastrados
	//Sigla
		$check = "SELECT * FROM partido WHERE part_sigla = '$part_sigla'";
		$sqlcheck = mySQLi_query($connection, $check);
		
		while($linemail = mysqli_fetch_array($sqlcheck)){
			$db_sigla = $linemail['part_sigla'];
		}
		
		if($db_sigla == $part_sigla){
			echo "<script type='text/javascript'> alert( 'Sigla J? Cadastrada', window.location='cad_partido.php'); </script>";
		}else{
		
	$insert = "INSERT INTO partido (part_name, part_sigla, part_cand, part_city, part_hist, part_numb, part_pres, part_fund, part_page, part_pict) VALUES ('$part_name','$part_sigla','$part_cand','$part_city','$part_hist','$part_numb','$part_pres','$part_fund','$part_page','$part_pict')";
	
	$sql = mySQLi_query($connection, $insert);
	if($sql){
		echo "<script type='text/javascript'> alert( 'Partido Cadastrado!', window.location='cad_partido.php' ); </script>";
	}else {
		echo "<script type='text/javascript'> alert( 'Falhou!', window.location='cad_partido.php' ); </script>";
	}
	
}//else EMAIL
?>