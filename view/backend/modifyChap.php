<?php $title = ('Chapitre '. $id); ?>
<?php ob_start(); ?>

<?php
if(isset($id)) {
    if($sql->rowCount() == 1) {
        $data = $sql->fetch();
    } else {
        die('Cet article n\'existe pas !');
    }
} else{
    die('Erreur');
}
?>
<!-- formulaire pour modifier un chapitre existent -->
<div class="card mt-5">
    <div class="card-header">
        <h3>Modifer <?= $data['titre'] ?></h3>
    </div>
    <div class="card-body">
        <form class="form-horizontal"  method="POST">
            <fieldset>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="titre">Titre</label>  
                        <div class="col-md-4 offset-md-4">
                            <input id="titre" name="titre" type="text" class="form-control input-md" value="<?= $data['titre'] ?>" required="">  
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="pseudo">Auteur</label>  
                        <div class="col-md-4 offset-md-4">
                            <input id="pseudo" name="pseudo" type="text" class="form-control input-md" value="<?= $data['pseudo'] ?>" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-10 offset-md-1">                     
                            <textarea class="form-control textchapter" id="contenu" name="contenu" rows="20">
                                <?= $data['contenu'] ?>
                            </textarea>
                        </div>
                </div>
                <div class="form-group">
                    <div class="col-md-4 offset-md-8">
                        <a href="/pro4/chapitres-admin" id="button1id" name="button1id" class="btn btn-danger">Annuler</a>
                        <button id="btnModChap" name="btnModChap" class="btn btn-success">Modifier</button>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</div>



<?php $content = ob_get_clean();
require 'view/backend/templateBack.php';
?>
