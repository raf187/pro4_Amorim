<?php $title = ('404'); ?>

<?php ob_start(); ?>
<div class="erreur404 text-center container justify-content-center">
    <h3>OUPS... Perdu dans l'Alaska ?</h3>
    <h4>Cet article n'existe pas !</h4>
    <a class="btn btn-secondary" href="/pro4/chapitre">Retour aux articles</a>
</div>

<?php $content = ob_get_clean(); ?>

<?php require 'template.php'; ?>