<?php
session_start();
require '../model/ManagePanier.php';

$prod = new ManagePanier();

// ajoute les id des produits du panier dans la session
if(isset($_POST['prod_id'])){
    $_SESSION['panier'][] = $_POST['prod_id'];
}

// on rajoute l'effacement ici
if(isset($_POST['delete_id'])){
    $key = str_replace('panier_', '', $_POST['delete_id']);
    unset($_SESSION['panier'][$key]);
}

// Declaration de la variable prix pour le calcul du total du panier
$prix = $prod->totalCart();

// On s'occupe de l'affichage des elements du paniers
if(isset($_SESSION['panier'])) {
   foreach($_SESSION['panier'] as $key => $id_prod) {
       $prod_info = $prod->getProduitInfos($id_prod);
       $a = $prod_info->fetch();
        echo '
            <div class="prod_bloc">
                <div class="prod_img">
                    <img src="./public/images/'.$a['photo'].'" alt="">
                </div>
                <div class="prod_infos">
                    <h4>'.$a['product_name'].'</h2>
                    <h4>Prix : '.$a['price'].' €</h3>
                </div>
                <div id="panier_'.$key.'" class="bouton_supr_panier">Supprimer</div>
            </div>';
    }
}

// Affichage du bloc choix du retour ou de validation du panier
echo '
    <div class="prix_total">
        Prix TTC = '.$prix.'
    </div>
    <div class="panier_choice">
        <a href="index.php?page=boutique"><i class="fas fa-angle-left"></i>continuer mes achats</a>
        <a id="valid_panier" href="index.php?page=paiement">valider mon panier<i class="fas fa-angle-right"></i></a>
    </div>';