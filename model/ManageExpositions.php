<?php

// je recupère ma classe parente
require_once 'Manage.php';
// je crée ma nouvelle classe
class ManageExpo extends Manage {
    // je crée une methode pour récupérer la liste des commentaires
    public function getExpoList():object {
        $query = "SELECT expositions.*, photo.* FROM expositions JOIN photo ON expositions.id = photo.exposition_id";
        return $this->getQuery($query);
    }
}