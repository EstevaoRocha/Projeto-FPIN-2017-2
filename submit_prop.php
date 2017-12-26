<?php
	include ('conf.php');
	
	$candidato_id = $_POST['candidato_id'];
	$descricao = $_POST['descricao'];
	$fonte = $_POST['fonte'];
	
	$insert = "INSERT INTO proposta (candidato_id, descricao, fonte) VALUES ('$candidato_id','$descricao','$fonte')";
	
	$sql = mySQLi_query($connection, $insert);
	if($sql){
		echo "<script type='text/javascript'> alert( 'Proposta Cadastrada!', window.location='usuariologado.php' ); </script>";
	}else {
		echo "<script type='text/javascript'> alert( 'Falhou!', window.location='usuariologado.php' ); </script>";
	}
	
?>