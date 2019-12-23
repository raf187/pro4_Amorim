<?php $title = ('Nouveau administrateur'); ?>
<?php ob_start(); ?>
<div class="container">
    <!-- formulaire pour poster info nouveau admin -->
    <form id="formAdmin" method="POST" class="form-horizontal">
        <div class="card mt-5 text-center">
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
</div>
<?php $content = ob_get_clean(); ?>
<?php require 'templateBack.php'; ?>