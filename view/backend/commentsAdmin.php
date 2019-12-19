<?php $title = ('Comentaires Admin'); ?>

<?php ob_start(); ?>

<div class="card mt-5">
    <div class="card-header">
        <h3>Comentaires signales</h3>
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="align-middle"  scope="col">Id chapitre</th>
                    <th class="align-middle"  scope="col">Auteur</th>
                    <th class="align-middle"  scope="col">Date</th>
                    <th class="align-middle"  scope="col">Contenu</th>
                    <th class="align-middle"  scope="col">Modifier</th>
                    <th class="align-middle"  scope="col">Suprimer</th>
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
                    <td class="align-middle" ><a href="/pro4/supprimer-com/<?= $data['id']; ?>" id="btnSup" class="btn btn-danger">Suprimer</a></td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
</div>

<?php $content = ob_get_clean();
require 'templateBack.php';
?>