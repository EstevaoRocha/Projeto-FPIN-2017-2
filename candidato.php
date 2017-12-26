<?php
	session_start();
	include ('conf.php');

	$cand_id = $_GET['cand_id'];// pega o id do candidato via URL
	
	$select = "SELECT * FROM candidato WHERE cand_id = $cand_id"; // select das informacoes do candidato
	$sql = mysqli_query($connection, $select);
	
	while($line = mysqli_fetch_array($sql)){//atribuicao dos dados do candidato em variaveis
		$cand_id = $line['cand_id'];
		$cand_name = $line['cand_name'];
		$cand_sex = $line['cand_sex']; 
		$cand_age = $line['cand_age'];
		$cand_job = $line['cand_job'];
		$cand_part = $line['cand_part']; 
		$cand_work = $line['cand_work'];
		$cand_hist = $line['cand_hist'];
		$cand_city = $line['cand_city'];
		$cand_pict = $line['cand_pict'];
	};		
	
	//Informações do usuario logado para edição
	if($_SESSION['logado']=="ok"){
		include ('edit_data.php');
	}
	
	
	//Cookies para quantidade de acessos (NAO TESTADO)
	include ('acessos.php');
?>

<html>
	<head>
		<title> Wikilítica - Candidato </title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/styleCandidato_ok.css">
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
						<h1 id="titulo">Bem-vindos à Wikilítica</h1>
					</div>
					<nav id="barra1">
						<a href="usuariologado.php" class="item3"> <img src="image/home.png" class="home"> </a>
						<a href="candidatos.php" class="item2">CANDIDATOS</a>
						<a href="partidos.php" class="item2">PARTIDOS</a>
						<a href="cidadeestado.php" class="item2">CIDADES/ESTADOS</a>
						<a href="sobre.php" class="item2">SOBRE</a>
						<a href="" class="item2"></a>
						<a href="" class="item2"></a>
						<a href="" class="item2"></a>
						<a href="" class="item2"></a>	
						<form name="frmBusca" method="post" action="pesq.php?a=buscar">							
							<input type="search" name="palavra" placeholder="Pesquisar na Wiki" title="Pesquisar" id="pesqInput" tabindex="1" autocomplete="off">
							<input type="image" src="image/lupa.png" width="42px" height="46px" class="item4" onClick="this.form.submit()">
						</form>
				    </nav>
				</header>
				<section id="meio">
					<section id="esquerda">
						<nav id="barra2">
							 <h3 class="recent" > <?php echo $cand_name ?></h3>
						</nav>
						<nav id="barra3"> 
							<a href="#myBtn3" class="edit" id="myBtn3">/ Editar </a>
							<a href="#myBtn4" class="edit" id="myBtn4">/ + Proposta</a>
							<a href="#myBtn5" class="edit" id="myBtn5"> + Ideia</a>
						</nav>
						<article id="artigo1">
						
								
							
								<div class="textocand"> <p> <?php echo $cand_hist ?> </p>
								</div>
							
								<div class="tabela">
								<!--
								<table class="tabela" id="tabela_candidato">
								
									<caption>Histórico de Cargos Eletivos Ocupados</caption>
									<tr>
										<th> Cargos </th>
										<th> Início </th>
										<th> Fim </th>
									</tr>
									<tr>
										<td> 60.º Governador de Alagoas </td>
										<td> 1 de janeiro de 1999 </td>
										<td> 31 de março de 2006 </td>
									</tr>
									<tr>
										<td> Prefeito de Maceió </td>
										<td> 1 de janeiro de 1993 </td>
										<td> 31 de dezembro de 1996 </td>
									</tr>
									<tr>
										<td> Deputado estadual de Alagoas </td>
										<td> 1983 </td>
										<td> 1986 </td>
									</tr>
								</table>
								
								<table class="tabela" id="tabela_candidato">
									<caption>Histórico de Outras Filiações a Partidos</caption>
									<tr>
										<th> Filiações </th>
										<th> Início </th>
										<th> Fim </th>
									</tr>
									<tr>
										<td> <a href="partido.html">PDT </a></td>
										<td> 2005 </td>
										<td> Atualidade </td>
									</tr>
									<tr>
										<td> PSB </td>
										<td> 1986 </td>
										<td> 2005 </td>
									</tr>
									<tr>
										<td> PMDB </th>
										<td> 1982 </th>
										<td> 1986 </td>
									</tr>
								</table>
								-->
								<table class="tabela" id="tabela_candidato">
									<caption>Propostas</caption>
									<tr>
										<th> Descrição </th>
										<th> Fonte </th>
									</tr>							
									<?php		
										// SELECT ERRADO
										$select2 = "SELECT descricao, fonte_nome FROM proposta, fonte WHERE candidato_id = $cand_id GROUP BY descricao";
										$sql2 = mysqli_query($connection, $select2);
										
										while($line2 = mysqli_fetch_array($sql2)){
											$descricao = $line2['descricao'];
											$fonte_nome = $line2['fonte_nome'];		
											
										echo "<tr>
												<td> $descricao </td>
												<td> $fonte_nome </td>
											  </tr>";
											}									
									?>
								</table>
								
								<table class="tabela" id="tabela_candidato">
									<caption>Ideias</caption>
									<tr>
										<th> Descrição </th>
										<th> Fonte </th>
									</tr>
									<?php											
										$select3 = "SELECT descricao_ideia, fonte_nome FROM ideia, fonte WHERE candidato_id = $cand_id GROUP BY descricao_ideia"; 
										$sql3 = mysqli_query($connection, $select3);
										
										while($line3 = mysqli_fetch_array($sql3)){
											$descricao_ideia = $line3['descricao_ideia'];
											$fonte_nome = $line3['fonte_nome'];		
											
										echo "<tr>
												<td> $descricao_ideia </td>
												<td> $fonte_nome </td>
											  </tr>";
											}									
									?>
								</table>
								</div>
							
						</article>
					</section>
					<!-- *************************************************************************************************************************** -->
					<section id="direita">
						<nav id="barra4">
							<h3 class="perfil"> PERFIL </h3>							
						</nav>
						<nav id="barra5"> </nav>
						<!-- <img src="image/camera.png" width="70%" class="perfil"> -->
						<?php echo"<img src='image/'.$cand_pict.''width='290px' height='260px' class='perfil'>" ?>
						<div id="face">
							<pre class="info"> <b><?php echo $cand_name ?></b><br /> <?php if($cand_sex == 1)echo 'Sexo: Masculino';else 'Sexo: Feminino'; ?> <br /> Idade: <?php echo $cand_age ?> <br /> Profissão : <?php echo $cand_job ?> <b><br /> Partido : <?php echo $cand_part ?></b><br/><b><br /> Realizações :</b><br/> <?php echo $cand_work ?> </pre>
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
				<!-- gambiarra pro modal de editar candidato funcionar com o menu dinamico -->
				<a href='#myBtn2' class='item' id='myBtn2'></a>
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
    <div class="form">
	  <h1> Editar Informações </h1>
	  <form action="edita_candidato.php" method="post" enctype="multipart/form-data" accept-charset="UTF-8">
		<input type="hidden" name="cand_id" value="<?php echo $cand_id?>">
		<label for="fname">Nome:</label>
		<input class="cad_user" type="text" id="cand_perf" name="cand_name" value="<?php echo $cand_name?>">
								
		<label for="sex">Sexo:</label>
		<select class="cad_user" id="sex_edit" name="cand_sex">
			<?php
				echo"<option selected='selected' value='$cand_sex'>";//pega o sexo do candidato como pré selecionado
				if($cand_sex == '1'){//se for 1 exibe masculino se não exibe feminino
					echo "Masculino</option>
					<option value='2'>Feminino</option>";
				}else{
					echo "Feminino</option>
					<option value'1'>Masculino</option>";
				}
			?>
		</select>
								
		<label for="fname">Idade:</label>
		<input class="cad_user" type="text" id="cand_perf" name="cand_age" value="<?php echo $cand_age?>">
								
		<label for="fname">Profissão:</label>
		<input class="cad_user" type="text" id="cand_perf" name="cand_job" value="<?php echo $cand_job?>">
								
		<label for="sex">Partido:</label>
		<select class="cad_user" name="cand_part">
			<?php 
				//pega o partido do candidato como pré selecionado
				//Pegando os partidos do banco
				$sel_part = "SELECT * FROM partido";//pega os partidos do banco
				$sql = mysqli_query($connection, $sel_part);
				echo"<option selected='selected' value='$cand_part'> $cand_part </option>";
				while($line_part = mysqli_fetch_array($sql)){
					$part_sigla = $line_part['part_sigla'];
					$part_name = $line_part['part_name'];
					echo "<option value='$part_sigla'>$part_name</option>";
				}				
			?>
		</select>
								
		<label for="fname">Realizações:</label>
		<input class="cad_user" type="text" id="cand_perf" name="cand_work" value="<?php echo $cand_work?>">
								
		<label for="fname">História</label>
		<input class="cad_user" type="textarea" id="cand_text" name="cand_hist" value="<?php echo $cand_hist?>">
		
		<label for="sex">Cidade:</label>
		<select class="cad_user" name="cand_city">
		<?php
			$sel_city = "SELECT * FROM cidade";//pega as cidades do banco
			$sql2 = mysqli_query($connection, $sel_city);
			echo"<option selected='selected' value='$cand_city'> $cand_city </option>";	
			while($line_city = mysqli_fetch_array($sql2)){
				$city_id = $line_city['city_id'];
				$city_name = $line_city['city_name'];
				echo "<option value='$city_name'>$city_name</option>";
			}
		?>
		</select>
		<label for="img">Imagem:</label>
		<input type="file" name="cand_pict" width="140" height="140" value="<?php echo $cand_pict?>" required><br>	
		<center>
			<input id="bt" type="submit" value="Editar">
		</center>
	  </form>
	</div>
  </div>
