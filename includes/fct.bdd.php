<?php

function getConnexionUser($login,$mdp,$con,$type){
	if($type =="inter"){
		$req = "select * from intervenants where login='$login' and mdp='$mdp'";
		$rs = $con->query($req);
		$ligne = $rs->fetch();
	}else{
		$req = "select * from personnel where login='$login' and mdp='$mdp'";
		$rs = $con->query($req);
		$ligne = $rs->fetch();
	}
	return $ligne;
}

?>