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
<div class="jumbotron">
        <h2 class="display-3">
            <?= $data['titre']; ?>
        </h2>
        <p class="lead">
            <?= $data['contenu']; ?>
        </p>
        <p>
            <?= 'Par ' . $data['pseudo'] . ' le ' . $data['la_date']; ?>
        </p>
        <hr class="my-4">
        <button id="btnAjout" type="button" class="col-md-4 offset-md-4 btn btn-success">Ajouter un comentaire</button>
        
        <form id="formCom" class="d-none formCom form-horizontal" method="POST" action="">
            <legend>Ajouter un comentaire</legend>
            <div class="row col-md-10 offset-md-1 form-group">
                <label class="justify-content-center col-md-2 offset-md-3 control-label" for="pseudo">Pseudo :</label>  
                <div class="col-md-4">
                    <input id="pseudo" name="pseudo" type="text" class="form-control input-md" required="">
                </div>
            </div>
            <div class="form-group ">
                <label class="col-md-4 offset-md-5 control-label" for="comentaire">Comentaire :</label>
                <div class="col-md-8 offset-md-2">                     
                    <textarea class="form-control" id="comentaire" name="comentaire" rows="4" required=""></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-4 offset-md-5">
                    <input id="envoyer" type="submit" name="envoyer" class="btn btn-info" value="Envoyer">
                </div>
            </div>
        </form>
</div> 
<?php
$display->closeCursor();?>

<h3 class="text-primary text-center">Les comentaires :</h3>
<?php
while ($data = $coms->fetch()){ ?>
<div class="comentCard card border-dark">
    <div class="card-header">Par <?= $data['pseudo'] ?> le <?= $data['la_date'] ?></div>
    <div class="card-body text-dark">
        <p class="card-text"><?= $data['contenu'] ?></p>
    </div>
    <div class="card-footer">
        <small class="offset-md-9 text-muted">Signaler ce commentaire <a href="/pro4/signaler/<?= $data['id']; ?>"><i class="fas fa-bell"></i></a></small>
    </div>
</div>

<?php }
$coms->closeCursor();?>


<?php $content = ob_get_clean();
require 'template.php';
?>