</div>

<div id="myModal4" class="modal">
  <!-- Conteúdo do Modal-->
  <div class="modal-content">
    <div class="form">
	  <h1> Nova Proposta  </h1>
	  <form action="submit_prop.php" method="post" accept-charset="UTF-8">
		<input type="hidden" name="candidato_id" value="<?php echo $cand_id?>">
		<label for="fname">Descrição:</label>
		<input class="cad_user" type="text" id="descricao" name="descricao">
								
		<label for="sex">Fonte:</label>
		<select class="cad_user" id="sex_edit" name="fonte">
			<?php //Pegando os partidos do banco
				$sel_part = "SELECT * FROM fonte";
				$sql = mysqli_query($connection, $sel_part);
									
				while($line_part = mysqli_fetch_array($sql)){
					$id_fonte = $line_part['id_fonte'];
					$fonte_nome = $line_part['fonte_nome'];
					echo "<option value='$id_fonte'>$fonte_nome</option>";
				}
			?>
		</select>
		<center>
			<input id="bt" type="submit" value="Cadastrar">
		</center>
	  </form>
	</div>
  </div>
</div>

<div id="myModal5" class="modal">
  <!-- Conteúdo do Modal-->
  <div class="modal-content">
    <div class="form">
	  <h1> Nova Ideia  </h1>
	  <form action="submit_ideia.php" method="post" accept-charset="UTF-8">
		<input type="hidden" name="candidato_id" value="<?php echo $cand_id?>">
		<label for="fname">Descrição:</label>
		<input class="cad_user" type="text" id="descricao_ideia" name="descricao_ideia">
								
		<label for="sex">Fonte:</label>
		<select class="cad_user" id="sex_edit" name="fonte_ideia">
			<?php //Pegando os partidos do banco
				$sel_part = "SELECT * FROM fonte";
				$sql = mysqli_query($connection, $sel_part);
									
				while($line_part = mysqli_fetch_array($sql)){
					$id_fonte = $line_part['id_fonte'];
					$fonte_nome = $line_part['fonte_nome'];
					echo "<option value='$id_fonte'>$fonte_nome</option>";
				}
			?>
		</select>
		<center>
			<input id="bt" type="submit" value="Cadastrar">
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
	// Cria o modal de nova proposta/ideia
	var modal4 = document.getElementById('myModal4');
	// Cria o modal de nova proposta/ideia
	var modal5 = document.getElementById('myModal5');

	// Botão que chama a abertura do modal Cadastro
	var btn = document.getElementById("myBtn");
	// Botão que chama a abertura do modal Login
	var btn2 = document.getElementById("myBtn2");
	// Botão que chama a abertura do modal Editar
	var btn3 = document.getElementById("myBtn3");
	// Botão que chama a abertura do modal Nova Proposta/ideia
	var btn4 = document.getElementById("myBtn4");
	// Botão que chama a abertura do modal Nova Proposta/ideia
	var btn5 = document.getElementById("myBtn5");

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
	// Quando o usuário clicar no botão, abra o modal nova proposta
	btn4.onclick = function() {
		modal4.style.display = "block";
	}
	// Quando o usuário clicar no botão, abra o modal nova ideia
	btn5.onclick = function() {
		modal5.style.display = "block";
	}
	
	
	// Fechar quando o usuário clicar fora do modal 
	window.onclick = function(event) {
		if (event.target == modal || event.target == modal2 || event.target == modal3 || event.target == modal4 || event.target == modal5) {
			modal.style.display = "none";
			modal2.style.display = "none";
			modal3.style.display = "none";
			modal4.style.display = "none";
			modal5.style.display = "none";
		}
	}
</script>
</html>