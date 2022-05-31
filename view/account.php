<?php
ob_start();

session_start();

// Déconnexion
if(isset($_GET['deconex'])){
    unset($_SESSION);
    session_destroy();
}

// Gestion du formulaire
if(isset($_POST['submit'])){
    if($_POST['name']=='Antoine' && $_POST['pwd']=='motdepasse'){
        $auth = '<h2> Identification réussie </h2>';
        $_SESSION['Auth'] = true ;
        $_SESSION['name'] = $_POST['name'];
    } else {
        $auth ='<h2> Identification Incorrecte ! </h2>';
    }
}

// Contrôle de l'identification
if(!isset($_SESSION['Auth']) || !$_SESSION['Auth']){
    require 'index.php?page=login';
    exit;
}
?>

<h1>Mon compte</h1>


<?php
    
    echo '<h2>Bonjour '.$_SESSION['name'].'</h2>';
    if(isset($auth)) echo $auth;
    
?>

    <a href="index.php?page=account?deconex=1">Déconnexion</a>

<?php

$content = ob_get_clean();

require 'template.php';