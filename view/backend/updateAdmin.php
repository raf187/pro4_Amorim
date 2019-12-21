<?php $title = ('Modifier Admin'); ?>

<?php ob_start(); ?>
<div class="card mt-5">
    <form id="formAmin" method="POST" class="form-horizontal">
        <div class="card-header">
            <h3>Modifier l'administrateur</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th class="align-middle" scope="col">Nom</th>
                        <th class="align-middle"  scope="col">Mot de passe</th>
                        <th class="align-middle"  scope="col">email</th>
                        <th class="align-middle"  scope="col">Modifier</th>
                        <th class="align-middle"  scope="col">Annuler</th>
                    </tr>
                </thead>
        </div>
        <div class="card-body">
                <tbody>
                    <?php while ($data = $display->fetch()) { ?>
                        <tr>
                            <td class="align-middle" ><input id="pseudo" name="pseudo" type="text" value="<?= $data['pseudo']; ?>" class="form-control input-md" required=""></td>
                            <td class="align-middle" ><input id="mdp" name="mdp" type="text" placeholder="Mot de passe crypté" class="form-control input-md"></td>
                            <td class="align-middle" ><input id="email" name="email" type="email" value="<?= $data['email']; ?>" class="form-control input-md" required=""></td>
                            <td class="align-middle" ><button id="modAdmin" name="modAdmin" type="submit" class="btn btn-success">Modifier</button></td>
                            <td class="align-middle" ><a href="/pro4/gestion-admin" class="btn btn-danger">Annuler</a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </form>
</div>

<?php $content = ob_get_clean();
require 'view/backend/templateBack.php';
?>