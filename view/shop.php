<?php
ob_start();

session_start();

echo '<h1>La boutique</h1>';

echo '<div class="container_shop">';

if(isset($photo)){
    while($r = $photo->fetch(PDO::FETCH_ASSOC)){
            echo '<div class="product">';
                echo '<img src="../twitch/public/image/'.$r['name'].'">';
                echo '<p>'.$r['products_name'].'</p>';
                echo '<p>'.$r['price'].'€</p>';
                echo '<p>'.$r['description'].'<p>';
                echo '<button class="add_cart">Ajouter au panier</button>';
            echo '</div>';
    }
}

echo '</div>';

$content = ob_get_clean();

require 'template.php';