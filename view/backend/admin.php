<?php $title = ('Accueil'); ?>

<?php ob_start(); ?>
<div class="contenaire contAdmin text-center">
    <h2>Bienvenue à votre espace d'administration.</h2><br><br>
    <p>
    Pensez à vérifier si vous avez des commentaires signlés ou des messages reçus de la part de vos visiteurs.
    </p>
</div>
<?php $content = ob_get_clean();
require 'templateBack.php';
?>