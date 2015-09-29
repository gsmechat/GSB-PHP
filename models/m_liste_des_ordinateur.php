<?php


include("../includes/generated/include_dao.php");
$history_panne = DAOFactory::getHistoryPanneDAO()->queryAll(); // SELECT ALL HISTORY PANNE

	header("Cache-Control: no-cache, must-revalidate");
	$cnx=mysql_connect('localhost','root','root');
	mysql_select_db('gsb',$cnx);
	$req=mysql_query('select * from ordinateur where idOrdinateur='.$_GET['categ']);
	$res=mysql_fetch_assoc($req);
	echo "<div class=col-lg-3><br><h3>Ordinateur: </h3><br>".$res['refOrdinateur']."<br><hr>";

	echo "<br><div class=panel-color><h3>Carte mere: </h3><br>".$res['CarteMere']."<br><hr></div>";
	echo "<br><h3>Processeur: </h3><br>".$res['Processeur']."<br><hr></div><div class=col-lg-3>";
	echo "<br><div class=panel-color><h3>Memoire vive: </h3><br>".$res['MemoireVive']."<br><hr></div>";
	echo "<br><h3>Disque dur: </h3><br>".$res['DisqueDur']."<br><hr>";
	echo "<br><div class=panel-color><h3>Carte reseau: </h3><br>".$res['CarteReseau']."<br><hr></div></div><div class=col-lg-3>";
	echo "<br><h3>Lecteur: </h3><br>".$res['Lecteur']."<br><hr>";
	echo "<br><div class=panel-color><h3>Carte graphique: </h3><br>".$res['CarteGraphique']."<br><hr></div>";
	echo "<br><h3>Carte son: </h3><br>".$res['CarteSon']."<br><hr></div><div class=col-lg-3>";
	echo "<br><div class=panel-color><h3>Alimentation: </h3><br>".$res['Alimentation']."<br><hr></div>";
	echo "<br><h3>Numero de serie: </h3><br>".$res['numSerieOrdinateur']."<br><hr>";
	echo "<br><div class=panel-color><h3>Date d'achat: </h3><br>".$res['dateAchatOrdinateur']."<br><hr></div></div><div class=col-lg-3>";
	echo "<br><div class=panel-color><h3>Fournissuer: </h3><br>".$res['fournisseurOrdinateur']."<hr></div></div><div class=col-lg-3>";
	echo "<br><h3>Garantie: </h3><br>".$res['garantieOrdinateur']."<hr></div><div class=col-lg-3>";
	echo "<br><div class=panel-color><h3>Extention de garantie: </h3><br>".$res['extentionGarantieOrdinateur']."<hr></div></div></div>";

?>

	<!-- Page Heading -->
                <div class="col-lg-12">
                        <h2>Historique Panne</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>id Panne</th>
                                        <th>Date Panne</th>
                                        <th>Type materiel</th>
                                        <th>Urgence Panne</th>
                                        <th>Peripherique</th>
                                        <th>Ordinateur</th>
                                        <th>Descriptif</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>

<?php
		$compteur = 0;
          for($i=0;$i<count($history_panne);$i++){
        $p = $history_panne[$i];
        if($p->idOrdinateurPanne == $res['refOrdinateur']){
    	$compteur += $compteur + 1;
    	echo "</td>";
        echo "<td>".$p->idPanne;
        echo "</td><td>".$p->datePanne;
        echo "</td><td>".$p->typeMaterielPanne;
        echo "</td><td>".$p->urgencePanne;
        echo "</td><td>".$p->peripheriquePanne;
        echo "</td><td>".$p->idOrdinateurPanne;
        echo "</td><td>".$p->descriptifPane;
        echo"</td>";
        }
        echo"</tr>";
    }
    echo"        
    </table> ";



    mysql_close($cnx);
?>

                                </tbody>
                            </table>
                        </div>
                    </div>

