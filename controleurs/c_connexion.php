<?php

if(!isset($_REQUEST['action'])){
	$_REQUEST['action'] = 'demandeConnexion';
}

$action = $_REQUEST['action'];
switch($action){
	case 'demandeConnexion':{
		include("vues/v_connexion.php");
		break;
	}
	case 'valideConnexion':{
		
		if(isset($login)){
			include("vues/v_erreur.php");
			include("vues/v_connexion.php");
		}
		else {
			$login = $_REQUEST['login'];
			$mdp = $_REQUEST['mdp'];
			$type = $_REQUEST['type'];
			$user = getConnexionUser($login,$mdp,$con,$type);
			
			$id = $user['id'];
			$nom =  $user['login'];
			$_SESSION["login"] = $login;
			$_SESSION["type"] = $type;
			$_SESSION["inter"] = $nom;
			if($type == 'inter'){
				include("vues/v_menu.php");
				include("vues/v_intervenant.php");
			}else{
				include("vues/v_menu.php");
				include("vues/v_personnel.php");
			}
		}
		break;
	}
	case 'intervenant':{
		include("controleurs/c_intervenant.php");
		break;
	}
	case 'descriptif_ordinateur':{
		include("controleurs/c_descriptif_ordinateur.php");
		break;
	}
	case 'ordinateur' :{
		include("controleurs/c_ordinateur.php");
		break; 
	}
	case 'panne_total' :{
		include("controleurs/c_panne_total.php");
		break; 
	}
	case 'intervention_effect' :{
		include("controleurs/c_intervention_effect.php");
		break; 
	}
	case 'personnel' :{
		include("controleurs/c_personnel.php");
		break; 
	}
	default :{
		include("vues/v_connexion.php");
		break;
	}
}

?>