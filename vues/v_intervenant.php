<?php
$arr = DAOFactory::getPanneDAO()->queryAll();  // SELECT ALL PANNE
$intervention = DAOFactory::getInterventionDAO()->queryAll();  // SELECT ALL INTERVENTION
$history_panne = DAOFactory::getHistoryPanneDAO()->queryAll(); // SELECT ALL HISTORY PANNE
$ordi = DAOFactory::getOrdinateurDAO()->queryAll();  // SELECT ALL ORDINATEUR
?>


<div id="page-wrapper">
    <div class="container-fluid">
        <center><img src ="includes/images/logo-deux-gsb.png"></center>

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    GSB <small>Tool's</small>
                </h1>
                <ol class="breadcrumb">
                    <li class="active">
                        <i class="fa fa-dashboard"></i> Dashboard
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-wrench fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">
                                    <?php
                                    $nbr_panne = count($arr);
                                    echo $nbr_panne;
                                    ?>
                                </div>
                                <div>Nombre de Panne</div>
                            </div>
                        </div>
                    </div>
                    <a href="#">
                        <div class="panel-footer">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-green">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-desktop fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">
                                    <?php
                                    $nbr_ordi = count($ordi);
                                    echo $nbr_ordi;
                                    ?>
                                </div>
                                <div>Nombre de machine</div>
                            </div>
                        </div>
                    </div>
                    <a href="index.php?uc=connexion&action=ordinateur">
                        <div class="panel-footer">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-yellow">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-cog fa-5x fa-spin"></i>
                            </div>
                            <div class="col-xs-9 text-right ">
                                <div class="huge">
                                    <?php
                                    $nbr_history_panne = count($history_panne);
                                    echo $nbr_history_panne;
                                    ?>
                                </div>
                                <div>Panne TOTAL</div>
                            </div>
                        </div>
                    </div>
                    <a href="index.php?uc=connexion&action=panne_total">
                        <div class="panel-footer">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-red">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-check fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">
                                    <?php
                                    $nbr_intervention = count($intervention);
                                    echo $nbr_intervention;
                                    ?>
                                </div>
                                <div>Interventions effectuer</div>
                            </div>
                        </div>
                    </div>
                    <a href="#">
                        <div class="panel-footer">
                            <span class="pull-left">View Details</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <?php if (isset($_SESSION['resolutionok'])) : ?>
            <div class="message alert alert-success"><span><center><?= $_SESSION['resolutionok']; ?></center></span></div>
            <?php
            unset($_SESSION['resolutionok']);
        endif;
        ?>

        <?php if (isset($_SESSION['resolution'])) : ?>
            <div class="message alert alert-danger"><span><center><?= $_SESSION['resolution']; ?></center></span></div>
            <?php
            unset($_SESSION['resolution']);
        endif;
        ?>


        <div class="col-lg-12">
            <h2>Pannes</h2>
            <hr>
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
//          $reqOrdinateur = $con->query('SELECT * FROM ordinateur');

                            for ($i = 0; $i < count($arr); $i++) {
                                $p = $arr[$i];
                                echo "</td>";
                                echo "<td>" . $p->idPanne;
                                echo "</td><td>" . $p->datePanne;
                                echo "</td><td>" . $p->typeMaterielPanne;
                                echo "</td><td>" . $p->urgencePanne;
                                echo "</td><td>" . $p->peripheriquePanne;
                                echo "</td><td>" . $p->idOrdinateurPanne;
                                echo "</td><td>" . $p->descriptifPane;
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

        <div class="col-lg-12">

            <h2>Modification</h2>
            <hr>
            <form method="post" action="index.php?uc=validation&action=validation_modif_inter">
                <div class="row">
                    <div class="col-lg-1">
                        <label>Jours: </label>
                        <select class="form-control" name="jour" required="required">
                            <option value=""></option>
                            <?php
                            $i = 1;
                            while ($i <= 31) {
                                echo"
                                        <option value=" . $i . ">" . $i . "</option>";
                                $i++;
                            }
                            ?>

                        </select>
                    </div>
                    <div class="col-lg-1">
                        <label>Mois: </label>
                        <select class="form-control" name="mois" required="required">
                            <option value=""></option>
                            <option value="Sept.">Septembre</option>
                            <option value="Oct.">Octobre</option>
                            <option value="Nov.">Novembre</option>
                            <option value="Dec.">Decembre</option>
                            <option value="Janv.">Janvier</option>
                            <option value="Fev.">Fevrier</option>
                            <option value="Mar.">Mars</option>
                            <option value="Avr.">Avril</option>
                            <option value="Mai.">Mai</option>
                            <option value="Juin.">Juin</option>
                            <option value="Juil.">Juillet</option>
                            <option value="Aou.">Aout</option>
                        </select>
                    </div>
                    <div class="col-lg-1">
                        <label>Année: </label>
                        <select class="form-control" name="annee" required="required">
                            <option value=""></option>
                            <?php
                            $i = 1990;
                            while ($i <= 2020) {
                                echo"<option value=" . $i . ">" . $i . "</option>";
                                $i++;
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col-lg-2">


                        <label>Machine: </label>
                        <select class="form-control" name="machine" onchange="javascript:envoyerRequeteOrdi('models/m_ordinateur_select.php', this.value)">
                            <?php
                            for ($i = 0; $i < count($ordi); $i++) {
                                $row = $ordi[$i];
                                //for($i=0;$i<count($arr);$i++){
                                //$p = $arr[$i];
                                //if($p->idOrdinateurPanne == $row->refOrdinateur){
                                echo"<option value=" . $row->idOrdinateur . ">" . $row->refOrdinateur . "</option>";
                                //}
                                //}
                                $o = $row->refOrdinateur;
                            }
                            ?>
                        </select>
                    </div>



                    <div class="col-lg-2">
                        <label>Type: </label>
                        <select class="form-control" id="ici" name='type' required="required" onchange="javascript:envoyerRequeteType('models/m_type_select.php', this.value)">
                            <option value=''></option>
                            <option value='Hardware'>Hardware</option>
                            <option value='Software'>Software</option>
                            <option value='Peripherique'>peripherique</option>
                        </select>
                    </div>



                    <div class="col-lg-2" id="composant">
                        <label>Composant: </label>

                        <select name='composant' class="form-control" onchange="javascript:envoyerRequeteComposant('models/m_composant_select.php', this.value)">>
                            <option value=''></option>
                            <option value='carteMere'>Carte mere</option>
                            <option value='processeur'>Processeur</option>
                            <option value='memoireVive'>Memoire vive</option>
                            <option value='disqueDur'>Disque dure</option>
                            <option value='carteReseau'>Carte reseau</option>
                            <option value='Lecteur'>Lecteur</option>
                            <option value='carteGraphique'>Carte graphique</option>
                            <option value='carteSon'>Carte son</option>
                            <option value='Alimentation'>Alimentation</option>
                        </select>
                    </div>
                    <div id="nbPdt"></div>

                </div>
                <br>
                <div class="col-lg-3">
                    <label>Ref changer: </label>
                    <input class="form-control" type="text" name="refChanger"/>
                </div>
                <br><br><br><br>
                </div>
                <div class="col-lg-12">
                    <div class="info">
                        <label>Information utile: </label>

                        <br>
                        <textarea class="col-lg-12" name="info" rows="10" cols="50"></textarea>
                    </div>
                </div>
                <div class="col-lg-12">
                    <input class="btn btn-primary" type="submit" name="sub" value="Envoyer">
                </div>
            </form>

        </div>

    </div>
    <!-- /.row -->


</div>
<!-- /.container-fluid -->

