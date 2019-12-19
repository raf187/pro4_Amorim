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
          <th class="align-middle" scope="col">Nom</th>
          <th class="align-middle" scope="col">Auteur</th>
          <th class="align-middle" scope="col">Date creation</th>
          <th class="align-middle" scope="col">Modifier</th>
          <th class="align-middle" scope="col">Suprimer</th>
        </tr>
      </thead>
    <tbody>
      <?php while ($data = $display->fetch()){?>
      <tr>
        <td class="align-middle"><?= $data['titre']; ?></td>
        <td class="align-middle"><?= $data['pseudo']; ?></td>
        <td class="align-middle"><?= $data['la_date']; ?></td>
        <td class="align-middle"><a href="/pro4/modifier-chapitre/<?= $data['id']; ?>"><input class="btn btn-success" type="button" value="Modifier"></a></td>
        <td class="align-middle"><a href="/pro4/effacer-chapitre/<?= $data['id']; ?>" id="btnSup" class="btn btn-danger">Suprimer</a></td>
      </tr>
      <?php }?>
    </tbody>
    </table>
  </div>
</div>
<?php $content = ob_get_clean();
require 'view/backend/templateBack.php';
?>
