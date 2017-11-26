<?php
	$usuario_logado = $_SESSION['name_user']; // pega o nome do usuário logado através da sessão
	$nome = explode(" ", $usuario_logado); // pega somente o primeiro nome do usuário
	
	//pega os dados do usuario através da sessão para poder editar no modal
	$id_user = $_SESSION['id_user'];
	$email_user = $_SESSION['email_user'];
	$pass_user = $_SESSION['pass_user'];
	$cpf_user = $_SESSION['cpf_user'];
	$name_user = $_SESSION['name_user'];
	$birth_user = $_SESSION['birth_user'];
	$add_user = $_SESSION['add_user'];
	$state_user = $_SESSION['state_user'];
	$city_user = $_SESSION['city_user'];
	$sex_user = $_SESSION['sex_user'];
?>