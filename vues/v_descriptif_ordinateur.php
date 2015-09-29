<?php
$arr = DAOFactory::getPanneDAO()->queryAll();  // SELECT ALL PANNE
$intervention = DAOFactory::getInterventionDAO()->queryAll();  // SELECT ALL INTERVENTION
$history_panne = DAOFactory::getHistoryPanneDAO()->queryAll(); // SELECT ALL HISTORY PANNE
$ordi = DAOFactory::getOrdinateurDAO()->queryAll();  // SELECT ALL ORDINATEUR
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
                        <i class="fa fa-desktop"></i> Descriptif Ordinateur          
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <div class="col-lg-12">
            <div id="page-wrapper">
                <div class="form-group">
                    <select class="form-control" id="ordi" name="machine" onchange="javascript:envoyerRequete('models/m_liste_des_ordinateur.php', this.value)">
                        <?php
                        for ($i = 0; $i < count($ordi); $i++) {
                            $row = $ordi[$i];
                            echo"<option value=" . $row->idOrdinateur . ">" . $row->refOrdinateur . "</option>";
                        }
                        ?>
                    </select>
                    <div class="col-lg-12" id="nbPdt"></div>

                </div>
            </div>
        </div>
    </div>
</div>

