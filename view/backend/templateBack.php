<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/2c4122a5e2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.js" integrity="sha256-BTlTdQO9/fascB1drekrDVkaKd9PkwBymMlHOiG+qLI=" crossorigin="anonymous"></script>
    <script src="https://cdn.tiny.cloud/1/bnbduad1phrfj1pd2rzog44qm13pvuu41gh4j1qmomm7k0j1/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>tinymce.init({selector:'.textchapter'});</script>
    <link rel="stylesheet" href="/pro4/public/css/indexback.css">
    <title><?= $title ?></title>
</head>
    <body>
        <header>    
            <h1 class="titre">Billet simple pour l'Alaska</h1>
            <h2 class="titre">Espace d'administration</h2>
            <span></span>
        </header>
        <div class="contMenu">
            <menu>
                <ul>
                <li><a href="/pro4/nouveau-chapitre">Nouveau Chapitre</a></li>
                <li><a href="/pro4/chapitres-admin">Les Chapitres</a></li>
                <li><a href="/pro4/comentaires-admin">Comentaires</a></li>
                <li><a href="/pro4/gestion-admin">Gestion admin</a></li>
                <li><a href="/pro4/deconnexion">Déconnexion</a></li>
                </ul>
            </menu>
            <div class="phpContent">
            <?= $content ?>
            </div>
        </div>

        <footer>
            <p>Ce site et un projet etudiant de <a href="https://openclassrooms.com/fr/" target="_blank">OpenClassrooms</a>.</p>
        </footer>
    <script src="/pro4/public/js/form.js"></script>
    </body>
</html>
