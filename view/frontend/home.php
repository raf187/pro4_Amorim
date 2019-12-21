<?php $title = ('Billet simple pour l\'Alaska - Accueil'); ?>

<?php ob_start(); ?>
    <div class="jumbotron">
        <h1 class=" text-center display-4">Billet simple pour l'Alaska</h1>
        <p class="lead">
            Bienvenue sur mon premier livre en ligne, Billet simple pour l'Alaska.<br>Rei publicae debeo. Quid? si ipsas inimicitias, depono rei publicae causa, quis me tandem iure reprehendet, praesertim cum ego omnium meorum consiliorum atque factorum exempla semper ex summorum hominum consiliis atque factis mihi censuerim petenda.
        </p>
        <hr class="my-4">
        <ul class="nav nav-list justify-content-center">
            <li class="nav-item">
                <a class="nav-link" href="/pro4/chapitre"><i class="fas fa-book-open"></i><br>Chapitres</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/pro4/auteur"><i class="fas fa-user-edit"></i><br>Auteur</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/pro4/contact"><i class="fas fa-envelope-open-text"></i><br>Contact</a>
            </li>
        </ul>
    </div> 
<div class="contaierIndexChapter col-md-10 offset-md-1">
    <h3 class="text-center">Dernier chapitre publié</h3>
    <?php
    while ($data = $lastChapter->fetch())
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
$content = ob_get_clean(); ?>
<?php require 'template.php'; ?>