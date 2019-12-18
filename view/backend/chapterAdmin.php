<?php $title = ('Chapitres Admin'); ?>

<?php ob_start(); ?>
<!-- listes des chapitres -->
<div class="card mt-5">
  <div class="card-header">
    <h3>Les chapitres</h3>
  </div>
  <div class="card-body">
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
      <?php while ($data = $display->fetch()){?>
      <tr>
        <td><?= $data['titre']; ?></td>
        <td><?= $data['pseudo']; ?></td>
        <td><?= $data['la_date']; ?></td>
        <td><a href="/pro4/modifier-chapitre/<?= $data['id']; ?>"><input class="btn btn-success" type="button" value="Modifier"></a></td>
        <td><a href="/pro4/effacer-chapitre/<?= $data['id']; ?>"><input class="btn btn-danger" type="submit" value="Suprimer"></a></td>
      </tr>
      <?php }?>
    </tbody>
    </table>
  </div>
</div>
<?php $content = ob_get_clean();
require 'view/backend/templateBack.php';
?>
