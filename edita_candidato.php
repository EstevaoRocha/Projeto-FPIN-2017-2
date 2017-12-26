<?php
	include ('conf.php');
	
	$cand_id = $_POST['cand_id'];
	$cand_name = $_POST['cand_name'];
	$cand_sex = $_POST['cand_sex']; 
	$cand_age = $_POST['cand_age'];
	$cand_job = $_POST['cand_job'];
	$cand_part = $_POST['cand_part']; 
	$cand_work = $_POST['cand_work'];
	$cand_hist = $_POST['cand_hist'];	
	$cand_city = $_POST['cand_city'];	
		
	$update = "UPDATE candidato SET cand_name = '$cand_name', 
							   cand_sex = '$cand_sex', 
							   cand_age = '$cand_age', 
							   cand_job = '$cand_job', 
							   cand_part = '$cand_part', 
							   cand_work = '$cand_work', 
							   cand_hist = '$cand_hist',						
							   cand_city = '$cand_city'
							   WHERE cand_id = $cand_id ";
	
	$sql = mySQLi_query($connection, $update);
	if($sql){
		echo "<script type='text/javascript'> alert( 'Candidato Editado!', window.location='candidatos.php' ); </script>";
	}else {
		echo "<script type='text/javascript'> alert( 'Falhou!', window.location='candidatos.php' ); </script>";
	}
?>