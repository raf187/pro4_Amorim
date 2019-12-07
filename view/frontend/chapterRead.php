<?php $title = ('Billet simple pour l\'Alaska - Chapitre');

if (isset($id) AND !empty($id)) {
    $getId = htmlspecialchars($id);
    echo ($getId);

    $data = $reqId->execute(([$getId]));
    if ($data->rowCount() == 1) {
        $data = $data->fetch();
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
<?php ob_start(); ?>
<?php while ($a = $sql->fetch()) { ?>

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
}
$sql->closeCursor();
?>
<?php $content = ob_get_clean(); ?>
<?php require 'template.php'; ?>