<?php


include("../includes/generated/include_dao.php");
session_start();
$id = $_GET['ordi'];


$ordi = DAOFactory::getOrdinateurDAO()->load($id);  
$refOrdi = $ordi->refOrdinateur;
$ordiPanne = DAOFactory::getPanneDAO()->queryByIdOrdinateurPanne($refOrdi);  

$_SESSION["refOrdi"] = $refOrdi;


?>



