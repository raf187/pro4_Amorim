<?php $title = ('Les Admin'); ?>

<?php ob_start(); ?>
<!-- button pour ajouter admin -->
<button id="ajoutAdmin" type="button" name="ajoutAdmin" class="btn btn-success col-md-4">Ajouter un nouveu administrateur</button>

<!-- formulaire pour poster info nouveau admin -->
<form id="formAdmin" method="POST" class="d-none form-horizontal">
    <div class="card mt-5">
        <div class="card-header">
            <h3>Ajouter un nouveu administrateur</h3>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <tbody>
                    <tr>
                        <th scope="col">
                            <input id="pseudo" name="pseudo" type="text" placeholder="Pseudo" class="form-control input-md" required="">
                        </th>
                        <th scope="col">
                            <input id="mdp" name="mdp" type="text" placeholder="Mot de passe" class="form-control input-md" required="">
                        </th>
                        <th scope="col">
                            <input id="email" name="email" type="email" placeholder="Email" class="form-control input-md" required="">
                        </th>
                        <th scope="col">
                            <button id="btnAddAdmin" type="submit" name="btnAddAdmin" class="btn btn-success">Ajouter</button>
                        </th>
                        <th scope="col">
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
        <h3>Les Admins</h3>
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Nom</th>
                    <th scope="col">Mot de passe</th>
                    <th scope="col">email</th>
                    <th scope="col">Modifier</th>
                    <th scope="col">Suprimer</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($data = $display->fetch()){ ?>
                    <tr>
                        <td><?= $data['pseudo']; ?></td>
                        <td><?= $data['mot_de_passe']; ?></td>
                        <td><?= $data['email']; ?></td>
                        <td><a href="/pro4/modifier-admin/<?= $data['id']; ?>" class="btn btn-success">Modifier</a></td>
                        <td><a href="/pro4/effacer-admin/<?= $data['id']; ?>" class="btn btn-danger">Suprimer</a></td>
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