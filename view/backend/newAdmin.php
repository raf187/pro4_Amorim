<?php $title = ('Nouveau administrateur'); ?>
<?php ob_start(); ?>
    <!-- formulaire pour poster info nouveau admin -->
    <form id="formAdmin" method="POST" class="form-horizontal">
        <div class="card my-5 text-center">
            <div class="card-header">
                <h3>Ajouter un nouvel administrateur</h3>
            </div>
            <div class="card-body offset-md-4 col-md-4">
                <input id="infoAdmin pseudo" name="pseudo" type="text" placeholder="Pseudo" class="mt-3 form-control input-md" required="">
                <input id="infoAdmin mdp" name="mdp" type="text" placeholder="Mot de passe" class="mt-3 form-control input-md" required="">
                <input id="infoAdmin email" name="email" type="email" placeholder="Email" class="mt-3 form-control input-md" required="">
                <button id="btnAddAdmin" type="submit" name="btnAddAdmin" class="mt-3 btn btn-success">Ajouter</button>
                <a  href="/pro4/gestion-admin" name="btnAnuller" class="mt-3 btn btn-danger">Annuler</a>
            </div>
        </div>
    </form>
<?php $content = ob_get_clean(); ?>
<?php require 'templateBack.php'; ?>