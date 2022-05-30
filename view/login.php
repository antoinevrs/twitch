<?php
ob_start();

//les session prennent la valeur du formulaire pour se connecter direct a la page compte apres inscription
    /*$_SESSION['Auth']=$_POST['compte'];
    $_SESSION['name']=$_POST['login'];
    $auth = '<h2>Merci de vous être enregistré !</h2>';*/
    
?>

<form class="form" method="POST">
    <input type="text" name="name" placeholder="Identifiant">
    <input type="password" name="pwd" placeholder="Mot de passe">
    <input type="submit" value="Connexion"/>
</form>


<?php
$content = ob_get_clean();

require 'template.php';