<?php
	include ('conf.php');
	
	$part_id = $_POST['part_id'];
	$part_name = $_POST['part_name'];
	$part_sigla = $_POST['part_sigla']; 
	$part_cand = $_POST['part_cand'];
	$part_city = $_POST['part_city'];
	$part_hist = $_POST['part_hist'];
	$part_numb = $_POST['part_numb'];
	$part_pres = $_POST['part_pres'];
	$part_fund = $_POST['part_fund'];
	$part_page = $_POST['part_page'];

		
	$update = "UPDATE partido SET part_name = '$part_name', 
							   part_sigla = '$part_sigla', 
							   part_cand = '$part_cand', 
							   part_city = '$part_city', 
							   part_hist = '$part_hist', 
							   part_numb = '$part_numb', 
							   part_pres = '$part_pres',
							   part_fund = '$part_fund',
							   part_page = '$part_page'
							   WHERE part_id = $part_id ";
	
	$sql = mySQLi_query($connection, $update);
	if($sql){
		echo "<script type='text/javascript'> alert( 'Partido Editado!', window.location='partidos.php' ); </script>";
	}else {
		echo "<script type='text/javascript'> alert( 'Falhou!', window.location='partidos.php' ); </script>";
	}
?>