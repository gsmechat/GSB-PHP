<?php

$arr = DAOFactory::getHistoryPanneDAO()->queryAll();  // SELECT HISTORIQUE PANNE 

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
                        <h2>Panne Total</h2>
                        <hr>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>id Panne</th>
                                        <th>Nom </th>
                                        <th>Type materiel</th>
                                        <th>Urgence </th>
                                        <th>Peripherique</th>
                                        <th>Descriptif</th>
                                        <th>Nom declarant</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <?php
//			$reqOrdinateur = $con->query('SELECT * FROM ordinateur');
			
			for($i=0;$i<count($arr);$i++){
		$p = $arr[$i];
	echo "</td>";
		echo "<td>".$p->idPanne;
		echo "</td><td>".$p->idOrdinateurPanne;
		echo "</td><td>".$p->typeMaterielPanne;
		echo "</td><td>".$p->urgencePanne;
		echo "</td><td>".$p->peripheriquePanne;
		echo "</td><td>".$p->descriptifPane;
		echo "</td><td>".$p->identifiantConnect;
		echo"</td>";
		echo"</tr>";
	}
	echo"		 
	</table> ";
?>



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
