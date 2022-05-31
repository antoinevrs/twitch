<?php

ob_start();
    
?>

<h2>Je me connecte</h2>

<form action="index.php?page=account" class="form" method="POST">
    <input type="text" name="name" placeholder="Identifiant">
    <input type="password" name="pwd" placeholder="Mot de passe">
    <input type="submit" value="Connexion"/>
</form>

<h2>Je créé mon compte</h2>

<form action="index.php?page=account" class="form" method="POST">
    <input type="text" name="lastname" placeholder="Nom"/>
    <input type="text" name="firstname" placeholder="Prénom"/>
    <input type="text" name="mail" placeholder="Email"/>
    <input type="text" name="password" placeholder="Mot de passe"/>
    <input type="text" name="address" placeholder="adresse"/>
    <input type="number" name="phone" placeholder="Numéro de téléphone"/>
    <input type="date" name="birthdate"/>
    <input type="submit" value="Créé"/>
</form>

<?php
$content = ob_get_clean();

require 'template.php';