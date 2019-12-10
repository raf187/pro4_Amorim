<?php $title = ('Les chapitres'); ?>
<?php ob_start(); ?>

<h1 class="titleH1">Les chapitres</h1>
<?php
while ($data = $sql->fetch())
{
?>
<div class="chapter">
    <h3>
    <?= $data['titre']; ?> <br>
    </h3><br>
    <p class="contenu">
    <?= $data['contenu'] . '...'; ?>
    </p>
    <br>
    <button><a href="/pro4/chapterRead/<?= $data['id'] ?>">Lecture</a></button><br>
    <p class="signature">
    <?= 'Par ' . $data['pseudo'] . ' le ' . $data['la_date']; ?>
    </p>
</div><br>
<?php
}
$sql->closeCursor();
$content = ob_get_clean();
require 'template.php';
?>