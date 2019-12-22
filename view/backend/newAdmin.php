<?php $title = ('Nouveau admin'); ?>
<?php ob_start(); ?>
<!-- formulaire pour poster info nouveau admin -->
<form id="formAdmin" method="POST" class="form-horizontal">
    <div class="card mt-5">
        <div class="card-header">
            <h3>Ajouter un nouvel administrateur</h3>
        </div>
        <div class="card-body">
            <table class="table">
                <tbody>
                    <tr>
                        <th class="align-middle"  scope="col">
                            <input id="infoAdmin pseudo" name="pseudo" type="text" placeholder="Pseudo" class="form-control input-md" required="">
                        </th>
                        <th class="align-middle"  scope="col">
                            <input id="infoAdmin mdp" name="mdp" type="text" placeholder="Mot de passe" class="form-control input-md" required="">
                        </th>
                        <th class="align-middle"  scope="col">
                            <input id="infoAdmin email" name="email" type="email" placeholder="Email" class="form-control input-md" required="">
                        </th>
                        <th class="align-middle"  scope="col">
                            <button id="btnAddAdmin" type="submit" name="btnAddAdmin" class="btn btn-success">Ajouter</button>
                        </th>
                        <th class="align-middle"  scope="col">
                            <a  href="/pro4/gestion-admin" name="btnAnuller" class="btn btn-danger">Annuler</a>
                        </th>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</form>
<?php $content = ob_get_clean(); ?>
<?php require 'templateBack.php'; ?>