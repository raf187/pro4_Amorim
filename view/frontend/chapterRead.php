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
$sql->closeCursor();
$content = ob_get_clean();
require 'template.php';
?>