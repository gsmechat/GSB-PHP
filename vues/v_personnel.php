<?php
$ordi = DAOFactory::getOrdinateurDAO()->queryAll();  // SELECT ALL getOrdinateurDAO
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
                        <i class="fa fa-fw fa-desktop"></i> Déclaration tickets
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->


        <?php if (isset($_SESSION['panneok'])) : ?>
            <div class="message alert alert-success"><span><center><?= $_SESSION['panneok']; ?></center></span></div>
            <?php
            unset($_SESSION['panneok']);
        endif;
        ?>

        <?php if (isset($_SESSION['panne'])) : ?>
            <div class="message alert alert-danger"><span><center><?= $_SESSION['panne']; ?></center></span></div>
            <?php
            unset($_SESSION['panne']);
        endif;
        ?>

        <div class="row">
            <form method="post" action="index.php?uc=validation&action=validation_modif_perso">
                <div class="col-lg-12">
                    <div class="container">
                        <div class="row">
                            <form role="form">
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
                                            echo"
                                            <option value=" . $i . ">" . $i . "</option>";
                                            $i++;
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-lg-6">

                                    <div class="form-group">
                                        <label for="InputEmail">Machine</label>
                                        <div class="input-group">
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

                                            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="InputEmail">Type materiel</label>
                                        <div class="input-group">
                                            <select class="form-control" name="type_mat" placeholder="Type matériel" onchange="type_materiel(this.value)" required>
                                                <option value=""></option>
                                                <option value="Hardware">Hardware</option>
                                                <option value="Software">Software</option>
                                                <option value="Peripherique">Périphérique</option>
                                            </select>

                                            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="InputEmail">Urgence</label>
                                        <div class="input-group">
                                            <select class="form-control" name="urgence" placeholder="Type matériel" required>
                                                <option value=""></option>
                                                <option value="Moyen"> Moyen</option>
                                                <option value="Urgent">Urgent</option>
                                                <option value="Tres urgent">Trés urgent</option>
                                            </select>
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                        </div>
                                    </div>

                                    <div id="periph">
                                        <div class="form-group">
                                            <label for="InputEmail">Périphérique</label>
                                            <div class="input-group">
                                                <select class="form-control" name="periph" placeholder="Type matériel">
                                                    <option value=""></option>
                                                    <option value="Souris"> Souris</option>
                                                    <option value="Ecran"> Ecran</option>
                                                    <option value="Clavier"> Clavier</option>
                                                    <option value="Imprimante"> Imprimante</option>
                                                </select>
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="InputMessage">Enter information utile</label>
                                        <div class="input-group">
                                            <textarea name="info" id="InputMessage" class="form-control" rows="5" required></textarea>
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                        </div>
                                    </div>
                                    <input type="submit" name="submit" id="submit" value="Envoyer" class="btn btn-info pull-right">
                                </div>
                            </form>

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
