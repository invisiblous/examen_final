<?php
// je recupère ma classe parente
require_once 'Manage.php';

// je crée ma nouvelle classe
class ManageAccount extends Manage {
    // creation d'une fonction pour recuperer les infos des commandes
    public function getOrders() {
        $data = ['user_id' => $_SESSION['user']['id']];
        $query = "
        SELECT products.*, orders.* FROM products 
        JOIN products_orders ON products.id=products_orders.product_id
        JOIN orders ON products_orders.order_id=orders.id WHERE orders.user_id=:user_id";
        return $this->getQuery($query, $data);
    }
    
}