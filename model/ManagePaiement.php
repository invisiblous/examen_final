<?php

// je recupère ma classe parente
require_once 'Manage.php';
// je crée ma nouvelle classe
class ManagePaiement extends Manage {
    //Je veux inserrer dans ma base de données les produit de mon panier dans une nouvelle order quand je clique sur valider 
    public function InsertOrder() {
        $data =['mail'=>$_SESSION['user']];
        $query="SELECT id FROM users WHERE mail=:mail";
        $id_user = $this->getQuery($query, $data);

        $data2 =['user_id'=>$id_user];
        $query = "INSERT INTO orders (user_id) VALUES (:user_id)";
        $this->getQuery($query, $data2);
            
        $data3 = [
            'product_id'=>$_SESSION['panier']
            ];
        $query = "INSERT INTO products_orders (product_id) VALUES (:product_id)";
        $this->getQuery($query, $data3);
        
    }
    
    public function InsertAdressLivraison() {
        $data = [
            'address'=>$_POST['address'],
            'cp'=>$_POST['cp'],
            'city'=>$_POST['city'],
            'user_id'=> $id_user
        ];
        $query="INSERT INTO addresses (address, cp, city) VALUES (:address, :cp, :city) WHERE user_id=:user_id";
        $this->getQuery($query, $data);
        
    }

}