<?php
	session_start();
	include ('conf.php');
	
	$part_id = $_GET['part_id'];// pega o id do partido via URL
	
	$select = "SELECT * FROM partido WHERE part_id = $part_id"; // select das informacoes do partido
	$sql = mysqli_query($connection, $select);
	
	while($line = mysqli_fetch_array($sql)){//atribuicao dos dados do partido em variaveis
		$part_id = $line['part_id'];
		$part_name = $line['part_name'];
		$part_sigla = $line['part_sigla']; 
		$part_cand = $line['part_cand'];
		$part_city = $line['part_city'];
		$part_hist = $line['part_hist'];
		$part_numb = $line['part_numb'];
		$part_pres = $line['part_pres'];
		$part_fund = $line['part_fund'];
		$part_page = $line['part_page'];
	};
?>

<html>
	<head>
		<title> Wikilítica - Partido </title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/stylePartido_ok.css">
		<link rel="shortcut icon" href="image/favicon.ico">		
	</head>
	<body>
		<section id="tudo">
			<section id="geral">
				<header>				
					<menu>
						<a href="" class="item">PÁGINA INICIAL</a>
						<a href="#myBtn" class="item" id="myBtn">CRIAR CONTA</a>
						<a href="#myBtn2" class="item" id="myBtn2">ENTRAR</a>
					</menu>
					<div id="logo">
						<a href="usuariologado.php" > <img src="image/logotipo.png" class="logo"> </a>
					</div>
					<div id="ad">
						<h1 id="titulo">Bem-vindos à Wikilítica</h1>
					</div>
					<nav id="barra1">
						<a href="usuariologado.php" class="item3"> <img src="image/home.png" class="home"> </a>
						<a href="candidatos.php" class="item2">CANDIDATOS</a>
						<a href="partidos.php" class="item2">PARTIDOS</a>
						<a href="cidadeestado.php" class="item2">CIDADES/ESTADOS</a>
						<a href="sobre.html" class="item2">SOBRE</a>
						<form name="" method="" action="">							
							<input type="search" name="search" placeholder="Pesquisar na Wiki" title="Pesquisar" id="pesqInput" tabindex="1" autocomplete="off">
							<input type="image" src="image/lupa.png" width="42px" height="46px" class="item4" onClick="this.form.submit()">
						</form>
				    </nav>
				</header>
				<section id="meio">
					<section id="esquerda">
						<nav id="barra2">
							 <h3 class="recent" > <?php echo $part_sigla ?> </h3>
						</nav>
						<nav id="barra3"> <a href="#myBtn3" class="edit" id="myBtn3">Editar</a> </nav>
						<article id="artigo1">
							<a href="" > <img src="image/pdt.jpg" width="290px" height="170px" class="img1" > </a>
							<h5 class="texto1"> <?php echo $part_hist ?> </h5>
							<br><br><br><br><br><br><br><br><br><br><br>
							<h4>
								<br>
								<pre class="extra"> 
									
									
									
								</pre>
							</h4>
						</article>
					</section>
					<!-- *************************************************************************************************************************** -->
					<section id="direita">
						<nav id="barra4">
							<h3 class="perfil"> PERFIL </h3>							
						</nav>
						<nav id="barra5"> </nav>
						<div id="face">
							<pre class="info">
								Número eleitoral <?php echo $part_numb ?>
								
				
								Presidente <?php echo $part_pres ?>
								
								
								Fundação <?php echo $part_fund ?>
								
									
								Estado Sede <?php echo $part_city ?>
								
									
								Página oficial
								<a href="http://<?php echo $part_page ?>/" class="site"> <?php echo $part_page ?></a>
							</pre>
							
						
					    </div>
					</section>
				</section>
			</section>
			<footer>
				<h3 class="txt1">APRESENTAÇÃO</h3>
				<div class="about">
					A Wikilítica é um projeto de enciclopédia colaborativa
					estabelecido sob o princípio wiki. 
					Tem como propósito fornecer um conteúdo livre, objetivo e verificável​​, 
					que todos possam editar e melhorar. 
					O projeto é definido pelos princípios fundadores.
				</div>
				<div id="rodape">
					<div class ="txt2">
						PROJETO FPIN - HTML/CSS WikiLítica © 2017
					</div>
					<div class="borda">
					</div>
				</div>
			</footer>
		</section>
	</body>	
	
	
	<!-- MODAIS -->
	
