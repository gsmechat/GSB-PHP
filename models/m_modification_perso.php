<?php
	
	//session_start();

if($_SESSION['type']=="perso"){
	$jour = $_POST['jour'];
	$mois = $_POST['mois'];
	$annee = $_POST['annee'];
	$date = $jour.' '.$mois.' '.$annee;
	$id = $_POST['machine'];
	$ordi = DAOFactory::getOrdinateurDAO()->load($id); 
	$machine =$ordi->refOrdinateur;
	$idPersonnel = $_SESSION['perso'];

	// var_dump($machine);
	// echo"<br>";
	$type_materiel = $_POST['type_mat'];
	// var_dump($type_materiel);
	// echo"<br>";
	$urgence = $_POST['urgence'];
	// var_dump($urgence);
	// echo"<br>";
	if($_POST['periph'] == null)
		$peripherique = "";
	else	
		$peripherique = $_POST['periph'];
	// var_dump($peripherique);
	// echo"<br>";
	$info = $_POST['info'];
	// var_dump($info);
	// echo"<br>";
	

	$panne = new Panne();
	$panne->datePanne = $date;
	$panne->typeMaterielPanne = $type_materiel;
	$panne->urgencePanne = $urgence;
	$panne->peripheriquePanne = $peripherique;
	$panne->descriptifPane = $info;
	$panne->idOrdinateurPanne = $machine;
	$panne->identifiantConnect = $idPersonnel;

	if($date != null && $type_materiel != null && $urgence != null && $machine != null ){
		$_SESSION['panneok'] = "Votre panne a bien etais envoyer";
		DAOFactory::getPanneDAO()->insert($panne);
	}else{
		$_SESSION['panne'] = "Votre panne n'as pas etais envoyer";
	}

	

	$history_panne = new HistoryPanne();
	$history_panne->datePanne = $date;
	$history_panne->typeMaterielPanne = $type_materiel;
	$history_panne->urgencePanne = $urgence;
	$history_panne->peripheriquePanne = $peripherique;
	$history_panne->descriptifPane = $info;
	$history_panne->idOrdinateurPanne = $machine;
	$history_panne->identifiantConnect = $idPersonnel;
	if($date != null && $type_materiel != null && $urgence != null && $machine != null )
		DAOFactory::getHistoryPanneDAO()->insert($history_panne);


include("controleurs/c_personnel.php");
}else{
	?>
		<script>
		alert("Impossible d'accéder a cette URL, vous allez etre rediriger");
		</script>
	<?php
	include("controleurs/c_personnel.php");
} 

	//header("Location: personnel.php");








?>