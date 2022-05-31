<?php

$page = '';

if(isset($_GET['page'])){
    $page = $_GET['page'];
}
switch($page){
    case 'loadout' : 
        require './controller/loadout.php';
        break;
        
    case 'planning' : 
        require './controller/planning.php';
        break;
    
    case 'shop' : 
        require './controller/shop.php';
        break;
    
    case 'account' : 
        require './controller/account.php';
        break;
    
    case 'cart' : 
        require './controller/cart.php';
        break;
    
    case 'login' : 
        require './controller/login.php';
        break;
    
    default : 
        require './controller/home.php';
}