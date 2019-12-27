<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="img/png" href="public/img/favicon.ico">
    <script src="https://kit.fontawesome.com/2c4122a5e2.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Lora|Open+Sans+Condensed:700&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.js" integrity="sha256-BTlTdQO9/fascB1drekrDVkaKd9PkwBymMlHOiG+qLI=" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="/forteroche/public/css/index.css">
    <title><?= $title ?></title>
</head>
    <body class="d-flex flex-column h-100">
        <main role="main" class="flex-shrink-0">
            <nav class="fixed-top navbar navbar-expand-md navbar mb-md-5 navbar-dark">
                <a class="navbar-brand" href="/forteroche/">Billet simple pour l'Alaska</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav ml-md-5">
                    <li class="nav-item">
                        <a class="nav-link" href="/forteroche/">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/forteroche/chapitre">Chapitres</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/forteroche/auteur">Auteur</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/forteroche/contact">Contact</a>
                    </li>
                    </ul>
                </div>
            </nav>
                <div class="container">
                    <?= $content ?>
                </div>
            </main>
            <footer class="footerWeb footer mt-auto py-3">
                <div class="container">
                    <span class="">Ce site et un projet étudiant de <a href="https://openclassrooms.com/fr/" target="_blank">OpenClassrooms</a>.</span>
                </div>
            </footer>
        <script src="/forteroche/public/js/form.js"></script>
    </body>
</html>
