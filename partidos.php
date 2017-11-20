<?php
	session_start();
	include ('conf.php');
?>

<html>
	<head>
		<title> Wikilítica - Partidos </title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/styleCandidatos.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="shortcut icon" href="image/favicon.ico">		
	</head>
	<body>
		<section id="tudo">
			<section id="geral">
				<header>				
					<menu>
						<a href="usuariologado.php" class="item">PÁGINA INICIAL</a>
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
						<a href="" class="item2"></a>
						<a href="" class="item2"></a>
						<a href="" class="item2"></a>
						<a href="" class="item2"></a>	
						<form name="" method="" action="">							
							<input type="search" name="search" placeholder="Pesquisar na Wiki" title="Pesquisar" id="pesqInput" tabindex="1" autocomplete="off">
							<input type="image" src="image/lupa.png" width="42px" height="46px" class="item4" onClick="this.form.submit()">
						</form>
				    </nav>
				</header>
				<section id="meio">
					<section id="esquerda">
						<nav id="barra2">
							 <h3 class="recent" > PARTIDOS </h3>
						</nav>
						<nav id="barra3"> </nav>
						<div id="artigo1">
							<?php
								$selecao_part = "SELECT * FROM partido"; // seleciona tudo da tabela partido
								$sql_part = mysqli_query($connection, $selecao_part); // executa query
							 	$num_part = mysqli_num_rows($sql_part); // obtem o numero de linhas da tabela partido
							 ?>
							<h3>TOTAL DE PARTIDOS <?php echo $num_part; ?></h3><br>
							<table class="tabela">
								<tr>
									<th> Partido </th>
									<th> Sigla </th>
									<th> Candidatos </th>
									<th> Cidade </th>
								</tr>
								
								<?php
									$select = "SELECT * FROM partido ORDER BY part_name";
									$sql = mySQLi_query($connection, $select);
										
									while($line = mysqli_fetch_array($sql)){
										$part_id = $line['part_id'];
										$part_name = $line['part_name'];
										$part_sigla = $line['part_sigla']; 
										$part_cand = $line['part_cand'];
										$part_city = $line['part_city'];
										
										
									echo "<tr>
											<td>$part_name</td>
											<td>$part_sigla</td>
											<td>$part_cand</td> 
											<td>$part_city</td> 
										  </tr>";
										  
									}
									?>
							</table>
						</div>
					</section>
					<!-- *************************************************************************************************************************** -->
					<section id="direita">
						<nav id="barra4">
							<a class="recent"> PESQUISA </a>
						</nav>
						<nav id="barra5"> </nav>
						<div id="pesq">
							<img src="image/graphic.png" class="graph">
						<nav id="barra6">
							<a class="recent2"> RECENTES </a>
							<a class="recent3">  </a>
							<a class="recent4">  </a>
						</nav>
					    </div>
						<article id="mini"> 
							<a> <img src="image/mini1.png" width="100px" height="80px" class="imgmini1"> </a>
							<a class="txtmini1"> Ronaldo Lessa ganha fôlego para confirmar sua candidatura ao Senado </a>
							
							<a> <img src="image/mini2.jpg" width="100px" height="80px" class="imgmini1"> </a>
							<a class="txtmini1"> Áudio de Renan Filho para Luciano Barbosa é editado contra Renan Calheiros </a>
							
							<a> <img src="image/mini3.png" width="100px" height="80px" class="imgmini1"> </a>
							<a class="txtmini1"> Por maioria, TRE cassa o mandato do deputado João Henrique </a>
							
							<a> <img src="image/mini4.jpg" width="100px" height="80px" class="imgmini1"> </a>
							<a class="txtmini1"> Fernando Collor fecha aliança com senador Renan Calheiros para eleição 2018 </a>
						</article>
						<div id="barra7">
						</div>
						<div id="minibar"> <h5 class="recent5"> INSCREVA-SE </h5> </div>
						<div id="subscribe">
								<h5 class="texto3" > Digite seu endereço de e-mail para e receber notificações de novas postagens por e-mail. </h5>
						</div>
						<form method="" action ="">
							<input class="inp1" type="text" placeholder="Endereço de E-mail"> 
							<input class="inp2" type="submit" value="ENVIAR">
						</form>
						<div id="barra8">
						</div>
						<div id="minibar2"> <h5 class="recent5"> PÁGINAS </h5> </div>
						<div id="finish">
							<a href="usuariologado.php" class="fim1"> Página Inicial </a>
							<a href="candidatos.php" class="fim2"> Candidatos </a>
							<a href="partidos.php" class="fim3"> Partidos </a>
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
	  <form action="cad_user.php" method="post">
		<label for="fname">E-mail:</label>
		<input class="cad_user" type="email" id="user_mail" name="email_user" placeholder="Preencha com seu e-mail">
		
		<label for="fname">Senha:</label>
		<input class="cad_user" type="password" id="user_pass" name="pass_user" placeholder="Preencha com sua senha">
		
		<label for="fname">CPF:</label>
		<input class="cad_user" type="text" id="user_cpf" name="cpf_user" placeholder="Preencha com o seu CPF">
	  
		<label for="fname">Nome:</label>
		<input class="cad_user" type="text" id="user_name" name="name_user" placeholder="Preencha com o seu nome completo">

		<label for="fname">Data de Nascimento:</label>
		<input class="cad_user" type="date" id="user_birth" name="birth_user" placeholder="Preencha com sua cidade">
		
		<label for="fname">Endereço:</label>
		<input class="cad_user" type="text" id="user_address" name="add_user" placeholder="Preencha com seu endereço">
		
		<label for="fname">Estado:</label>
		<input class="cad_user" type="text" id="user_estate" name="state_user" placeholder="Preencha com o seu estado">
		
		<label for="fname">Cidade:</label>
		<input class="cad_user" type="text" id="user_city" name="city_user" placeholder="Preencha com sua cidade">
		
		<label for="sex">Sexo:</label>
		<select class="cad_user" id="sex" name="sex_user">
		  <option>Selecione</option>
		  <option value="1">Masculino</option>
		  <option value="2">Feminino</option>
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
	  <form action="logar.php" method="post">	  
		<label for="fname">E-mail:</label>
		<input class="cad_user" type="email" id="user_mail" name="email_user" placeholder="Preencha com seu e-mail">
		
		<label for="fname">Senha:</label>
		<input class="cad_user" type="password" id="user_pass" name="pass_user" placeholder="Preencha com sua senha">	
		<center>
		<input id="bt" type="submit" value="Logar">
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