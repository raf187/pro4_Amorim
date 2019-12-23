<?php $title = ('Erreur 404'); ?>

<?php ob_start(); ?>
<div class="erreur404 text-center container">
    <h3>OUPS ERREUR 404</h3>
    <h4>Perdu dans l'Alaska ?</h4>
    <a class="btn btn-secondary" href="/pro4">Retour à l'accueil</a>
</div>

<?php $content = ob_get_clean(); ?>

<?php require 'template.php'; ?>