<!-- Criação do Modal-->
<div id="myModal" class="modal">

  <!-- Conteúdo do Modal-->
  <div class="modal-content">
    <!-- <span class="close">&times;</span> -->
    <div class="form">
	  <h1> Cadastro de Usuário </h1>
	  <form action="" method="">
		<label for="fname">E-mail:</label>
		<input class="cad_user" type="email" id="user_mail" name="email" placeholder="Preencha com seu e-mail">
		
		<label for="fname">Senha:</label>
		<input class="cad_user" type="password" id="user_pass" name="pass" placeholder="Preencha com sua senha">
		
		<label for="fname">CPF:</label>
		<input class="cad_user" type="text" id="user_cpf" name="cpf" placeholder="Preencha com o seu CPF">
	  
		<label for="fname">Nome:</label>
		<input class="cad_user" type="text" id="user_name" name="firstname" placeholder="Preencha com o seu nome completo">

		<label for="fname">Data de Nascimento:</label>
		<input class="cad_user" type="date" id="user_birth" name="birth" placeholder="Preencha com sua cidade">
		
		<label for="fname">Endereço:</label>
		<input class="cad_user" type="text" id="user_address" name="address" placeholder="Preencha com seu endereço">
		
		<label for="fname">Estado:</label>
		<input class="cad_user" type="text" id="user_estate" name="estate" placeholder="Preencha com o seu estado">
		
		<label for="fname">Cidade:</label>
		<input class="cad_user" type="text" id="user_city" name="city" placeholder="Preencha com sua cidade">
		
		<label for="sex">Sexo:</label>
		<select class="cad_user" id="sex" name="sex">
		  <option value="ma">Masculino</option>
		  <option value="fe">Feminino</option>
		</select>
		
		<center>
		<input id="bt" type="submit" value="Cadastrar">
		<input id="bt" type="reset" value="Limpar Campos">
		</center>
	  </form>
	</div>
  </div>

</div>

<div id="myModal2" class="modal">
  <!-- Conteúdo do Modal-->
  <div class="modal-content">
    <!-- <span class="close">&times;</span> -->
    <div class="form">
	  <h1> Logar </h1>
	  <form action="usuariologado.php" method="">
		<label for="fname">E-mail:</label>
		<input class="cad_user" type="email" id="user_mail" name="email" placeholder="Preencha com seu e-mail">
		
		<label for="fname">Senha:</label>
		<input class="cad_user" type="password" id="user_pass" name="pass" placeholder="Preencha com sua senha">	
		<center>
		<input id="bt" type="submit" value="Logar">
		</center>
	  </form>
	</div>
  </div>
</div>

<div id="myModal3" class="modal">
  <!-- Conteúdo do Modal-->
  <div class="modal-content">
    <!-- <span class="close">&times;</span> -->
    <div class="form">
	  <h1> Editar Informações </h1>
	  <form action="" method="">
		<label for="fname">Numero Eleitoral:</label>
		<input class="cad_user" type="text" id="cand_perf" name="perf">
		
		<label for="fname">Fundação:</label>
		<input class="cad_user" type="text" id="cand_perf" name="perf">
		
		<label for="fname">Presidente:</label>
		<input class="cad_user" type="text" id="cand_perf" name="perf">
		
		<label for="fname">Site Oficial:</label>
		<input class="cad_user" type="text" id="cand_perf" name="perf">
		
		<label for="fname">História:</label>
		<input class="edit_cand" type="textarea" id="cand_text" name="cand_text">	
		<center>
		<input id="bt" type="submit" value="Editar">
		</center>
	  </form>
	</div>
  </div>
</div>

<script>
	// Cria o modal Cadastro
	var modal = document.getElementById('myModal');
	// Cria o modal Login
	var modal2 = document.getElementById('myModal2');
	// Cria o modal Editar
	var modal3 = document.getElementById('myModal3');

	// Botão que chama a abertura do modal Cadastro
	var btn = document.getElementById("myBtn");
	// Botão que chama a abertura do modal Login
	var btn2 = document.getElementById("myBtn2");
		// Botão que chama a abertura do modal Editar
	var btn3 = document.getElementById("myBtn3");

	// Quando o usuário clicar no botão, abra o modal cadastro
	btn.onclick = function() {
		modal.style.display = "block";
	}
	// Quando o usuário clicar no botão, abra o modal login
	btn2.onclick = function() {
		modal2.style.display = "block";
	}
	// Quando o usuário clicar no botão, abra o modal editar
	btn3.onclick = function() {
		modal3.style.display = "block";
	}
	
	
	// Fechar quando o usuário clicar fora do modal 
	window.onclick = function(event) {
		if (event.target == modal || event.target == modal2 || event.target == modal3) {
			modal.style.display = "none";
			modal2.style.display = "none";
			modal3.style.display = "none";
		}
	}
</script>
</html>