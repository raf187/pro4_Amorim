<?php $title = ('Billet simple pour l\'Alaska - Chapitre'); ?>
<?php ob_start(); ?>

<h1 class="chapterH1">Les chapitres</h1>
<?php 
while ($data = $req->fetch())
{
?>
<div class="chapter">
    <h3>
    <?php echo htmlspecialchars($data['titre']); ?> <br>
    </h3><br>
    <p class="contenu">
    <?php echo htmlspecialchars($data['contenu']); ?>
    </p>
    <br>
    <p class="signature">
    <?php echo htmlspecialchars('Par ' . $data['pseudo'] . ' le ' . $data['date']); ?>
    </p>
</div><br>
<?php
}
$req->closeCursor();
?>
<?php $content = ob_get_clean(); ?>
<?php require 'template.php'; ?>