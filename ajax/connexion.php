<?php
session_start();// Démarrage de la session
require '../model/Manage.php';

$global = new Manage();

$connexion_ok = $global->connexion($_POST);


// gestion de la session et du retour
    if($connexion_ok) {
        // je remplis ma $_SESSION
        $_SESSION['user'] = $_POST['mail'];
        echo "COK";
        
    } else { 
        echo '
                <div class="alert">
                    Mdp ou Identifiant invalide
                </div>';
    }