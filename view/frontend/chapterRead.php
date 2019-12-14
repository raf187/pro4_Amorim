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

<a href="#formCom"><button id="btnAjout" type="button" class="col-md-4 offset-md-4 btn btn-success">Ajouter un comentaire</button></a>

    <form id="formCom" class="d-none formCom form-horizontal" method="" action="">
    <fieldset>
    <legend>Ajouter un comentaire</legend>

    <div class="form-group">
        <label class="col-md-4control-label" for="pseudo">Pseudo :</label>  
            <div class="col-md-6 offset-md-3">
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
        <a href="#btnAjout"><button id="envoyer" name="envoyer" class="btn btn-info">Envoyer</button></a>
        </div>
    </div>

    </fieldset>
    </form>

<h2 class="coms">Les comentaires :</h2>
<div class="comentaire">
    <h5><?= $pseudo?> le <?= $la_date?></h5>
    <p>Cuncta plebeiis nec honoratis vexabat disseminata haec nullum onerosus post disseminata licentia primatibus iam vexabat.</p>
    <button type="button" class="col-md-2 offset-md-9 btn btn-danger">Signaler</button>

</div>

<script src="../public/js/form.js"></script>

<?php $content = ob_get_clean();
require 'template.php';
?>