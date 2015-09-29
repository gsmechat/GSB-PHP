<div class="container">
    <div class="row" id="pwd-container">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <section class="login-form">
                <form method="post" action="index.php?uc=connexion&action=valideConnexion" role="login">
                    <img src="http://maxime.actu.com/media/img/logo.png" class="img-responsive" alt="" />
                    <div class="form-group">
                        <label class="radio-inline">
                            <input type="radio" name="type" id="optionsRadiosInline1" value="inter" checked>Intervenant
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="type" id="optionsRadiosInline2" value="perso">Personnel
                        </label>
                    </div>
                    <br>
                    <input type="text" name="login" placeholder="Email" required class="form-control input-lg" placeholder="Login" />
                    <input type="password" name="mdp"class="form-control input-lg" id="password" placeholder="Mot de passe" required="" />
                    <div class="pwstrength_viewport_progress"></div>
                    <button type="submit" name="go" class="btn btn-lg btn-primary btn-block">Sign in</button>
                </form>
            </section>  
        </div>
        <div class="col-md-4"></div>
    </div>
</div>