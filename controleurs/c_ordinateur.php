<?php


	$type = null;

	if(isset($_SESSION['type'])){
		$type = $_SESSION['type'];
		$login = $_SESSION['login'];
	}
	
	if ($type == "inter"){
		$_SESSION["inter"] = $login;
		include("vues/v_menu.php");
		include("vues/v_ordinateur.php");
	}else{
		include("vues/v_erreurs.php");
		include("vues/v_connexion.php");
	}

?>