<?php $title = ('Chapitres Admin'); ?>


<?php ob_start(); ?>
<h1 class="titleH1">Les chapitres</h1>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Nom</th>
      <th scope="col">Auteur</th>
      <th scope="col">Date creation</th>
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
        <td><?= $data['titre']; ?></td>
        <td><?= $data['pseudo']; ?></td>
        <td><?= $data['la_date']; ?></td>
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
