<?php
session_start();// Démarrage de la session
require '../model/Manage.php';

$global = new Manage();

$connexion_ok = $global->connexion($_POST);


// gestion de la session et du retour
    if(isset($connexion_ok['id'])) {
        // je remplis ma $_SESSION
        $_SESSION['user'] = $connexion_ok;
        echo "COK";
        
    } else { 
        echo '
                <div class="alert">
                    Mdp ou Identifiant invalide
                </div>';
    }