<?php

require_once 'Manage.php';
    
class ManageShop extends Manage {
    
    public function getProducts() {
        $query = "SELECT products.*, photo.name FROM products JOIN photo ON products.id=photo.product_id";
        return $this->getQuery($query);
    }
}