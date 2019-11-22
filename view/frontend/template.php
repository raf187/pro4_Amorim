<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/2c4122a5e2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./public/css/index.css">
    <title><?= $title ?></title>
</head>
<body>
        <menu>
            <ul>
                <li><a href="/pro4/">Accueil</a></li>
                <li><a href="/pro4/chapter">Chapitres</a></li>
                <li><a href="/pro4/author">Auteur</a></li>
                <li><a href="/pro4/contact">Contact</a></li>
            </ul>
            <p>Menu</p>    
        </menu>

        <header>    
            <h1>Billet simple pour l'Alaska</h1>
        </header>
        <div class="phpContent">
        <?= $content ?>
        </div>
        <footer>
            <p>Ce site et un projet etudiant de <a href="https://openclassrooms.com/fr/" target="_blank">OpenClassrooms</a>.</p>
        </footer>
</body>
</html>
