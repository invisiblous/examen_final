<?php
require 'model/ManagePanier.php';

$cart = new ManagePanier();
$obj = new Manage();

$connex = $obj->userTemplate('_2');
$total = $cart->totalCart();
if(isset($_SESSION['panier'])){
    $nb_product = count($_SESSION['panier']);
} else {
    $nb_product = 0;
}
require './view/paiement.php';
