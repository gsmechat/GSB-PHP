<?php

	$type = null;

	if(isset($_SESSION['type'])){
		$type = $_SESSION['type'];
		$login = $_SESSION['login'];
	}
	
	if ($type == "perso"){
		$_SESSION["perso"] = $login;
		include("vues/v_menu.php");
		include("vues/v_personnel.php");
	}else{
		include("vues/v_erreurs.php");
		include("vues/v_connexion.php");
	}



?>