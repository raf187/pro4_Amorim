<?php $title = ('Modifier Admin'); ?>

<?php ob_start(); ?>
<div class="card mt-5">
    <form id="formAmin" method="POST" class="form-horizontal">
        <div class="card-header">
            <h3>Modifier l'administrateur</h3>
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
        </div>
        <div class="card-body">
                <tbody>
                    <?php while ($data = $sql->fetch()){ ?>
                        <tr>
                            <td><input id="pseudo" name="pseudo" type="text" value="<?= $data['pseudo']; ?>" class="form-control input-md" required=""></td>
                            <td><input id="mdp" name="mdp" type="text" value="<?= $data['mot_de_passe']; ?>" class="form-control input-md" required=""></td>
                            <td><input id="email" name="email" type="email" value="<?= $data['email']; ?>" class="form-control input-md" required=""></td>
                            <td><button id="modAdmin" name="modAdmin" type="submit" class="btn btn-success">Modifier</button></td>
                            <td><button id="btnAnnuler" name="btnAnnuler" class="btn btn-danger">Annuler</button></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </form>
</div>




<!-- 
<form id="formAmin" method="POST" class="form-horizontal">
    <div class="card mt-5">
        <div class="card-header">
            <h3>Modifier l'administrateur</h3>
        </div>
        <div class="card-body">
        <table class="table table-striped">
            <tbody>
<?php
while ($data = $sql->fetch())
{
?>
                <tr>
                    <th scope="col">
                        <input id="pseudo" name="pseudo" type="text" value="<?= $data['pseudo']; ?>" class="form-control input-md" required="">
                    </th>
                    <th scope="col">
                        <input id="mdp" name="mdp" type="text" value="<?= $data['mot_de_passe']; ?>" class="form-control input-md" required="">
                    </th>
                    <th scope="col">
                        <input id="email" name="email" type="email" value="<?= $data['email']; ?>" class="form-control input-md" required="">
                    </th>
                    <th scope="col">
                        <button id="modAdmin" name="modAdmin" type="submit" class="btn btn-success">Modifier</button>
                    </th>
                    <th scope="col">
                        <button id="btnAnnuler" name="btnAnnuler" class="btn btn-danger">Annuler</button>
                    </th>
                </tr>
<?php
}
?>
            </tbody>
        </table>
        </div>
    </div>
</form> -->

<?php $content = ob_get_clean();
require 'view/backend/templateBack.php';
?>