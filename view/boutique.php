<?php
ob_start();
?>
<div class="container_products">
<?php
if(isset($info_products)) {
    while($p = $info_products->fetch(PDO::FETCH_ASSOC)) {
        echo '
        <div class="product_card">
            <div class="product_img">
                <img src="./public/images/'.$p['photo'].'" alt="">
            </div>
            <div class="product_infos">
                <h4>'.$p['product_name'].'</h2>
                <p>'.$p['description'].'</p>
                <h4>Prix : '.$p['price'].' €</h3>
            </div>
            <div id="'.$p['id'].'" class="bouton_add_panier">ajouter au panier</div>
        </div>';
    }
}
?>
</div>
<?php

$content = ob_get_clean();

require 'template.php';