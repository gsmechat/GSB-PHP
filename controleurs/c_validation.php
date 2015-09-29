<?php
// if(!isset($_REQUEST['validation_modif_inter'])){
// 	$_REQUEST['validation_modif_inter'] = 'demandeConnexion';
// }
	$type = $_SESSION['type'];
	if($type == "inter")
		include("models/m_modification_inter.php");
	else
		include("models/m_modification_perso.php");
?>





