<?php
session_start();
include("includes/connexion.php");
include("includes/fct.bdd.php");
include("includes/generated/include_dao.php");
include("vues/v_header.php");
 //var_dump($_REQUEST);
if(!isset($_REQUEST['uc'])){
      $_REQUEST['uc'] = 'connexion';
 }	 

$uc = $_REQUEST['uc'];

switch($uc){
	case 'connexion':{
		include("controleurs/c_connexion.php");
		break;
	}
	case 'intervenant' :{
		include("controleurs/c_intervenant.php");
		break;
	}
	case 'personnel' :{
		include("controleurs/c_personnel.php");
		break; 
	}
	case 'destroy' :{
		include("controleurs/c_destroy.php");
		break; 
	}
	case 'descriptif_ordinateur' :{
		include("controleurs/c_descriptif_ordinateur.php");
		break; 
	}
	case 'validation' :{
		include("controleurs/c_validation.php");
		break; 
	}

}
include("vues/v_footer.php");