<?php $title = ('Comentaires'); ?>

<?php ob_start(); ?>
<div class="container">
    <div class="card mt-5 text-center">
        <div class="card-header">
            <h3>Commentaires signalés</h3>
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
                        <th class="align-middle"  scope="col">Id chapitre</th>
                        <th class="align-middle"  scope="col">Auteur</th>
                        <th class="align-middle"  scope="col">Date</th>
                        <th class="align-middle"  scope="col">Contenu</th>
                        <th class="align-middle"  scope="col">Modifier</th>
                        <th class="align-middle"  scope="col">Supprimer</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($data = $display->fetch()){ ?>
                    <tr>
                        <td class="align-middle" ><?= $data['id_article']; ?></td>
                        <td class="align-middle" ><?= $data['pseudo']; ?></td>
                        <td class="align-middle" ><?= $data['la_date']; ?></td>
                        <td class="align-middle" ><?= $data['contenu']; ?></td>
                        <td class="align-middle" ><a href="/pro4/valider-com/<?= $data['id']; ?>" class="btn btn-success">Valider</a></td>
                        <td class="align-middle" ><a href="/pro4/supprimer-com/<?= $data['id']; ?>" class="btn btnSup btn-danger">Supprimer</a></td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $content = ob_get_clean();
require 'templateBack.php';
?>