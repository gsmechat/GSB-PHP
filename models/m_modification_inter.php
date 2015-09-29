<?php
	

	if(isset($_POST['composant']) && isset($_POST['idPanne']) && isset($_POST['refChanger']) && isset($_POST['info']) && isset($_SESSION['inter']) && isset($_POST['type']) && isset($_POST['machine'])){

	$jour = $_POST['jour'];
	$mois = $_POST['mois'];
	$annee = $_POST['annee'];
	$date = $jour.' '.$mois.' '.$annee;
	$composant = $_POST['composant'];
	$idPanne = intval($_POST['idPanne']); // TRANSPHORMER MON STRING EN INT 
	$refChanger = $_POST['refChanger'];
	$infoIntervention = $_POST['info'];
	$idIntervenant = $_SESSION['inter'];
	$type = $_POST['type'];

	$id = $_POST['machine'];
	$ordi = DAOFactory::getOrdinateurDAO()->load($id); 
	$machine =$ordi->refOrdinateur;
	
	$inter = new Intervention();
	$inter->dateIntervention = $date;	
	$inter->machineIntervention = $machine;
	$inter->composantSelectIntervention = $composant;
	$inter->idPanneIntervention = $idPanne;
	$inter->rCCIntervention = $refChanger;
	$inter->infoIntervention = $infoIntervention;
	$inter->idintervenant = $idIntervenant;
	DAOFactory::getInterventionDAO()->insert($inter);

	$ordinateur = new Ordinateur();

	$ordinateur->refOrdinateur = $machine;

	if($composant == "carteMere")
		$ordinateur->carteMere = $refChanger;
	else
		$ordinateur->carteMere = $ordi->carteMere; 

	if($composant == "processeur")
		$ordinateur->processeur = $refChanger;
	else
		$ordinateur->processeur = $ordi->processeur;

	if($composant == "memoireVive")
		$ordinateur->memoireVive = $refChanger;
	else
		$ordinateur->memoireVive = $ordi->memoireVive;
		
	if($composant == "disqueDur")
		$ordinateur->disqueDur = $refChanger;
	else
		$ordinateur->disqueDur = $ordi->disqueDur;

	if($composant == "carteReseau")
		$ordinateur->carteReseau = $refChanger;
	else
		$ordinateur->carteReseau = $ordi->carteReseau;

	if($composant == "lecteur")
		$ordinateur->lecteur = $refChanger;
	else
		$ordinateur->lecteur = $ordi->lecteur;

	if($composant == "carteGraphique")
		$ordinateur->carteGraphique = $refChanger;
	else
		$ordinateur->carteGraphique = $ordi->carteGraphique;

	if($composant == "carteSon")
		$ordinateur->carteSon = $refChanger;
	else
		$ordinateur->carteSon = $ordi->carteSon;

	if($composant == "alimentation")
		$ordinateur->alimentation = $refChanger;
	else
		$ordinateur->alimentation = $ordi->alimentation;				

	$ordinateur->numSerieOrdinateur = $ordi->numSerieOrdinateur;
	$ordinateur->dateAchatOrdinateur = $ordi->dateAchatOrdinateur;
	$ordinateur->fournisseurOrdinateur = $ordi->fournisseurOrdinateur;
	$ordinateur->garantieOrdinateur = $ordi->garantieOrdinateur;
	$ordinateur->extentionGarantieOrdinateur = $ordi->extentionGarantieOrdinateur;
	$idordi = intval($id);
	$ordinateur->idOrdinateur = $idordi;

	DAOFactory::getOrdinateurDAO()->update($ordinateur);
	DAOFactory::getPanneDAO()->delete($idPanne);

	$date = $jour.' '.$mois.' '.$annee;
	$composant = $_POST['composant'];
	$idPanne = intval($_POST['idPanne']); // TRANSPHORMER MON STRING EN INT 
	$refChanger = $_POST['refChanger'];
	$infoIntervention = $_POST['info'];
	$idIntervenant = $_SESSION['inter'];
	$type = $_POST['type'];

	if($date != null && $idPanne != null && $refChanger != null && $infoIntervention != null && $idIntervenant != null && $type != null){
		$_SESSION['resolutionok'] = "Votre resolution de la panne selectionné a bien etais envoyer";
	}else{
		$_SESSION['resolution'] = "Votre resolution de la panne selectionné n'as pas etais envoyer";
	}

	include("controleurs/c_intervenant.php");
}else{
	?>
		<script>
		alert("Impossible d'accéder a cette URL, vous allez etre rediriger");
		</script>
	<?php
	include("controleurs/c_intervenant.php");
} 


?>