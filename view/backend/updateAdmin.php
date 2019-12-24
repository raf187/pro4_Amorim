<?php $title = ('Modifier administrateur'); ?>

<?php ob_start(); ?>
<div class="container">
    <div class="card my-5 text-center">
        <form id="formAmin" method="POST" class="form-horizontal">
            <div class="card-header">
                <h3>Modifier l'administrateur</h3>
            </div>
            <div class="card-body">
                    <tbody>
                        <?php while ($data = $display->fetch()) { ?>
                            <div class="card-body offset-md-4 col-md-4">
                                <input id="infoAdmin pseudo" name="pseudo" type="text" placeholder="Pseudo" value="<?= $data['pseudo']; ?>" class="mt-3 form-control input-md" required="">
                                <input id="infoAdmin mdp" name="mdp" type="text" placeholder="Mot de passe crypté" class="mt-3 form-control input-md">
                                <input id="infoAdmin email" name="email" type="email" placeholder="Email" value="<?= $data['email']; ?>" class="mt-3 form-control input-md" required="">
                                <button id="modAdmin" name="modAdmin" type="submit" class="btn mt-3 btn-success">Modifier</button>
                                <a href="/pro4/gestion-admin" class="btn mt-3 btn-danger">Annuler</a>
                            </div>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </form>
    </div>
</div>
<?php $content = ob_get_clean();
require 'view/backend/templateBack.php';
?>