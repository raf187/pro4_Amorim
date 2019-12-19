<?php $title = ('Nouveu Chapitre'); ?>
<?php ob_start(); ?>
<div class="card mt-5">
    <div class="card-header">
        <h3>Nouveau Chapitre</h3>
    </div>
    <div class="card-body">
        <form class="form-horizontal"  method="POST" action="">
            <fieldset>
                <div class="row form-group col-md-12">
                    <label class="offset-md-1 col-md-1 control-label" for="titre">Titre</label>  
                    <div class="col-md-4">
                        <input id="titre" name="titre" type="text" class="form-control input-md" required="">  
                    </div>
                    <label class="col-md-1 control-label" for="pseudo">Auteur</label>  
                    <div class="col-md-4">
                        <input id="pseudo" name="pseudo" type="text" class="form-control input-md" required="">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-10 offset-md-1">                     
                        <textarea class="textchapter form-control" id="contenu" name="contenu" rows="18"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-4 offset-md-8">
                        <a href="/pro4/admin" id="btnAnul" name="btnAnul" class="btn btn-danger">Annuler</a>
                        <input type="submit" id="btnPub" name="btnPub" class="btn btn-primary" value="Publier">
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</div>

<?php $content = ob_get_clean();
require 'view/backend/templateBack.php';
?>
