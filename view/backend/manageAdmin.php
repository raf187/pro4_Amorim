<?php $title = ('Administrateurs'); ?>

<?php ob_start(); ?>
<div class="container text-center">
    <!-- button pour ajouter admin -->
    <a href="/pro4/nouveau-admin" class="btn btn-info mt-5 col-md-4">Ajouter un nouvel administrateur</a>
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
</div>
<?php $content = ob_get_clean();
require 'view/backend/templateBack.php';
?>