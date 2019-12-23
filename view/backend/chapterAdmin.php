<?php $title = ('Chapitres'); ?>

<?php ob_start(); ?>
<!-- listes des chapitres -->
<div class="container">
  <div class="card mt-5 text-center">
    <div class="card-header">
      <h3>Les chapitres</h3>
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
            <th class="align-middle" scope="col">Nom</th>
            <th class="align-middle" scope="col">Auteur</th>
            <th class="align-middle" scope="col">Date création</th>
            <th class="align-middle" scope="col">Modifier</th>
            <th class="align-middle" scope="col">Supprimer</th>
          </tr>
        </thead>
      <tbody>
        <?php while ($data = $display->fetch()){?>
        <tr>
          <td class="align-middle"><?= $data['titre']; ?></td>
          <td class="align-middle"><?= $data['pseudo']; ?></td>
          <td class="align-middle"><?= $data['la_date']; ?></td>
          <td class="align-middle"><a href="/pro4/modifier-chapitre/<?= $data['id']; ?>"><input class="btn btn-success" type="button" value="Modifier"></a></td>
          <td class="align-middle"><a href="/pro4/effacer-chapitre/<?= $data['id']; ?>" class="btn btnSup btn-danger">Supprimer</a></td>
        </tr>
        <?php }?>
      </tbody>
      </table>
    </div>
  </div>
</div>
<?php $content = ob_get_clean();
require 'view/backend/templateBack.php';
?>
