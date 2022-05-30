<?php
session_start();
var_dump($_SESSION);
// Déconnexion
if(isset($_GET['deco'])) {
    unset($_SESSION);
    session_destroy();
}
if(isset($_SESSION['user'])) {
    $connected = "connect";
} else {
    $connected='';
}
if(isset($_SESSION['panier'])){
    $cartBadge = count($_SESSION['panier']) ?? 0;
} else {
    $cartBadge = '';
}

require_once 'model/Manage.php';
$global = new Manage();

//recuperation des parametres
$page = '';

if(isset($_GET['page'])){
    $page = $_GET['page'];
}

// Traitement des formulaires
if(isset($_POST['submit'])) {
    $global->manageForm($_POST);
}

// element generiques
    $template = $global->userTemplate();

//Routeur
switch($page){
    case 'venir_et_visiter' : 
        require './controller/venir_et_visiter.php'; 
        break;
        
    case 'expositions' : 
        require './controller/expositions.php';
        break;
    
    case 'infos_pratiques' : 
        require './controller/infos_pratiques.php';
        break;
        
    case 'ateliers_et_animations' : 
        require './controller/ateliers_et_animations.php';
        break;
        
    case 'boutique' : 
        require './controller/boutique.php';
        break;
        
    case 'account' : 
        require './controller/account.php';
        break;
    case 'paiement' : 
        require './controller/paiement.php';
        break;
        
    default : 
        require './controller/home.php';
}