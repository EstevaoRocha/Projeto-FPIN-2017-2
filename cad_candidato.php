<?php
	session_start();
	include ('conf.php');
	if($_SESSION['logado']!="ok"){
		header("Location:usuariologado.php");// caso a sessão não seja autorizada será redirecionado para usuariologado.php
	}	
	
	if($_SESSION['type_user'] == 0)// verifica se é organizador logado
		header("Location:organizadorlogado.php");
	
	include ('edit_data.php');
?>

<html>
	<head>
		<title> Wikilítica - Candidatos </title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/styleCadCandidato.css">
		<link rel="shortcut icon" href="image/favicon.ico">		
	</head>
	<body>
		<section id="tudo">
			<section id="geral">
				<header>				
					<?php include ('menu.php'); ?>
					<div id="logo">
						<a href="usuariologado.php" > <img src="image/logotipo.png" class="logo"> </a>
					</div>
					<div id="ad">
						<h1 id="titulo">Bem-vindo(a) <?php echo $nome[0] ?> </h1>
					</div>
					<nav id="barra1">
						<a href="usuariologado.php" class="item3"> <img src="image/home.png" class="home"> </a>
						<a href="candidatos.php" class="item2">CANDIDATOS</a>
						<a href="partidos.php" class="item2">PARTIDOS</a>
						<a href="cidadeestado.php" class="item2">CIDADES/ESTADOS</a>
						<a href="sobre.php" class="item2">SOBRE</a>
						<form name="frmBusca" method="post" action="pesq.php?a=buscar">							
							<input type="search" name="palavra" placeholder="Pesquisar na Wiki" title="Pesquisar" id="pesqInput" tabindex="1" autocomplete="off">
							<input type="image" src="image/lupa.png" width="42px" height="46px" class="item4" onClick="this.form.submit()">
						</form>
				    </nav>
				</header>
				<section id="meio">
					<section id="esquerda">
						<nav id="barra2">
							 <h3 class="recent" > Cadastro Candidato</h3>
						</nav>
						<nav id="barra3"> </nav>
						<div id="artigo1">
							<div class="form2">
							  <h1> Cadastrar Candidato </h1>
							  <form enctype="multipart/form-data" action="submit_cand.php" method="post"  accept-charset="UTF-8">							
								<label for="fname">Nome:</label>
								<input class="cad_user" type="text" id="cand_perf" name="cand_name">
								
								<label for="sex">Sexo:</label>
								<select class="cad_user" id="sex_edit" name="cand_sex">
								  <option> Selecione </option>
								  <option value="1">Masculino</option>
								  <option value="2">Feminino</option>
								</select>
								
								<label for="fname">Idade:</label>
								<input class="cad_user" type="text" id="cand_perf" name="cand_age">
								
								<label for="fname">Profissão:</label>
								<input class="cad_user" type="text" id="cand_perf" name="cand_job">
								
								<label for="sex">Partido:</label>
								<select class="cad_user" id="" name="cand_part">
								  <option> Selecione o Partido </option> 
								  <?php //Pegando os partidos do banco
									$sel_part = "SELECT * FROM partido ORDER BY part_name";
									$sql = mysqli_query($connection, $sel_part);
									
									while($line_part = mysqli_fetch_array($sql)){
										$part_sigla = $line_part['part_sigla'];
										$part_name = $line_part['part_name'];
										echo "<option value='$part_sigla'>$part_name</option>";
									}
								  ?>
								</select>
								
								<label for="fname">Realizações:</label>
								<input class="cad_user" type="text" id="cand_perf" name="cand_work">
								
								<label for="fname">História</label>
								<input class="cad_user" type="textarea" id="cand_text" name="cand_hist">	
								
								<label for="fname">Propostas</label>
								<input class="cad_user" type="textarea" id="cand_text" name="cand_prop">	
								
								<label for="fname">Ideias</label>
								<input class="cad_user" type="textarea" id="cand_text" name="cand_idea">	
								
								<label for="fname">Fonte Ideias</label>
								<input class="cad_user" type="textarea" id="cand_text" name="cand_source">
								
								<label for="sex">Cidade:</label>
								<select class="cad_user" id="sex_edit" name="cand_city">
								  <option> Selecione </option>
								  <?php //Pegando as cidades do banco
									$sel_city = "SELECT * FROM cidade ORDER BY city_name";
									$sql2 = mysqli_query($connection, $sel_city);
									
									while($line_city = mysqli_fetch_array($sql2)){
										$city_name = $line_city['city_name'];
										echo "<option value='$city_name'>$city_name</option>";
									}
								  ?>
								</select>
								
								<label for="img">Imagem:</label>
							  	<input type="file" name="cand_pict" width="140" height="140" required><br>								
								<center>
								<input id="bt" type="submit" value="Cadastrar" name="enviar">
								</center>
							  </form>
							</div>
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
							<a class="recent2"> DESTAQUES </a>
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
	  <h1> Editar Meu Usuário </h1>
	  <form action="edita_usuario.php" method="post">
		<input type="hidden" name="id_user" value="<?php echo $id_user?>">
		<label for="fname">E-mail:</label>
		<input class="cad_user" type="email" id="user_mail" name="email_user" value="<?php echo $email_user?>">
		
		<label for="fname">Senha:</label>
		<input class="cad_user" type="password" id="user_pass" name="pass_user" placeholder="Redigite a sua senha para não alterar" required>
		
		<!--
			<label for="fname">Antiga Senha:</label>
			<input class="cad_user" type="password" id="user_pass" name="pass_old" placeholder="Antiga senha">
		-->
		
		<label for="fname">CPF:</label>
		<input class="cad_user" type="text" id="user_cpf" name="cpf_user" value="<?php echo $cpf_user?>">
	  
		<label for="fname">Nome:</label>
		<input class="cad_user" type="text" id="user_name" name="name_user" value="<?php echo $name_user?>">

		<label for="fname">Data de Nascimento:</label>
		<input class="cad_user" type="date" id="user_birth" name="birth_user" value="<?php echo $birth_user?>">
		
		<label for="fname">Endereço:</label>
		<input class="cad_user" type="text" id="user_address" name="add_user" value="<?php echo $add_user?>">
		
		<label for="fname">Estado:</label>
		<input class="cad_user" type="text" id="user_estate" name="state_user" value="<?php echo $state_user?>">
		
		<label for="fname">Cidade:</label>
		<input class="cad_user" type="text" id="user_city" name="city_user" value="<?php echo $city_user?>">
		
		<label for="sex">Sexo:</label>
		<select class="cad_user" id="sex" name="sex_user">
			<?php
				echo"<option selected='selected' value='$sex_user'>";//pega o sexo do usuário como pré selecionado
				if($sex_user == '1'){//se for 1 exibe masculino se não exibe feminino
					echo "Masculino</option>
					<option value='2'>Feminino</option>";
				}else{
					echo "Feminino</option>
					<option value'1'>Masculino</option>";
				}
			?>
		</select>
		
		<center>
		<input id="bt" type="submit" value="Confirmar">
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

<script>
	// Cria o modal Cadastro
	var modal = document.getElementById('myModal');

	// Botão que chama a abertura do modal Cadastro
	var btn = document.getElementById("myBtn");

	// Quando o usuário clicar no botão, abra o modal cadastro
	btn.onclick = function() {
		modal.style.display = "block";
	}
	
	// Fechar quando o usuário clicar fora do modal 
	window.onclick = function(event) {
		if (event.target == modal) {
			modal.style.display = "none";
		}
	}
</script>
	
</html>