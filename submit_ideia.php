<?php
	include ('conf.php');
	
	$candidato_id = $_POST['candidato_id'];
	$descricao_ideia = $_POST['descricao_ideia'];
	$fonte_ideia = $_POST['fonte_ideia'];
	
	$insert = "INSERT INTO ideia (candidato_id, descricao_ideia, fonte_ideia) VALUES ('$candidato_id','$descricao_ideia','$fonte_ideia')";
	
	$sql = mySQLi_query($connection, $insert);
	if($sql){
		echo "<script type='text/javascript'> alert( 'Ideia Cadastrada!', window.location='usuariologado.php' ); </script>";
	}else {
		echo "<script type='text/javascript'> alert( 'Falhou!', window.location='usuariologado.php' ); </script>";
	}
	
?>