document.addEventListener("DOMContentLoaded",function() {
  // declaration de toutes les variables
  let nav = document.getElementById("my_nav");
  let openBtn = document.getElementById("openBtn");
  let closeBtn = document.getElementById("closeBtn");
  let bouton_id = document.querySelector('#bouton_id');
  let user_id = document.querySelector('.user_id');
  let overlay = document.querySelector('.overlay');
  let account = document.querySelector('.account');
  let erreur = document.querySelector('.erreur');
  let connexion = document.querySelector('#connexion');
  let connexion2 = document.querySelector('#connexion_2');
  let my_infos = document.querySelector('.my_infos');
  let my_orders = document.querySelector('.my_orders');
  let titre_account = document.querySelector('.titre_account');
  let titre_account_orders = document.querySelector('.titre_account_orders');
  let bouton_add_panier=document.querySelectorAll('.bouton_add_panier');
  let panier=document.querySelector('.panier');
  let bouton_panier = document.querySelector('#bouton_panier');
  let valider_commande = document.querySelector('#valider_commande');
  let order = document.querySelector('.order');
  let livraison_bloc = document.querySelector('.livraison_bloc');

//////////////////////////////////////////////////////////////////////////////////
//Initialize Swiper --> 
  let swiper = new Swiper(".mySwiper", {
        pagination: {
          el: ".swiper-pagination",
          dynamicBullets: true,
        },
        autoplay: {
          delay: 5000,
          disableOnInteraction: false,
        },
        loop : true,
        effect: 'coverflow',
        coverflowEffect: {
         rotate: 40,
        slideShadows: false,
        },
      });
      
//////////////////////////////////////////////////////////////////////////////////
// Menu Burger
  openBtn.onclick = openNav;
  closeBtn.onclick = closeNav;
  
//////////////////////////////////////////////////////////////////////////////////
//BLOC Se Connecter
  if(bouton_id.classList.contains('connect')) {
    bouton_id.addEventListener("click",e =>{
      e.preventDefault();
      account.classList.toggle("visible");
    });
  } else {
    bouton_id.addEventListener("click", e =>{
      e.preventDefault();
      user_id.classList.remove("hidden");
      overlay.classList.remove("hidden");
      
      overlay.addEventListener("click", () => {
        user_id.classList.add("hidden");
        overlay.classList.add("hidden");
      });
    });
  }
  //
  connex(connexion);
  //
  if(connexion2){
    connex(connexion2);
  }
  
//////////////////////////////////////////////////////////////////////////////////  
// Espace mon compte  
  if(titre_account) {
    titre_account.addEventListener("click", e =>{
      e.preventDefault();
      my_infos.classList.toggle('disparaitre');
    });
  
    titre_account_orders.addEventListener("click", e =>{
      e.preventDefault();
      my_orders.classList.toggle('disparaitre');
    });
  }

//////////////////////////////////////////////////////////////////////////////////  
// Ajouter au panier
  for(let i of bouton_add_panier){
    i.addEventListener("click", e =>{
      panier.classList.remove('disparaitre');
      let formData = new FormData();
      formData.append('prod_id', i.id);
      let obj = { 'method': 'POST', 'body': formData };
      fetch('./ajax/panier.php', obj)
        .then(response => response.text())
        .then(data => {
          panier.innerHTML = data;
          deleteCart();
        })
        .catch(err => console.error(err));
    });
  }
  
// interaction au click sur le logo panier
  bouton_panier.addEventListener("click", e => {
    e.preventDefault();
    panier.classList.toggle('disparaitre');
    fetch('./ajax/panier.php')
      .then(response => response.text())
      .then(data => {
        panier.innerHTML = data;
       
        deleteCart();
      })
      .catch(err => console.error(err));
  });
  
// validation du panier
  if(valider_commande){
    let livraison = document.getElementById('livraison');
    valider_commande.addEventListener("click", e =>{
      e.preventDefault();
      let formData = new FormData(livraison);
      let obj = { 'method': 'POST', 'body': formData };
      livraison_bloc.classList.add('disparaitre');
      
      fetch('./ajax/validation.php', obj)
        .then(response => response.text())
        .then(data => {
          order.innerHTML = data;
        })
        .catch(err => console.error(err));
    });
  }
    
//////////////////////////////////////////////////////////////////////////////////
///////////////////////// Toutes les fonctions //////////////////////////////////
// Nav Burger menu
  function openNav() {
  nav.classList.add("active");
  }
  function closeNav() {
  nav.classList.remove("active");
  }
  
// Compteur d'article et affichage du nombre sur l'icone panier
  function countCart() {
    let bouton_supr_panier = document.querySelectorAll('.bouton_supr_panier');
    let nb = bouton_supr_panier.length;
    let cartBadge = document.getElementById('cartBadge');

    if(nb) {
      cartBadge.innerHTML = bouton_supr_panier.length;
    } else {
      cartBadge.classList.add('disparaitre');
    }
  }
  
// Suppression article du panier
  function deleteCart() {
    let bouton_supr_panier = document.querySelectorAll('.bouton_supr_panier');
    for(let i of bouton_supr_panier) {
      i.addEventListener('click', e =>{
        e.preventDefault();
        let formData = new FormData();
        formData.append('delete_id', i.id);
        let obj = { 'method': 'POST', 'body': formData };
        fetch('./ajax/panier.php', obj)
          .then(response => response.text())
          .then(data => {
            panier.innerHTML = data;
            deleteCart();
          })
          .catch(err => console.error(err));
      });
    }
    countCart();
  }
  
// Gestion de la connexion
  function connex(connex_id) {
    connex_id.addEventListener("submit", e =>{
    e.preventDefault();
    let formData = new FormData(connex_id);
    // appel ajax qui va gérer l'identification
    let obj = { 'method': 'POST', 'body': formData };
    fetch('./ajax/connexion.php', obj)
      .then(response => response.text())
      .then(data => {
        // dans le résultat de l'AJAX si OK on masque la popin et overlay
        if(data=="COK") {
          user_id.classList.add("hidden");
          overlay.classList.add("hidden");
          // si je me co via le panier je refres la page
          if(connex_id.id == 'connexion_2') {
            location.reload();
          }
          bouton_id.addEventListener("click",e =>{
            e.preventDefault();
            account.classList.toggle("visible");
            user_id.classList.add("hidden");
            overlay.classList.add("hidden");
           
          });
       } else {
          // si PASOK affiche un message d'erreur au dessu du formulaire
          erreur.innerHTML += data;
       }
      })
      .catch(err => console.error(err));
    });
  } 

}); 
    
    