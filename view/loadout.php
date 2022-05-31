<?php
ob_start();

session_start();
?>

<h1>La page loadout</h1>

<?php
$content = ob_get_clean();

require 'template.php';