<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>MUSEUM</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./public/css/normalize.css" type="text/css" />
    <link rel="stylesheet" href="./public/css/styles.css" type="text/css" />
    <script type="text/javascript" src="./public/js/script.js"></script>
</head>
<body>
    <header>
        <!--Nav menu burger -->
        <nav class="my_nav" id="my_nav">
            <a id="closeBtn" href="#" class="close">&times;</a>
            <ul>
                <li><a href="index.php?page=venir_et_visiter">VENIR ET VISITER</a></li>
                <li><a href="index.php?page=expositions">LES EXPOSITIONS</a></li>
                <li><a href="index.php?page=infos_pratiques">INFOS PRATIQUES</a></li>
                <li><a href="index.php?page=ateliers_et_animations">ATELIERS ET ANIMATIONS</a></li>
                <li><a href="index.php?page=boutique">LA BOUTIQUE</a></li>
            </ul>
        </nav>
        <!----------------->
        
        <!--Menu Burger -->
        <a href="#" id="openBtn">
            <span class="burger-icon">
                <span></span>
                <span></span>
                <span></span>
            </span>
        </a>
        <!--------------->
        
        <a class="logo" href="index.php"><img id="logo" src="./public/images/logo_musée_de_la_faune.png" alt="logo"></a>
        
        <div class="user">
            <a id="bouton_id" class="<?=$connected?>" href=""><i class="fas fa-user"></i></a>
            <a id="bouton_panier" href=""><i class="fas fa-shopping-basket"></i><span id="cartBadge"><?php if($cartBadge) echo $cartBadge; ?></span></a>
        </div>
        <div class="account">
            <a href="index.php?page=account">Mon Compte</a> 
            <a href="index.php?deco=1">Déconnexion</a>
        </div>
        <!-- espace panier -->
        <div class="disparaitre panier "></div>
        <!------------------>
        
        <!-- formulaire de connexion et d'inscription-->
        <div class="overlay hidden"></div>
        <div class="user_id hidden" id="user_id">
            <div class="erreur"></div>
                <?=$template['connexion']?>
                <?=$template['signup']?>
        </div>
        <!---------------------------------------->
    </header>
    
    <main class="container">
        <?=$content?>
    </main>
    
    <footer>
        <div class="reseau">
            <p>SUIVEZ-NOUS 
                <a href=""><i class="fab fa-instagram"></i></a>
                <a href=""><i class="fab fa-twitter"></i></a>
                <a href=""><i class="fab fa-youtube"></i></a>
                <a href=""><i class="fab fa-facebook-f"></i></a>
            </p>
        </div>
        <div>
            COPYRIGHT© MUSÉE DE LA FAUNE
        </div>
        <div>
            <a href="">MENTIONS LEGALES</a>
        </div>
    </footer>
    
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</body>
</html>