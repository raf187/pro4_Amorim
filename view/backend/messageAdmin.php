<?php $title = ('Messages'); ?>

<?php ob_start(); ?>
<div class="card mt-5">
    <div class="card-header">
        <h3>Messages</h3>
    </div>
    <div class="card-body">
        <table class="table table-striped">
        <thead>
            <tr>
            <th class="align-middle" scope="col">Auteur</th>
            <th  class="align-middle" scope="col">Message</th>
            <th  class="align-middle" scope="col">Date creation</th>
            </tr>
        </thead>
        <tbody>
        <?php while ($data = $display->fetch()){?>
        <tr >
            <td class="align-middle"><?= $data['nom']; ?><br><?= $data['email']; ?></td>
            <td class="align-middle"><strong>Objet : <?= $data['objet']; ?></strong><br><?= $data['contenu']; ?></td>
            <td class="align-middle"><?= $data['la_date']; ?><br><a href="/pro4/effacer-message/<?= $data['id']; ?>" id="btnSup" class="btn btn-danger">Suprimer</a></td>
        </tr>
        <?php }?>
        </tbody>
        </table>
    </div>
</div>
<?php $content = ob_get_clean();
require 'view/backend/templateBack.php';
?>
