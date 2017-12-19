 <?php
	 if(!isset($_COOKIE["acessos"])){
		setcookie("acessos", 1);
	}else{
		setcookie("acessos", $_COOKIE["acessos"]+1);
	}
?>