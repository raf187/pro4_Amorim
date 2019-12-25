<?php $title = ('Accueil'); ?>

<?php ob_start(); ?>
<div class="container contHome">
    <div class="jumbotron">
        <h1 class=" text-center">Billet simple pour l'Alaska</h1>
        <p class="lead my-md-5 text-center">
        À l'occasion de la sortie de mon dixième roman, j'ai décidé de le rendre accessible à tous en le diffusant gratuitement en ligne. Il sera diffusé, à l'image d'une série, par épisodes à raison d'un chapitre par mois. Cette démarche me permettra d'améliorer le roman en fonction de vos retours. Je vous invite donc à laisser vos impressions sur chaque chapitre.
        </p>
        <hr>
        <ul class="nav nav-list justify-content-center">
            <li class="nav-item">
                <a class="nav-link" href="/forteroche/chapitre"><i class="fas fa-book-open"></i><br>Chapitres</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/forteroche/auteur"><i class="fas fa-user-edit"></i><br>Auteur</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/forteroche/contact"><i class="fas fa-envelope-open-text"></i><br>Contact</a>
            </li>
        </ul>
    </div> 
    <div class="col-md-10 offset-md-1">
        <h3 class="text-center py-md-3">Dernier chapitre publié</h3>
        <?php
        while ($data = $lastChapter->fetch())
        {
        ?>
        <div class="card mb-md-4">
            <div class="card-header">
                <h3><?= $data['titre']; ?></h3>
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                <p><?= $data['contenu'] . '. '; ?><br>
                <cite class="text-primary" title="Source Title"><a href="/forteroche/chapitre-numero/<?= $data['id'] ?>"">Lire la suite...</cite></a></p>
                <footer class="blockquote-footer"><?= 'Par ' . $data['pseudo']?><cite title="Source Title"><?= ' le ' . $data['la_date']; ?></cite></footer>
                </blockquote>
            </div>
        </div>
    </div>
</div>
<?php
        }
$content = ob_get_clean(); ?>
<?php require 'template.php'; ?>