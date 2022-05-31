<?php
session_start();
require '../model/ManagePaiement.php';

$test = new ManagePaiement();

// On insert les infos du panier et du formulaire de validation d'achat dans la BDD
$test->InsertAdressLivraison();
$test->InsertOrder();

// Affichage du message de validation de la commande
echo '
    <div class="order_ok">
        <p>Merci pour votre achat.<br><br>
        Nous traiterons votre commande dans les plus brefs delais et vous proposerons un suivi par mail.</p>
    </div>';

// On vide dans la session les id une fois la commande validée
unset($_SESSION['panier']);