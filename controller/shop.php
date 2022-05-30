<?php

require './model/ManageShop.php';

$shop = new ManageShop();
$photo = $shop->getProducts();

require './view/shop.php';