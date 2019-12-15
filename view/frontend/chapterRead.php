<?php $title = ('Chapitre' . $id); ?>
<?php ob_start(); ?>

<?php
if(isset($id)) {
    if($sql->rowCount() == 1) {
        $data = $sql->fetch();
        $titre = $data['titre'];
        $contenu = $data['contenu'];
        $la_date = $data['la_date'];
        $pseudo = $data['pseudo'];
    } else {
        die('Cet article n\'existe pas !');
    }
} else{
    die('Erreur');
}
?>

<div class="chapter">
    <h3>
    <?= $titre; ?> <br>
    </h3><br>
    <p class="contenu">
    <?= $contenu; ?>
    <br>
    <br>
    <p class="signature">
    <?= 'Par ' . $pseudo . ' le ' . $la_date; ?>
    </p>
</div><br>
<?php
$sql->closeCursor();?>

<!-- <a href="#formCom">--><button id="btnAjout" type="button" class="col-md-4 offset-md-4 btn btn-success">Ajouter un comentaire</button>
<?php if(!empty($message)) { ?>
    <p><?= $message ?></p>
<?php }?>

    <form id="formCom" class="d-none formCom form-horizontal" method="POST" action="">
    <fieldset>
    <legend>Ajouter un comentaire</legend>

    <div class=" row form-group">
        <label class="offset-md-3 col-md-1 control-label" for="pseudo">Pseudo :</label>  
        <div class="col-md-4">
            <input id="pseudo" name="pseudo" type="text" placeholder="" class="form-control input-md" required="">
        </div>
    </div>

    <div class="form-group ">
        <label class="col-md-4control-label" for="comentaire">Comentaire :</label>
        <div class="col-md-8 offset-md-2">                     
            <textarea class="form-control" id="comentaire" name="comentaire" required=""></textarea>
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-4 control-label" for="envoyer"></label>
        <div class="col-md-4 offset-md-4">
        <!-- <a href="#btnAjout">--><input id="envoyer" type="submit" name="envoyer" class="btn btn-info" value="Envoyer">
        </div>
    </div>

    </fieldset>
    </form>

<h2 class="coms">Les comentaires :</h2>
<?php
while ($data = $coms->fetch())
{
?>
<div class="comentaire">
    <p><?= $data['contenu'] ?></p>
    <div class="row signComs">
        <h6 class="col-md-4"><?= $data['pseudo'] ?> le <?= $data['la_date'] ?></h6>
        <button type="button" class="col-md-2 offset-md-5 btn btn-danger">Signaler</button>
    </div>
</div>
<?php
}
$coms->closeCursor();?>
<script src="../public/js/form.js"></script>

<?php $content = ob_get_clean();
require 'template.php';
?>