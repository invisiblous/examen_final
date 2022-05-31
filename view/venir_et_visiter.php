<?php
ob_start();
?>
<h2 class="titre_page">VENIR ET VISITER</h2>
<div class="preface_bloc_text">
    <h5>L’histoire du muséum</h5>
    <p>Le Muséum de la Faune figure parmi les premières collections publiques créées au lendemain de la Révolution française. Les premiers cabinets privés d’Histoire naturelle la composant furent la collection du Professeur Latapie, disciple de Montesquieu, remise à la ville de Bordeaux dès 1791, puis celle de l’armateur Bernard Journu- Auber en 1804. Le Cabinet d’Histoire naturelle prit d’abord place dans l’ancien Hôtel de l’Académie, puis fut transféré en 1862 dans le bâtiment qu’il occupe aujourd’hui au Jardin Public. Acquis par la Ville en 1857, l’Hôtel de Lisleferme subit d’importantes modifications pour sa transformation en musée. Hier, les collections du Muséum de la Faune constituaient un ensemble d’échantillons représentatifs de la diversité naturelle que l’on pensait pouvoir décrire en totalité. Ces échantillons étaient considérés comme un matériel éternellement renouvelable. Aujourd’hui, ces collections ne pourraient plus être constituées, certaines espèces étant protégées ou disparues.Les collections représentent en effet un patrimoine précieux, susceptible d’éveiller une prise de conscience collective sur la fragilité de la biodiversité et la place de l’Homme dans la nature.</p>
</div>
<div class="bloc_text_bas">
    <div class="preface_bloc_text bloc_bas">
        <h5>Le nouveau muséum</h5>
        <p>Au XXIe siècle où les enjeux liés à l’environnement sont déterminants dans les choix de société, le Muséum de Bordeaux a un nouveau rôle à jouer. Dans un contexte inédit d’interrogations sur la responsabilité humaine à propos de la préservation de l’environnement et de la biodiversité, l’acquisition d’une véritable culture scientifique est indispensable aux citoyens. S’appuyant sur le patrimoine naturel que représentent les collections, le muséum est un lieu de médiation, d’apprentissage, de sensibilisation, de débats où des prises de conscience peuvent naître.</p>
    </div>
    
    <div class="preface_bloc_text bloc_bas">
        <h5>L’exposition permanente</h5>
        <p>L’entrée dans le musée permettra de découvrir la diversité des tailles, des formes et des couleurs présente dans la nature. La diversité géographique sera mise en valeur ainsi que la richesse des collections du fait des relations privilégiées de Bordeaux l’outremer. L’axe suivant montrera comment et pourquoi cette multitude a été classée. Le dernier axe amènera le visiteur à s’interroger sur l’homme en tant qu’observateur de la nature mais aussi acteur responsable de changements du milieunaturel. L’exposition permanente se situera essentiellement au deuxième étage et se déploiera aussi dans les espaces de circulation.</p>
    </div>
</div>

<?php

$content = ob_get_clean();

require 'template.php';