<?php $title = ('Espace Admin'); ?>
<?php

?>
<?php ob_start(); ?>
<h1>Bienvenue</h1>
<?php 
            if (isset($_SESSION['message'])) { ?>
                <div class="text-center col-md-8 offset-md-2 alert alert-success">
            <?php
            echo $_SESSION['message'];
            unset($_SESSION['message']);
            ?>
            </div>
            <?php } ?>
<?php $content = ob_get_clean();
require 'templateBack.php';
?>