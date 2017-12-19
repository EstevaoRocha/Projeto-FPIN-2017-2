<?php
	switch($_SESSION['type_user']){
		case 0:
			echo "<menu>
					<a href='usuariologado.php' class='item'>PÁGINA INICIAL</a>
					<a href='#myBtn' class='item' id='myBtn'>EDITAR INFORMAÇÕES</a>									
					<a href='cad_partido.php' class='item'>GERENCIAR PARTIDO</a>
					<a href='cad_estado.php' class='item'>GERENCIAR CIDADE</a>
					<a href='sair.php' class='item'>SAIR</a>
				  </menu>
				";
			break;
		case 1:
			echo "<menu>
					<a href='usuariologado.php' class='item'>PÁGINA INICIAL</a>
					<a href='#myBtn' class='item' id='myBtn'>EDITAR INFORMAÇÕES</a>		
					<a href='cad_candidato.php' class='item'>CADASTRAR CANDIDATO</a>
					<a href='sair.php' class='item'>SAIR</a>
				 </menu>
				 ";
			break;
		default:
			echo "<menu>
					<a href='index.php' class='item'>PÁGINA INICIAL</a>
					<a href='#myBtn' class='item' id='myBtn'>CRIAR CONTA</a>
					<a href='#myBtn2' class='item' id='myBtn2'>ENTRAR</a>
				 </menu>
				 ";
	}
?>