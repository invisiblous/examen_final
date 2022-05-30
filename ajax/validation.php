<?php
session_start();

require '../model/ManagePaiement.php';

$test = new ManagePaiement();

$insert = $test->InsertOrder();
$insert2 = $test->InsertAdressLivraison();

echo'
    <div class="order_ok">
        <p>Merci pour votre achat.<br><br>
        Nous traiterons votre commande dans les plus brefs delais et vous proposerons un suivi par mail.</p>
    </div>';

unset($_SESSION['panier']);