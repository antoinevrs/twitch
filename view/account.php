<?php
ob_start();
?>

<h1>La page account</h1>

<?php
$content = ob_get_clean();

require 'template.php';