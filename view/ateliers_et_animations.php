<?php
ob_start();
?>
<h2 class="titre_page">ATELIERS ET ANIMATIONS</h2>
<div class="preface_bloc_text atelier_info">
    <h5>Préparer la venue d’un médiateur</h5>
    <p>Le dispositif « Le Muséum chez vous » vient directement à la rencontre des établissements scolaires, des structures d’accueil de loisirs, des médiathèques, et des structures d’accueil de personnes âgées.</p>
    <p>Accompagné d’une sélection de spécimens issus des collections et d’outils pédagogiques spécialement conçus, un médiateur scientifique de l’association Amuséum se rend dans votre établissement et anime un atelier thématique.</p>
</div>
<section class="atelier_container">
    <div class="categ_atelier">
        <h5>Maternelle et élémentaire jusqu’au CM2</h5>
        <div class="fiche_atelier">
            <span>6 PATTES</span>
            <p>Avoir une vision plus positive sur les insectes.<br>
                DU 01/03/2021 AU 31/12/2023</p>
        </div>
        <div class="fiche_atelier">
            <span>LOUP Y ES-TU ?</span>
            <p>Le loup a une place particulière dans notre culture occidentale.<br>
                Du 01/03/2021 au 31/12/2023</p>
        </div>
        <div class="fiche_atelier">
            <span>TOUS LES BÉBÉS</span>
            <p>Savoir où sont les bébés avant la naissance.<br> 
                Du 01/03/2021 au 31/12/2023</p>
        </div>
        <div class="fiche_atelier">
            <span>UN OISEAU, DES OISEAUX</span>
            <p>Décrire et connaître les oiseaux.<br>
                Du 01/03/2021 au 31/12/2023 </p>
        </div>
    </div>
    <div class="categ_atelier">
        <h5>Elémentaire cycles 2 et 3</h5>
        <div class="fiche_atelier">
            <span>SUIVONS LES TRACES</span>
            <p>Apprendre à observer les traces d’animaux dans la nature.<br>
                Du 01/03/2021 au 31/12/2023</p>
        </div>
        <div class="fiche_atelier">
            <span>ANIMAUX ET CHANGEMENTS CLIMATIQUES</span>
            <p>Appréhender l’adaptation des animaux à leur environnement climatique.<br>
                Du 01/03/2021 au 31/12/2023 </p>
        </div>
        <div class="fiche_atelier">
            <span>DE L’ORDRE CHEZ LES ANIMAUX</span>
            <p>Présentation d’une sélection de 30 spécimens des collections du Musée.<br>
                Du 01/03/2021 au 31/12/2023</p>
        </div>
        <div class="fiche_atelier">
            <span>REPTILES</span>
            <p>Reptiles des animaux fascinants.<br> 
                Du 01/03/2021 au 31/12/2023 </p>
        </div>
    </div>
    <div class="categ_atelier">
        <h5>Collège</h5>
        <div class="fiche_atelier">
            <span>LES OISEAUX, ALIMENTATION ET MIGRATION</span>
            <p>Les régimes alimentaires des oiseaux et leurs stratégies pour se nourrir.<br> 
                Du 01/03/2021 au 31/12/2023</p>
        </div>
        <div class="fiche_atelier">
            <span>CHANGEMENT CLIMATIQUE ET BIODIVERSITÉ</span>
            <p>Comprendre les effets du réchauffement climatiques sur le développement des populations animales.<br>
                Du 01/03/2021 au 31/12/2023 </p>
        </div>
        <div class="fiche_atelier">
            <span>LES OURS</span>
            <p>Comprendre sa place dans le groupe zoologique des Carnivores.<br>
                Du 01/03/2021 au 31/12/2023</p>
        </div>
        <div class="fiche_atelier">
            <span>TEMPS ET CLIMAT : ANIMAUX ET SAISONS</span>
            <p>Revenir sur la variabilité climatique d’une saison à l’autre en région tempérée.<br> 
                Du 01/03/2021 au 31/12/2023</p>
        </div>
    </div>
    <div class="categ_atelier">
        <h5>Grand Public</h5>
        <div class="fiche_atelier">
            <span>LES OISEAUX, CHAMPIONS DE LA DIVERSITÉ</span>
            <p>Pourquoi les pattes des oiseaux ne se ressemblent-elles pas ?<br> 
                Du 01/03/2021 au 31/12/2023 </p>
        </div>
        <div class="fiche_atelier">
            <span>COQUILLAGES</span>
            <p>L’atelier propose de balayer les caractéristiques de ces animaux à coquille et de découvrir un monde riche de formes, couleurs, stratégies alimentaires, milieux de vie...<br>
                Du 01/03/2021 au 31/12/2023 </p>
        </div>
        <div class="fiche_atelier">
            <span>TRACES ET INDICES</span>
            <p>Une animation «Traces et indices !»<br>
                Du 01/03/2021 au 31/12/2023</p>
        </div>
        <div class="fiche_atelier">
            <span>LES PAPILLONS</span>
            <p>Prenons le temps d’en apprendre davantage à leur sujet, de les observer de plus près !<br> 
                Du 01/03/2021 au 31/12/2023</p>
        </div>
    </div>
</section>
<section class="infos_utiles">
    <div class="bloc_utile violet">
        <p><span>POUR RÉSERVER UN ATELIER</span> du Muséum chez vous et pour toute question administrative, le secrétariat est à votre écoute.</p>
        <p><span>Par téléphone :</span> 05 33 57 68 50<br>
            <span>Par mail :</span> museumdelafaune@gmail.fr</p>
        
    </div>
    <div class="bloc_utile vert">
        <p><span>POUR PLUS D’INFORMATIONS</span> sur nos ateliers, rendez-vous sur la 
            rubrique Les ateliers</p>
        <p><span>Par téléphone :</span> 05 33 57 68 50<br>
            <span>Par mail :</span> museumdelafaune@gmail.fr</p>
    </div>
</section>

<?php

$content = ob_get_clean();

require 'template.php';