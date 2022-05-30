<?php
ob_start();
?>

<h1>Planning</h1>

<img class="img_planning" src="./public/image/planning.jpg" alt="Le planning">

<?php
$content = ob_get_clean();

require 'template.php';