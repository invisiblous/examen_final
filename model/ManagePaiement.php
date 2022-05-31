<?php

// je recupère ma classe parente
require_once 'Manage.php';
// je crée ma nouvelle classe
class ManagePaiement extends Manage {
    //Je veux inserrer dans ma base de données les produit de mon panier dans une nouvelle order quand je clique sur valider 
    public function InsertOrder() {
        

        $data =['user_id'=>$_SESSION['user']['id']];
        $query = "INSERT INTO orders (user_id, created_at) VALUES (:user_id, CURDATE())";
        $order_id = $this->setQuery($query, $data);
        
        
        foreach($_SESSION['panier'] as $prod_id) {
            $data = [
                'product_id'=>$prod_id,
                'order_id'=>$order_id
                ];
            $query = "INSERT INTO products_orders (product_id, order_id) VALUES (:product_id, :order_id)";
            $this->getQuery($query, $data);
        }
        
    }
    
    public function InsertAdressLivraison() {
        $data = [
            'address'=>$_POST['address'],
            'cp'=>$_POST['cp'],
            'city'=>$_POST['city'],
            'user_id'=> $_SESSION['user']['id']
        ];
        $query="INSERT INTO addresses (address, cp, city, user_id) VALUES (:address, :cp, :city, :user_id)";
        $this->getQuery($query, $data);
        
    }

}