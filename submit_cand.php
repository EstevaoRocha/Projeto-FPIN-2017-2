<?php
	include ('conf.php');
	
	$cand_name = $_POST['cand_name'];
	$cand_sex = $_POST['cand_sex']; 
	$cand_age = $_POST['cand_age'];
	$cand_job = $_POST['cand_job'];
	$cand_part = $_POST['cand_part']; 
	$cand_work = $_POST['cand_work'];
	$cand_hist = $_POST['cand_hist'];
	$cand_prop = $_POST['cand_prop'];
	$cand_idea = $_POST['cand_idea'];
	$cand_source = $_POST['cand_source'];	
	$cand_city = $_POST['cand_city'];	
	/*
	$cand_pict = $_FILES['cand_pict'];
	
	move_uploaded_file($_FILES['cand_pict']['tmp_name'], '../image/'.getPicture());

	echo '<pre>';
	print_r($_FILES);
	echo '</pre>';
	*/
	$insert = "INSERT INTO candidato (cand_name, cand_sex, cand_age, cand_job, cand_part, cand_work, cand_hist, cand_prop, cand_idea, cand_source, cand_city) VALUES ('$cand_name','$cand_sex','$cand_age','$cand_job','$cand_part','$cand_work','$cand_hist','$cand_prop','$cand_idea','$cand_source','$cand_city')";
	
	$sql = mySQLi_query($connection, $insert);
	if($sql){
		echo "<script type='text/javascript'> alert( 'Candidato Cadastrado!', window.location='cad_candidato.php' ); </script>";
	}else {
		echo "<script type='text/javascript'> alert( 'Falhou!', window.location='cad_candidato.php' ); </script>";
	}
	
?>