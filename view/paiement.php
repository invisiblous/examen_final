<?php

ob_start();

if(!isset($_SESSION['user'])) {
    echo '
        <div class="co_id">
            '.$connex['connexion'].'
        </div>';
} else {
    ?>
    
    <div class="livraison_bloc">
        <form class="livraison" method="post" id="livraison">
            <h8>Adresse de livraison</h8>
            <input type="text" name="address" placeholder="adresse"/>
            <input type="number" name="cp" placeholder="Code Postal"/>
            <input type="text" name="city" placeholder="ville"/>
            <div class="recap_panier">
                <p>Nombre d'article : <?=$nb_product?></p>
                <p>Prix TTC = <?=$total?> €</p>
            </div>
            <input id="valider_commande" class="button" type="submit" name="submit" value="valider"/>
        </form>
    </div>
    
    <div class="order"></div>

    
    
    <?php
}

$content = ob_get_clean();

require 'template.php';