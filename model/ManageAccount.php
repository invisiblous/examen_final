<?php

// je recupère ma classe parente
require_once 'Manage.php';
// je crée ma nouvelle classe
class ManageAccount extends Manage {
    public function getInfoUser():object {
        $data=['mail'=>$_SESSION['user']];
        $query = "SELECT * FROM users WHERE mail=:mail";
        return $this->getQuery($query,$data);
    }
    
    public function getOrders() {
        $query = "
        SELECT products.*, orders.* FROM products 
        JOIN products_orders ON products.id=products_orders.product_id
        JOIN orders ON products_orders.order_id=orders.id";
        return $this->getQuery($query);
    }
    
}