<?php
ob_start();
?>
<!-- Swiper -->
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide slide1">
                <a href="index.php?page=expositions"><img src="./public/images/girafe.jpg" alt="girafe"></a>
            </div>
            <div class="swiper-slide slide2">
                <a href="index.php?page=expositions"><img src="./public/images/koala.jpg" alt="koala"></a>
            </div>
            <div class="swiper-slide slide3">
                <a href="index.php?page=expositions"><img src="./public/images/léopard.jpg" alt="leopard"></a>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
    
    <section class="home_contain_flexbox">
        <div class="card">
            <div class="img_container img1">
                <a href="index.php?page=venir_et_visiter"><img src="./public/images/cameleon.jpg" alt="photo d'un cameleon"></a>
            </div>
            <div class="title link1">
                <p>VENIR ET VISITER</p>
            </div>
        </div>
        <div class="card">
            <div class="img_container img2">
                <a href="index.php?page=expositions"><img src="./public/images/rhinoceros.jpg" alt="photo d'un rhinoceros"></a>
            </div>
            <div class="title link2">
                <p>LES EXPOSITIONS</p>
            </div>
        </div>
        <div class="card">
            <div class="img_container img3">
                <a href="index.php?page=infos_pratiques"><img src="./public/images/elephant.jpg" alt="photo d'un groupe d'elephant"></a>
            </div>
            <div class="title link3">
                <p>INFOS PRATIQUES</p>
            </div>
        </div>
        <div class="card">
            <div class="img_container img4">
                <a href="index.php?page=ateliers_et_animations"><img src="./public/images/lion.jpg" alt="photo d'un lion"></a>
            </div>
            <div class="title link4">
                <p>ATELIERS ET ANIMATIONS</p>
            </div>
        </div>
        <div class="card">
            <div class="img_container img5">
                <a href="index.php?page=boutique"><img src="./public/images/pingouin.jpg" alt="photo d'un pinguin"></a>
            </div>
            <div class="title link5">
                <p>LA BOUTIQUE</p>
            </div>
        </div>
    </section>

<?php

$content = ob_get_clean();

require 'template.php';