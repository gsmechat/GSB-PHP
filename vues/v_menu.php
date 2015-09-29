<div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">GSB Tool's</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                
                <li class="dropdown">
                    <a href="index.php?uc=destroy" onclick="return verif();" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $login ?> (Deconnexion)
                   
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.php?uc=connexion&action=intervenant"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="index.php?uc=connexion&action=descriptif_ordinateur"><i class="fa fa-fw fa-bar-chart-o"></i> Descriptif Ordinateur</a>
                    </li>
                    <li >
                        <a href="index.php?uc=connexion&action=ordinateur"><i class="fa fa-fw fa-desktop"></i> Machines</a>
                    </li>
                    <li>
                        <a href="index.php?uc=connexion&action=panne_total"><i class="fa fa-fw fa-wrench"></i> Pannes Total</a>
                    </li>
                    <li>
                        <a href="index.php?uc=connexion&action=intervention_effect"><i class="fa fa-fw fa-check"></i> Intervention effectuer</a>
                    </li>
                    <li>
                        <a href="index.php?uc=connexion&action=personnel"><i class="fa fa-fw fa-edit"></i> Declaration de ticket</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
   </nav>