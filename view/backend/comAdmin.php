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
                    <th scope="col">Chapitre</th>
                    <th scope="col">Auteur</th>
                    <th scope="col">Date</th>
                    <th scope="col">Contenu</th>
                    <th scope="col">Modifier</th>
                    <th scope="col">Suprimer</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($data = $sql->fetch()){ ?>
                <tr>
                    <td>Chapitre <?= $data['id_article']; ?></td>
                    <td><?= $data['pseudo']; ?></td>
                    <td><?= $data['la_date']; ?></td>
                    <td><?= $data['contenu']; ?></td>
                    <td><input class="btn btn-success" type="button" value="Valider"></td>
                    <td><input class="btn btn-danger" type="button" value="Suprimer"></td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
</div>

<?php $content = ob_get_clean();
require 'templateBack.php';
?>