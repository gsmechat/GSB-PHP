<?php

	 try{
	 	 $con = new PDO('mysql:host=localhost;dbname=gsb', 'root', 'root');
	 }catch (Exception $e){
	 	die('Erreur : ' . $e->getMessage());
	 }

?>