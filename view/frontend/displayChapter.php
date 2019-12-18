<?php $title = ('Chapitre' . $id); ?>
<?php ob_start(); ?>

<?php
if(isset($id)) {
    if($display->rowCount() == 1) {
        $data = $display->fetch();
    } else {
        die('Cet article n\'existe pas !');
    }
} else{
    die('Erreur');
}
?>

<div class="chapter">
    <h3>
    <?= $data['titre']; ?> <br>
    </h3><br>
    <p class="contenu">
    <?= $data['contenu']; ?>
    <br>
    <br>
    <p class="signature">
    <?= 'Par ' . $data['pseudo'] . ' le ' . $data['la_date']; ?>
    </p>
</div><br>
<?php
$display->closeCursor();?>

<button id="btnAjout" type="button" class="col-md-4 offset-md-4 btn btn-success">Ajouter un comentaire</button>
    <form id="formCom" class="d-none formCom form-horizontal" method="POST" action="">
    <fieldset>
    <legend>Ajouter un comentaire</legend>

    <div class=" row form-group">
        <label class="offset-md-3 col-md-1 control-label" for="pseudo">Pseudo :</label>  
        <div class="col-md-4">
            <input id="pseudo" name="pseudo" type="text" class="form-control input-md" required="">
        </div>
    </div>

    <div class="form-group ">
        <label class="col-md-4control-label" for="comentaire">Comentaire :</label>
        <div class="col-md-8 offset-md-2">                     
            <textarea class="form-control" id="comentaire" name="comentaire" required=""></textarea>
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-4 offset-md-4">
        <!-- <a href="#btnAjout">--><input id="envoyer" type="submit" name="envoyer" class="btn btn-info" value="Envoyer">
        </div>
    </div>

    </fieldset>
    </form>

<h2 class="coms">Les comentaires :</h2>
<?php
while ($data = $coms->fetch()){ ?>
<div class="comentaire">
    <p><?= $data['contenu'] ?></p>
    <div class="row">
        <p><?= $data['pseudo'] ?> le <?= $data['la_date'] ?></p>
        <a href="/pro4/signaler/<?= $data['id']; ?>" class="btn btn-danger">Signaler <i class="fas fa-bell"></i></a>
    </div>
</div>
<?php }
$coms->closeCursor();?>


<?php $content = ob_get_clean();
require 'template.php';
?>