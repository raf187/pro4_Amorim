<?php $title = ('Chapitre ' . $id); ?>
<?php ob_start();
if(isset($id)) {
    if($display->rowCount() == 1) {
        $data = $display->fetch();
    } else {
        header('location: /pro4/404-article');
    }
} else{
    header('location: /pro4/404-article');
}
?>

<div class="container contShowChap">
    <?php 
        if (isset($_SESSION['message'])) { ?>
            <div class="col-md-8 offset-md-2 text-center alert alert-<?=$_SESSION['msgtype']?>">
        <?php
            echo $_SESSION['message'];
            unset($_SESSION['message']);
        ?>
        </div>
    <?php } ?>
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
        <button id="btnAjout" type="button" class="col-md-4 offset-md-4 btn btn-success">Ajouter un commentaire</button>
            <form id="formCom" class="d-none formCom col-md-6 offset-md-3 form-horizontal" method="POST" action="">
                <legend>Ajouter un commentaire</legend>
                <div class="form-group">
                    <label class=" control-label" for="pseudo">Pseudo</label>  
                    <div class="">
                        <input id="pseudo" name="pseudo" type="text" class="form-control input-md" required="">
                    </div>
                </div>
                <div class="form-group ">
                    <label class=" control-label" for="comentaire">Commentaire</label>
                    <div class="">                     
                        <textarea class="form-control" id="comentaire" name="comentaire" rows="4" required=""></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-4 offset-md-4">
                        <input id="envoyer" type="submit" name="envoyer" class="btn btn-info" value="Envoyer">
                    </div>
                </div>
            </form>
    </div> 
    <?php
    $display->closeCursor();?>

    <h3 class="text-primary text-center">Les commentaires :</h3>
    <?php
    while ($data = $coms->fetch()){ ?>
    <div class="card mb-md-4 border-dark col-md-10 offset-md-1">
        <div class="card-header">Par <?= $data['pseudo'] ?> le <?= $data['la_date'] ?></div>
        <div class="card-body text-dark">
            <p class="card-text"><?= $data['contenu'] ?></p>
        </div>
        <div class="card-footer">
            <small class="offset-md-9 text-muted">Signaler ce commentaire <a href="/pro4/signaler/<?= $data['id']; ?>"><i class="fas fa-bell"></i></a></small>
        </div>
    </div>

<?php 
    } ?>
</div>
<?php 
$coms->closeCursor();
$content = ob_get_clean();
require 'template.php';
?>