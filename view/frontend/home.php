<?php $title = ('Billet simple pour l\'Alaska - Accueil'); ?>

<?php ob_start(); ?>
    <div class="jumbotron">
        <h1 class="display-4">Bonjour!</h1>
        <p class="lead">
            Bienvenue sur mon premier livre en ligne, Billet simple pour l'Alaska.<br>Rei publicae debeo. Quid? si ipsas inimicitias, depono rei publicae causa, quis me tandem iure reprehendet, praesertim cum ego omnium meorum consiliorum atque factorum exempla semper ex summorum hominum consiliis atque factis mihi censuerim petenda.
        </p>
        <hr class="my-4">
        <p class="hr">
            Exitez pas a le lire, bonne lecture.
        </p>
        <a class="hr btn btn-primary btn-lg offset-md-4 col-md-4" href="/pro4/chapitre" role="button">Les chapitres</a>
    </div> 
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
<?php $content = ob_get_clean(); ?>
<?php require 'template.php'; ?>