<?php $title = ('Les chapitres'); ?>
<?php ob_start(); ?>
<div class="contIndex">
    <h2 class="text-primary text-center">Les chapitres</h2>
    <?php
        while ($data = $index->fetch())
        {
        ?>
    <div class="container">
        <div class="card my-md-5">
            <div class="card-header">
                <h3><?= $data['titre']; ?></h3>
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                <p><?= $data['contenu'] . '. '; ?><br><cite class="text-primary" title="Source Title"><a href="/forteroche/chapitre-numero/<?= $data['id'] ?>"">Lire la suite...</cite></a></p>
                <footer class="blockquote-footer"><?= 'Par ' . $data['pseudo']?><cite title="Source Title"><?= ' le ' . $data['la_date']; ?></cite></footer>
                </blockquote>
            </div>
        </div>
    </div>

<?php
        }?>
</div>
<?php
$index->closeCursor();
$content = ob_get_clean();
require 'template.php';
?>