<?php $title = ('Chapitre '. $id); ?>
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
<!-- formulaire pour modifier un chapitre existant -->
<div class="container">
    <div class="card mt-5">
        <div class="card-header text-center">
            <h3>Modifier <?= $data['titre'] ?></h3>
        </div>
        <div class="card-body">
            <form class="form-horizontal"  method="POST">
                <fieldset>
                    <div class="row form-group col-md-12">
                            <label class="offset-md-1 col-md-1 control-label" for="titre">Titre</label>  
                            <div class="col-md-4">
                                <input value="<?= $data['titre'] ?>"  id="titre" name="titre" type="text" class="form-control input-md" required="">  
                            </div>
                            <label class="col-md-1 control-label" for="pseudo">Auteur</label>  
                            <div class="col-md-4">
                                <input value="<?= $data['pseudo'] ?>" id="pseudo" name="pseudo" type="text" class="form-control input-md" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10 offset-md-1">                     
                                <textarea class="form-control textchapter" id="contenu" name="contenu" rows="18">
                                    <?= $data['contenu'] ?>
                                </textarea>
                            </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-3 offset-md-9">
                            <a href="/forteroche/chapitres-admin" id="button1id" name="button1id" class="btn btn-danger">Annuler</a>
                            <button id="btnModChap" name="btnModChap" class="btn btn-success">Modifier</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
<?php $content = ob_get_clean();
require 'view/backend/templateBack.php';
?>
