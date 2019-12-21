<?php $title = ('Les chapitres'); ?>
<?php ob_start(); ?>
<div class="contaierIndexChapter">
    <h2 class="indexTitre text-primary text-center">Les chapitres</h2>
    
    <?php
    while ($data = $index->fetch())
    {
    ?>
    <div class="indexChapter card">
        <div class="card-header">
            <h3><?= $data['titre']; ?></h3>
        </div>
        <div class="card-body">
            <blockquote class="blockquote mb-0">
            <p><?= $data['contenu'] . '. '; ?><br><cite class="text-primary" title="Source Title"><a href="/pro4/chapitre-numero/<?= $data['id'] ?>"">Lire la suite...</cite></a></p>
            <footer class="blockquote-footer"><?= 'Par ' . $data['pseudo']?><cite title="Source Title"><?= ' le ' . $data['la_date']; ?></cite></footer>
            </blockquote>
        </div>
    </div>
</div>
<?php
}
$index->closeCursor();
$content = ob_get_clean();
require 'template.php';
?>