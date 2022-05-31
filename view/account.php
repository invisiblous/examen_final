<?php
ob_start();
?>
<div class="info_user_container">
    <h2 class="titre_account"><a href="index.php?page=account">Mes infos</a></h2>
    <?php
        if(isset($info_user)) {
            echo '
                <div class="my_infos disparaitre">
                    <h4>Nom : '.$_SESSION['user']['name'].'</h4>
                    <h4>Date de naissance : '.$_SESSION['user']['birthdate'].'</h4>
                    <h4>mail : '.$_SESSION['user']['mail'].'</h4>
                    <h4>tel : '.$_SESSION['user']['tel'].'</h4>
                </div>';
        }
    ?>
    <h2 class="titre_account_orders"><a href="index.php?page=account">Mes Commandes</a></h2>
    <?php
        echo '<div class="my_orders disparaitre">';
        if($info_order->rowCount()) {
            while($o = $info_order->fetch(PDO::FETCH_ASSOC)) {
                echo '
                    <h3>date : '.$o['created_at'].'</h3>
                    <h3>nom : '.$o['product_name'].'</h3>
                    <h4>prix : '.$o['price'].'</h4>';
            }
        } else {
            echo 'Aucune commande';
        }
        echo '</div>';
    ?>

</div>

<?php
$content = ob_get_clean();

require 'template.php';