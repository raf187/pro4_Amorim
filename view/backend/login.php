<?php $title = ('Connexion Administrateur'); ?>


<?php ob_start(); ?>
<div class="container contLogin">
    <div class="card border-primary mb-3 text-center col-md-4 offset-md-4">
        <div class="card-header"><h4>Connexion</h4></div>
        <div class="card-body text-primary">
            <form class="form-horizontal" method="POST">
                <div class="form-group">
                    <div class="col-md-12">
                        <input id="pseudo" name="pseudo" type="text" placeholder="Pseudo" class="form-control input-md" required="">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <input id="mdp" name="mdp" type="password" placeholder="Mot de Passe" class="form-control input-md" required="">
                    </div>
                </div>
                <?php 
                if (isset($_SESSION['message'])) { ?>
                    <div class="col-md-10 offset-md-1 text-center alert alert-<?=$_SESSION['msgtype']?>">
                <?php
                echo $_SESSION['message'];
                unset($_SESSION['message']);
                ?>
                </div>
                <?php } ?>
                <div class="form-group">
                    <div class="col-md-12">
                        <button type="submit" id="connect" name="connect" class="btn btn-primary">Connexion</button>
                        <a href="/forteroche" id="anull" name="anull" class="btn btn-danger">Annuler</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $content = ob_get_clean();
require 'view/frontend/template.php';
?>