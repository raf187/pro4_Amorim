<?php $title = ('Les Admin'); ?>

<?php ob_start(); ?>
<!-- button pour ajouter admin -->
<button id="ajoutAdmin" type="button" name="ajoutAdmin" class="btn btn-info col-md-4">Ajouter un nouvel administrateur</button>

<!-- formulaire pour poster info nouveau admin -->
<form id="formAdmin" method="POST" class="d-none form-horizontal">
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
                            <button id="btnAnnuler" name="btnAnnuler" class="btn btn-danger">Annuler</button>
                        </th>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</form>
<!-- liste des admins autorises -->
<div class="card mt-5">
    <div class="card-header">
        <h3>Les Administrateurs</h3>
    </div>
    <div class="card-body">
    <?php 
    if (isset($_SESSION['message'])) { ?>
        <div class="text-center alert alert-<?=$_SESSION['msgtype']?>">
    <?php
    echo $_SESSION['message'];
    unset($_SESSION['message']);
    ?>
    </div>
    <?php } ?>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="align-middle"  scope="col">Id</th>
                    <th class="align-middle"  scope="col">Nom</th>
                    <th class="align-middle"  scope="col">email</th>
                    <th class="align-middle"  scope="col">Modifier</th>
                    <th class="align-middle"  scope="col">Supprimer</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($data = $display->fetch()){ ?>
                    <tr>
                        <td class="align-middle" ><?= $data['id']; ?></td>
                        <td class="align-middle" ><?= $data['pseudo']; ?></td>
                        <td class="align-middle" ><?= $data['email']; ?></td>
                        <td class="align-middle" ><a href="/pro4/modifier-admin/<?= $data['id']; ?>" class="btn btn-success">Modifier</a></td>
                        <td class="align-middle" ><a href="/pro4/effacer-admin/<?= $data['id']; ?>" class="btnSup btn btn-danger">Supprimer</a></td>
                    </tr>
                    <?php } 
                    $display->closeCursor();?>
            </tbody>
        </table>
    </div>
</div>
<?php $content = ob_get_clean();
require 'view/backend/templateBack.php';
?>