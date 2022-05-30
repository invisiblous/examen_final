<?php

// je recupère ma classe parente
require_once 'Manage.php';
// je crée ma nouvelle classe
class ManageBoutique extends Manage {
    // je crée une methode pour récupérer la liste des produits
    public function getProduitList():object {
        $query = "SELECT * FROM products";
        return $this->getQuery($query);
    }
}