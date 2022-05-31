<?php
ob_start();

session_start();

?>

<h1>Mon compte</h1>

    <a href="index.php?page=account?deconex=1">Déconnexion</a>

<?php

$content = ob_get_clean();

require 'template.php';