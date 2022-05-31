<?php
session_start();

require '../model/ManagePaiement.php';

$test = new ManagePaiement();


$test->InsertAdressLivraison();
$test->InsertOrder();


echo'
    <div class="order_ok">
        <p>Merci pour votre achat.<br><br>
        Nous traiterons votre commande dans les plus brefs delais et vous proposerons un suivi par mail.</p>
    </div>';

unset($_SESSION['panier']);