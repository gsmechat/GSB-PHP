<?php
$arr = DAOFactory::getInterventionDAO()->queryAll();  // SELECT HINTERVENTION
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
                <h2>Intervention Effectuer</h2>
                <hr>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>id Intervention</th>
                                <th>Date </th>
                                <th>Ordinateur</th>
                                <th>Composant</th>
                                <th>id Panne</th>
                                <th>Reference changer</th>
                                <th>Information</th>
                                <th>id Intervenant</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php
                                for ($i = 0; $i < count($arr); $i++) {
                                    $p = $arr[$i];
                                    echo "</td>";
                                    echo "<td>" . $p->idIntervention;
                                    echo "</td><td>" . $p->dateIntervention;
                                    echo "</td><td>" . $p->machineIntervention;
                                    echo "</td><td>" . $p->composantSelectIntervention;
                                    echo "</td><td>" . $p->idPanneIntervention;
                                    echo "</td><td>" . $p->rCCIntervention;
                                    echo "</td><td>" . $p->infoIntervention;
                                    echo "</td><td>" . $p->idintervenant;
                                    echo"</td>";
                                    echo"</tr>";
                                }
                                echo"</table> ";
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
