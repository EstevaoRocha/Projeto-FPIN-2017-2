<?php
	include ('conf.php');
	
	$cand_name = $_POST['cand_name'];
	$cand_sex = $_POST['cand_sex']; 
	$cand_age = $_POST['cand_age'];
	$cand_job = $_POST['cand_job'];
	$cand_part = $_POST['cand_part']; 
	$cand_work = $_POST['cand_work'];
	$cand_hist = $_POST['cand_hist'];	
	$cand_city = $_POST['cand_city'];
	//Imagem
	$cand_pict = $_FILES['cand_pict']['name'];
	// troca de nomes
	$cand_pict = $_FILES['cand_pict']['name'];
	
	if(isset($cand_pict)){
		move_uploaded_file($_FILES['cand_pict']['tmp_name'], 'image/' . $cand_pict);
	}
	
	$insert = "INSERT INTO candidato (cand_name, cand_sex, cand_age, cand_job, cand_part, cand_work, cand_hist, cand_city, cand_pict) VALUES ('$cand_name','$cand_sex','$cand_age','$cand_job','$cand_part','$cand_work','$cand_hist','$cand_city','$cand_pict')";
	
	$sql = mySQLi_query($connection, $insert);
	if($sql){
		echo "<script type='text/javascript'> alert( 'Candidato Cadastrado!', window.location='usuariologado.php' ); </script>";
	}else {
		echo "<script type='text/javascript'> alert( 'Falhou!', window.location='usuariologado.php' ); </script>";
	}
	
?>