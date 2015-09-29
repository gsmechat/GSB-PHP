<?php

$arr = DAOFactory::getOrdinateurDAO()->queryAll();  // SELECT ORDINATEUR

?>
	<div id="page-wrapper">
            <center><img src ="includes/images/logo-deux-gsb.png"></center>
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            GSB <small>Tool's</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-fw fa-desktop"></i> Machines 
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                   

                	<div class="col-lg-12">
                        <h2>Ordinateur</h2>
                        <hr>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>id Ordinateur</th>
                                        <th>Reference</th>
                                        <th>Carte mere</th>
                                        <th>Processeur</th>
                                        <th>Memoire vive</th>
                                        <th>Disque dur</th>
                                        <th>Carte reseau</th>
                                        <th>Lecteur</th>
                                        <th>Carte graphique</th>
                                        <th>Carte son</th>
                                        <th>Alimentation</th>
                                        <th>Numero de serie</th>
                                        <th>Date achat</th>
                                        <th>Fournisseur</th>
                                        <th>Garantie</th>
                                        <th>Extention garantie</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <?php
//			$reqOrdinateur = $con->query('SELECT * FROM ordinateur');
			
			for($i=0;$i<count($arr);$i++){
		$p = $arr[$i];
	echo "</td>";
		echo "<td>".$p->idOrdinateur;
		echo "</td><td>".$p->refOrdinateur;
		echo "</td><td>".$p->carteMere;
		echo "</td><td>".$p->processeur;
		echo "</td><td>".$p->memoireVive;
		echo "</td><td>".$p->disqueDur;
		echo "</td><td>".$p->carteReseau;
		echo "</td><td>".$p->lecteur;
		echo "</td><td>".$p->carteGraphique;
		echo "</td><td>".$p->carteSon;
		echo "</td><td>".$p->alimentation;
		echo "</td><td>".$p->numSerieOrdinateur;
		echo "</td><td>".$p->dateAchatOrdinateur;
		echo "</td><td>".$p->fournisseurOrdinateur;
		echo "</td><td>".$p->garantieOrdinateur;
		echo "</td><td>".$p->extentionGarantieOrdinateur;

		echo"</td>";
		echo"</tr>";
	}
	echo"		 
	</table> ";
?>


<!-- 

refOrdinateur = $row['refOrdinateur'];
		$ordinateur->carteMere = $row['CarteMere'];
		$ordinateur->processeur = $row['Processeur'];
		$ordinateur->memoireVive = $row['MemoireVive'];
		$ordinateur->disqueDur = $row['DisqueDur'];
		$ordinateur->carteReseau = $row['CarteReseau'];
		$ordinateur->lecteur = $row['Lecteur'];
		$ordinateur->carteGraphique = $row['CarteGraphique'];
		$ordinateur->carteSon = $row['CarteSon'];
		$ordinateur->alimentation = $row['Alimentation'];
		$ordinateur->numSerieOrdinateur = $row['numSerieOrdinateur'];
		$ordinateur->dateAchatOrdinateur = $row['dateAchatOrdinateur'];
		$ordinateur->fournisseurOrdinateur = $row['fournisseurOrdinateur'];
		$ordinateur->garantieOrdinateur = $row['garantieOrdinateur'];
		$ordinateur->extentionGarantieOrdinateur = $row['extentionGarantieOrdinateur'];


		 -->

                                </tbody>
                            </table>
                        </div>
                    </div>


                     
                </div>
                <!-- /.row -->


            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
