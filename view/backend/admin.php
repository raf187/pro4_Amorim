<?php $title = ('Espace Admin'); ?>
<?php

?>
<?php ob_start(); ?>
<h1>Bienvenue</h1>
<?php $content = ob_get_clean();
require 'templateBack.php';
?>