<?php
ob_start();
?>
<h2 class="titre_page">INFOS PRATIQUES</h2>
    <div class="info_pratiques_container">
        <div class="infos_pratiques">
            <div class="infos_pratiques_text">
                <h5>Venir au Muséum de la Faune</h5>
                <p>8 place Brandiloux - 33000 Bordeaux</p>
                <p><span>Piéton :</span> Par le Jardin public : Place Bardineau / Place du Champ de Mars / Cours de Verdun / rue d’Aviau / rue de la Course / Place Longchamps</p>
                <p><span>Tram :</span> B arrêt Quinconces / C arrêt Jardin public / D arrêt Fondaudège Muséum</p>
                <p><span>Bus :</span> 4- 15 arrêt Jardin public / 12 arrêt Faudaudège Muséum / 6 arrêt rue d’Aviau</p>
                <p><span>Vélo :</span> Stations Vcub à proximitéVoiture : Parking Auditorium / Parking Tourny / Parking Allée de Bristol</p>
            </div>
            <div class="info_bas violet">
                <h6>HORAIRES D’OUVERTURE</h6>
                <p><span>Ouvert du mardi au dimanche</span></p>
                <p>Horaires d’octobre à mars : <span>10h30 -17h30</span><br>
                   Horaires d’avril à septembre : <span>10h30 -18h</span></p>
            </div>
        </div>
        <div class="infos_pratiques">
            <div class="infos_pratiques_text">
                <h5>Visiter le Muséum de la Faune</h5>
                <p>Venez découvrir le Muséum de la Faune – sciences et nature ! </p>
                <p>Parcours permanent, expositions temporaires, spectacle multimédia, ateliers et diverses surprises font de chaque visite une expérience unique. Le Carré art et sciences complète l’offre. </p>
                <p>Le patrimoine architectural et une muséographie contemporaine contribuent à la mise en valeur des collections. Une équipe de médiateurs vous accompagnent dans cette expérience inédite dans le monde des sciences de la nature. </p>
                <p>Pour préparer votre visite, naviguez grâce au plan dans les différents étages du muséum</p>
            </div>
            <div class="info_bas vert">
                <h6>TARIFS</h6>
                <h7>TARIF PLEIN :</h7>
                <p>Pendant exposition temporaire - <b>7€</b> <br>
                   Hors période d’exposition temporaire - <b>5€</b></p>
                <h7>TARIF REDUIT :</h7>
                <p>Pendant exposition temporaire - <b>4€</b> <br>
                   Hors période d’exposition temporaire - <b>3€</b></p>
                <p><span>Paiements acceptés :</span></p>
                <p>Carte bancaire - Espèces - Chèques bancaires<br>
                   Les chèques vacances ne sont pas acceptés.</p>
            </div>
        </div>
    </div>

<?php

$content = ob_get_clean();

require 'template.php';