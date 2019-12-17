<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/2c4122a5e2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.js" integrity="sha256-BTlTdQO9/fascB1drekrDVkaKd9PkwBymMlHOiG+qLI=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./public/css/index.css">
    <link rel="stylesheet" href="../public/css/index.css">
    <title><?= $title ?></title>
</head>
<body>
        <menu>
            <ul>
                <li><a href="/pro4/">Accueil</a></li>
                <li><a href="/pro4/chapitre">Chapitres</a></li>
                <li><a href="/pro4/auteur">Auteur</a></li>
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


<script src="../public/js/form.js"></script>
<script src="../public/js/formAdmin.js"></script>
</body>
</html>
