<?php
	session_start();
	include ('conf.php');	 
	
	$email_user = $_POST['email_user'];
	$pass_user = $_POST['pass_user'];
	
	$sql = "SELECT * FROM usuario WHERE email_user='$email_user' AND pass_user ='".sha1($pass_user)."'";
	$dados = mysqli_query($connection,$sql);
	if (mysqli_num_rows($dados) == 1) {// verifica se possui pelo menos um usuario cadastrado
		$_SESSION['logado'] = "ok";//ok para verificação de sessão em outras páginas
		$linha = mysqli_fetch_array($dados);// pega todos os dados do usuário para a sessão
		$_SESSION['id_user'] = $linha['id_user'];
		$_SESSION['email_user'] = $linha['email_user'];
		$_SESSION['pass_user'] = $linha['pass_user'];
		$_SESSION['cpf_user'] = $linha['cpf_user'];
		$_SESSION['name_user'] = $linha['name_user'];
		$_SESSION['birth_user'] = $linha['birth_user'];
		$_SESSION['add_user'] = $linha['add_user'];
		$_SESSION['state_user'] = $linha['state_user'];
		$_SESSION['city_user'] = $linha['city_user'];
		$_SESSION['sex_user'] = $linha['sex_user'];
		$_SESSION['type_user'] = $linha['type_user'];
		
		if($_SESSION['type_user'] == 0)// verifica se é usuario comum ou organizador logando
			header("Location:organizadorlogado.php");
		else
			header("Location:usuariologado.php");
	} else {
		echo "<script type='text/javascript'> alert( 'Dados Inválidos, Tente Novamente', window.location.href='index.php' ); </script>";
	}
?>