<?php $title = ('Les Admin'); ?>


<?php ob_start(); ?>
<h1 class="titleH1">Les Admins</h1>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nom</th>
            <th scope="col">Mot de passe</th>
            <th scope="col">email</th>
            <th scope="col">Modifier</th>
            <th scope="col">Suprimer</th>
        </tr>
    </thead>
    <tbody>
<?php
while ($data = $sql->fetch())
{
?>
        <tr>
            <td><?= $data['id']; ?></td>
            <td><?= $data['pseudo']; ?></td>
            <td><?= $data['mot_de_passe']; ?></td>
            <td><?= $data['email']; ?></td>
            <td><input class="btn btn-success" type="button" value="Modifier"></td>
            <td><input class="btn btn-danger" type="button" value="Suprimer"></td>
        </tr>

<?php
}
?>
    </tbody>
</table>
<?php $content = ob_get_clean();
require 'view/backend/templateBack.php';
?>