<?php
// je recupère ma classe parente
require_once 'Manage.php';

// je crée ma nouvelle classe
class ManageBoutique extends Manage {
    
    // creation d'une methode pour récupérer la liste des produits
    public function getProduitList():object {
        $query = "SELECT * FROM products";
        return $this->getQuery($query);
    }
}