<?php
// je recupère ma classe parente
require_once 'Manage.php';

// je crée ma nouvelle classe
class ManagePanier extends Manage {
    
    // je crée une methode pour récupérer les infos d'un produit
    public function getProduitInfos(int $id):object {
        $data=['id'=>$id];
        $query = "SELECT * FROM products WHERE id=:id";
        return $this->getQuery($query,$data);
    }
    
    // Calcule le total du panier
    public function totalCart() {
        $total = 0;
        if(isset($_SESSION['panier'])){
        foreach($_SESSION['panier'] as $id_prod) {
            $prod_info = $this->getProduitInfos($id_prod);
            $a = $prod_info->fetch();
            $total += $a['price'];
        }
        return $total;
        }
    }
}