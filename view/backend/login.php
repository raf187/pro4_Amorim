<?php $title = ('Connection Admin'); ?>


<?php ob_start(); ?>

<form class="box" method="POST" action="">
    <h1>LOGIN</h1>
    <input class="text" type="text" name="pseudo" placeholder="Pseudo" required>
    <input class="password" type="password" name="mdp" placeholder="Mot de passe" required>
    <input class="submit" type="submit" name="submit" value="Connection">
    <!-- <p><?= $message ?></p> -->
</form>
<?php $content = ob_get_clean();
require 'view/frontend/template.php';
?>