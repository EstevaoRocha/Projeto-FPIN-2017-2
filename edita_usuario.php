<?php
	include ('conf.php');
	
	$id_user = $_POST['id_user'];
	$email_user = $_POST['email_user'];
	$pass_user = $_POST['pass_user']; 
	$cpf_user = $_POST['cpf_user'];
	$name_user = $_POST['name_user'];
	$birth_user = $_POST['birth_user']; 
	$add_user = $_POST['add_user'];
	$state_user = $_POST['state_user'];
	$city_user = $_POST['city_user'];
	$sex_user = $_POST['sex_user'];
	
	//Inicializando variáveis de checagem
	$db_email = 'email';
	$db_cpf = 'cpf';	
	/*
	//Checagem de valores ja cadastrados
	// email 
		$checkmail = "SELECT * FROM usuario WHERE email_user = '$email_user'";
		$sqlcheck = mySQLi_query($connection, $checkmail);
		
		while($linemail = mysqli_fetch_array($sqlcheck)){
			$db_email = $linemail['email_user'];
		}
		
		if($db_email == $email_user){
			echo "<script type='text/javascript'> alert( 'E-mail Já Cadastrado', window.location='usuariologado.php'); </script>";
		}else{
			
	// cpf
		$check2 = "SELECT * FROM usuario WHERE cpf_user = $cpf_user";
		$sqlcheck2 = mySQLi_query($connection, $check2);
		
		while($line2 = mysqli_fetch_array($sqlcheck2)){
			$db_cpf = $line2['cpf_user'];
		}
		
		if($db_cpf == $cpf_user){
			echo "<script type='text/javascript'> alert( 'CPF Já Cadastrado', window.location='usuariologado.php'); </script>";
		}else{
		*/
	$password = sha1($pass_user); // Transformando a senha em hash SHA1
		
	$update = "UPDATE usuario SET email_user = '$email_user', 
							   pass_user = '$password', 
							   cpf_user = '$cpf_user', 
							   name_user = '$name_user', 
							   birth_user = '$birth_user', 
							   add_user = '$add_user', 
							   state_user = '$state_user',
							   city_user = '$city_user',
							   sex_user = '$sex_user'
							   WHERE id_user = $id_user ";
	
	$sql = mySQLi_query($connection, $update);
	if($sql){
		echo "<script type='text/javascript'> alert( 'Seu Usuário Foi Editado!', window.location='usuariologado.php' ); </script>";
	}else {
		echo "<script type='text/javascript'> alert( 'Falhou!', window.location='usuariologado.php' ); </script>";
	}
	/*
	
}//else CPF

}//else EMAIL
*/
?>