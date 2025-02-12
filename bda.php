
<!DOCTYPE html>
<html lang="fr"> 
  <!-- Définit le type de document comme le HTML5 et le langage principale comme le français -->
<head>
    <meta charset="UTF-8">
    
    <title>Le Bois d'Arnette</title>
    <meta name="viemport" content="width=device, initial-scale=1.0">
    <meta name="description" content="Maison de vacances dans le sud sauvage">
    <link rel="stylesheet" href="bda.css"> 
    <link rel="stylesheet" media="screen and (max-width: 320px)" href="small_screens.css" /> 
    <!--  Définit l'encodage des caractères en UTF-8, permettant d'afficher des caractères spéciaux -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Italiana&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
    
    <!-- Permet de s'assurer que la mise en page est adaptée pour les différents appareils  -->
    
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"rel="stylesheet"/>
</head>
<body>

<!--  POPUP COOKIES -->
   <div class="wrapper">
      <div class="title-box">
        <i class="bx bx-cookie"></i>
        <h3>Consentement aux cookies</h3>
      </div>
      <div class="info">
        <p>
          Ce site Web utilise des cookies pour vous aider à avoir une expérience supérieure et plus pertinente.
          expérience de navigation sur le site Web. <a href="#"> En savoir plus...</a>
        </p>
      </div>
      <div class="buttons">
        <button class="button" id="acceptBtn">Accepter</button>
        <button class="button">Decline</button>
      </div>
    </div>
<!--  POPUP COOKIES -->

<?php require_once(__DIR__.'/includes/header.php'); ?>
  

  <!----------------------- section 1 ----------------------->

<section id="section1bda">
    <div id="vue">
        <div class="imagecontainer">
            <video src="images site web\VIDEO VUE DE HAUT.mp4" autoplay muted loop></video>   
       <div class="image_texte"> Maison de vacances à Grand-Anse le sud sauvage, <br><br><br>
            <h1>Le Bois d'Arnette <br><br><br><br> </h1>        
        </div>
        </div>                       
    </div>
</section>

   <!-------------------- section 2 ------------------>

<section id="section2bda">
    <div id="disponibilites">
        <h1>Cherchez des disponibilités</h1>
        <h3>Réserver votre appartement de vacances au meilleur tarif, en toute sécurité</h3>
    </div>
<div id="recherche">
    
    <a href="reserve.php" target="_blank"><button>Chercher</button></a>
</div>
</section>

  <!--------------- section 3 ----------------->

<section id="section3bda">
    <div id="locations">
        <img src="images site web\nature-morte-inscription-bois-maison-dans-salon_169016-5187.jpg" alt="">
    </div>
    <div id="locationstexte">
        <h3>Nos Locations saisonniéres</h3>
        <h1>Le Bois d'Arnette</h1>
        <p>Nos trois locations  de vacances accueillent jusqu’à   <br>
            4 personnes pour le premier hébergement (2 chambres), <br>
            2 personnes pour le second hébergement (1 chambre) et   <br>
            2 personnes pour le troisième hébergement (1 chambre).<br>
            Nos trois locations saisonnières<br>
             « Takamaka », <br>
            « Benjoin » et <br>
            « Ambaville » <br>
            se trouvent sur le commune de Petite-Ile,<br>            
             à 5mn de la plage de Grand-Anse. Des sentiers de randonnées,<br>
           à 15mn de la capitale du sud Saint-Pierre </p>
                  <div class="decouverte">Découvrez les sites touristiques à proximité du Bois d'Arnette</div>
                  <a class="button_block" rel="nofollow noopener noreferrer" href="https://www.reunion.fr/" title="Grand Anse" target="_blank" onclick="" style="width: auto;">
                    <div class="button_content">
                      <span class="prev_t button_text">La Réunion l'ile intense</span>
                    </div>
                  </a>
                <a class="button_block" rel="nofollow noopener noreferrer" href="https://www.reunion.fr/offres/plage-de-grande-anse-petite-ile-fr-586315/" title="Grand Anse" target="_blank" onclick="" style="width: auto;">
                  <div class="button_content">
                    <span class="prev_t button_text">La plage et le bassin de Grand Anse</span>
                  </div>
                </a>
                  <a class="button_block" rel="nofollow noopener noreferrer" href="https://www.cartedelareunion.fr/listings/cascade-grand-galet-ou-cascade-langevin" title="Langevin" target="_blank" onclick="" style="width: auto;">
                    <div class="button_content">
                      <span class="prev_t button_text">Rivière et cascades de Langevin/Grand Galet</span>
                    </div>
                  </a>
                      <a class="button_block" rel="nofollow noopener noreferrer" href="https://www.google.com/search?q=manapany%20piscine%20naturelle&amp;rlz=1C1OPRB_enRE859RE859&amp;sxsrf=ALiCzsYnRtVUziYmfFhUonwALwC-h6pwKA:1666265945256&amp;ei=2jJRY9vJC47YkgWa-Z7ADg&amp;oq=manapany&amp;gs_lcp=Cgxnd3Mtd2l6LXNlcnAQARgFMgoILhCABBCHAhAUMgoIABCABBCHAhAUMgsILhCABBDHARCvATIFCAAQgAQyCwguEIAEEMcBEK8BMgUIABCABDIFCAAQgAQyBQgAEIAEMgUIABCABDIFCAAQgAQ6BAgjECc6BAguEEM6CggAELEDEIMBEEM6BAgAEEM6BwgAEIAEEAM6CgguEMcBEK8BEEM6EAguELEDEIMBEMcBENEDEEM6BQguEIAEOgsILhCABBCxAxCDAToRCC4QgAQQsQMQgwEQxwEQ0QM6BwguELEDEEM6CAguEIAEELEDOggIABCABBCxA0oECE0YAUoECEEYAEoECEYYAFAAWN85YMxUaABwAXgAgAHMAogB2hKSAQUyLTQuNJgBAKABAcABAQ&amp;sclient=gws-wiz-serp&amp;tbs=lf:1,lf_ui:1&amp;tbm=lcl&amp;rflfq=1&amp;num=10&amp;rldimm=1458943190122291468&amp;lqi=ChptYW5hcGFueSBwaXNjaW5lIG5hdHVyZWxsZUjev4bzkKuAgAhaKBABEAIYACIabWFuYXBhbnkgcGlzY2luZSBuYXR1cmVsbGUqBAgCEAGSARJ0b3VyaXN0X2F0dHJhY3Rpb26aASRDaGREU1VoTk1HOW5TMFZKUTBGblNVUkhlRXA1YjNwUlJSQUI&amp;phdesc=DMusndVZSp0&amp;ved=2ahUKEwjOr5Ku3O76AhVChqQKHeB3BoUQvS56BAgWEAE&amp;sa=X&amp;rlst=f#rlfi=hd:;si:1458943190122291468,l,ChptYW5hcGFueSBwaXNjaW5lIG5hdHVyZWxsZUjev4bzkKuAgAhaKBABEAIYACIabWFuYXBhbnkgcGlzY2luZSBuYXR1cmVsbGUqBAgCEAGSARJ0b3VyaXN0X2F0dHJhY3Rpb26aASRDaGREU1VoTk1HOW5TMFZKUTBGblNVUkhlRXA1YjNwUlJSQUI,y,DMusndVZSp0;mv:[[-21.3095173,55.6448371],[-21.3768817,55.585060899999995]];tbs:lrf:!1m4!1u2!2m2!2m1!1e1!2m1!1e2!3sIAE,lf:1,lf_ui:1" title="Manapany" target="_blank" onclick="" style="width: auto;">
                        <div class="button_content">
                          <span class="prev_t button_text">Le bassin eau de mer de Manapany</span>
                        </div>
                      </a>
                        <a class="button_block" rel="nofollow noopener noreferrer" href="https://fournaise.info/" title="Le piton de la Fournaise" target="_blank" onclick="" style="width: auto;">
                          <div class="button_content">
                            <span class="prev_t button_text">Le Volcan</span>
                          </div>
                        </a>
    </div>
</section>

  <!---------------------- section 4 ------------------>

<section id="section4bda">
  <main>
    <ul class='slider'>
      <li class='item' style="background-image: url('images site web/20240316_185405.jpg')">
        <div class='content'>
          <h2 class='title'>"Le Bois d'Arnette"</h2>
          <p class='description'> Cottège composé de 3 logements. 
            Au rez de chaussée logement pouvant accueillir une famille avec deux enfants. A l'étage deux studio pouvant accueillir couple ou personne seule.  </p>
          
        </div>
      </li>
      <li class='item' style="background-image: url('images site web/CUISINE.jpg')">
        <div class='content'>
          <h2 class='title'>"Cuisine"</h2>
          <p class='description'> Cuisines équipées et fonctionnelles.  </p>
          
        </div>
      </li>
      <li class='item' style="background-image: url('images site web/ch parent.jpg')">
        <div class='content'>
          <h2 class='title'>"Les chambres"</h2>
          <p class='description'> confortables.  </p>
         
        </div>
      </li>
      <li class='item' style="background-image: url('images site web/ENTETECGV.jpg')">
        <div class='content'>
          <h2 class='title'>"Salons"</h2>
          <p class='description'>
            Agréables.
          </p>
          
        </div>
      </li>
      <li class='item' style="background-image: url('images site web/portrait-happy-young-latin-couple-enjoying-having-dinner-new-home-lifestyle-relationship-concept.jpg')">
        <div class='content'>
          <h2 class='title'>"Chez soi"</h2>
          <p class='description'>
            Dans les logements du Bois d'Arnette vous vous sentirez comme chez-Vous.
          </p>
          
        </div>
      </li>
      <li class='item' style="background-image: url('images site web/varangue (2).jpg')">
        <div class='content'>
          <h2 class='title'>"La varangue du rez chaussée"</h2>
          <p class='description'> La pièce ou on peut vivre véritablement à l'extérieur.  </p>
         
        </div>
      </li>
    </ul>
    <nav class='nav'>
      <ion-icon class='btn prev' name="arrow-back-outline"></ion-icon>
      <ion-icon class='btn next' name="arrow-forward-outline"></ion-icon>
    </nav>
</section>

      
    <!-- test carousel -->
     <section id="carousel">

    
    <div id="wrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <h3 class="review-title text-center">Commentaires voyageurs</h3>

                <div class="row">
                    <div class="col-lg-12">

                        <div class="row">
                            <div class="col-md-12">

                                <div class="carousel slide hidden-sm hidden-xs" id="testiCarousel" data-ride="carousel">

                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4">
                                                    <div class="review-card review-card--option-1 text-center">
                                                        <div class="review-card-img">&nbsp;</div>
                                                        <div class="review-author">
                                                            <span class="ra-author">Isemène - Juillet 2024</span>
                                                            <ul class="ra-rating-star">
                                                                <li><i class="material-icons">&#xE838;</i></li>
                                                                <li><i class="material-icons">&#xE838;</i></li>
                                                                <li><i class="material-icons">&#xE838;</i></li>
                                                                <li><i class="material-icons">&#xE838;</i></li>
                                                                <li><i class="material-icons">&#xE839;</i></li>
                                                            </ul>
                                                        </div>
                                                        <div class="review-content">
                                                            <p>Le logement est très agréable , <br>
                  même si la route est relativement passante, 
                  (mais les nuits sont calmes). 
                  Tout est conforme à l’annonce, c’est propre, 
                  joliment décoré; la literie est bonne,  
                  l’espace extérieur est très agréable. 
                  Emplacement idéal pour aller à la plage de Grande Anse 
                  et à 1h30 de route du Pas de Bellecombe (volcan). 
                  Laurent est très réactif, merci pour tout ! </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4">
                                                    <div class="review-card review-card--option-1 text-center">
                                                        <div class="review-card-img">&nbsp;</div>
                                                        <div class="review-author">
                                                            <span class="ra-author">Paul - avril 2024</span>
                                                            <ul class="ra-rating-star">
                                                                <li><i class="material-icons">&#xE838;</i></li>
                                                                <li><i class="material-icons">&#xE838;</i></li>
                                                                <li><i class="material-icons">&#xE838;</i></li>
                                                                <li><i class="material-icons">&#xE838;</i></li>
                                                                <li><i class="material-icons">&#xE839;</i></li>
                                                            </ul>
                                                        </div>
                                                        <div class="review-content">
                                                            <p>La maison est parfaitement située, <br>
                très proche de grande Anse, 
                une des plus belles plages de l’île. 
                La cuisine est bien équipée, 
                la salle de bain est parfaite. 
                La terrasse couverte permet de manger dehors, 
                même avec une mauvaise météo! </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4">
                                                    <div class="review-card review-card--option-1 text-center">
                                                        <div class="review-card-img">&nbsp;</div>
                                                        <div class="review-author">
                                                            <span class="ra-author">Véronique - octobre 2024</span>
                                                            <ul class="ra-rating-star">
                                                                <li><i class="material-icons">&#xE838;</i></li>
                                                                <li><i class="material-icons">&#xE838;</i></li>
                                                                <li><i class="material-icons">&#xE838;</i></li>
                                                                <li><i class="material-icons">&#xE838;</i></li>
                                                                <li><i class="material-icons">&#xE839;</i></li>
                                                            </ul>
                                                        </div>
                                                        <div class="review-content">
                                                            <p>Séjour de plus d'une semaine <br>
Très beau logement ,belle terrasse abritée ,
Bien situé pour la visite de l’île ,environ 1h30 de l’aéroport
En journée, il y a pas mal de circulation dans la rue qui passe devant la terrasse …
Logement à recommander
 </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4">
                                                    <div class="review-card review-card--option-1 text-center">
                                                        <div class="review-card-img">&nbsp;</div>
                                                        <div class="review-author">
                                                            <span class="ra-author">Erika - aout 2024</span>
                                                            <ul class="ra-rating-star">
                                                                <li><i class="material-icons">&#xE838;</i></li>
                                                                <li><i class="material-icons">&#xE838;</i></li>
                                                                <li><i class="material-icons">&#xE838;</i></li>
                                                                <li><i class="material-icons">&#xE838;</i></li>
                                                                <li><i class="material-icons">&#xE839;</i></li>
                                                            </ul>
                                                        </div>
                                                        <div class="review-content">
                                                            <p>Logement conforme à la description, propre et très bien équipé. <br>
A 5 min en voiture de la belle plage de La Grande Anse. Appartement très bien situé permettant d'accéder à différents sites de visite (Cilaos: randonnée de la chapelle, bassin du Fouquet, cascade Bras rouge, Piton de la Fournaise, Routes des laves, Cap Jaune, Cascade Langevin, Musée du Volcan et Musée de la saga du rhum...)
Bonne communication avec le propriétaire qui nous a donnés toutes les informations nécessaires pour notre arrivée.
Nous recommandons ce logement qui peut être un bon point de chute pour visiter une bonne partie de l'île.
 </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4">
                                                    <div class="review-card review-card--option-1 text-center">
                                                        <div class="review-card-img">&nbsp;</div>
                                                        <div class="review-author">
                                                            <span class="ra-author">Audrey - avril 2024</span>
                                                            <ul class="ra-rating-star">
                                                                <li><i class="material-icons">&#xE838;</i></li>
                                                                <li><i class="material-icons">&#xE838;</i></li>
                                                                <li><i class="material-icons">&#xE838;</i></li>
                                                                <li><i class="material-icons">&#xE838;</i></li>
                                                                <li><i class="material-icons">&#xE839;</i></li>
                                                            </ul>
                                                        </div>
                                                        <div class="review-content">
                                                            <p>Séjour de quelques nuits <br>
La maison est vraiment mignonne et bien aménagée.
Près de la plage de Grand Anse, ce qui est très appréciable.
Maison en bord de route, pas mal de passage donc un peu de bruit.
Je dirais qu’il manque un lave-vaisselle, pour avoir cette charge en moins.
Hôte disponible et réactif
 </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4">
                                                    <div class="review-card review-card--option-1 text-center">
                                                        <div class="review-card-img">&nbsp;</div>
                                                        <div class="review-author">
                                                            <span class="ra-author">Resan - juin 2023</span>
                                                            <ul class="ra-rating-star">
                                                                <li><i class="material-icons">&#xE838;</i></li>
                                                                <li><i class="material-icons">&#xE838;</i></li>
                                                                <li><i class="material-icons">&#xE838;</i></li>
                                                                <li><i class="material-icons">&#xE838;</i></li>
                                                                <li><i class="material-icons">&#xE839;</i></li>
                                                            </ul>
                                                        </div>
                                                        <div class="review-content">
                                                            <p>Séjour de quelques nuits <br>
Cuisine très bien équipée. les repas peuvent se prendre en intérieur et extérieur. 
La voiture se gare dans la cour. point de départ pour découvrir le sud et est de l'île.
 </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <a class="left carousel-control" href="#testiCarousel" data-slide="prev"><i class="material-icons">&#xE5CB;</i></a>
                                    <a class="right carousel-control" href="#testiCarousel" data-slide="next"><i class="material-icons">&#xE5CC;</i></a>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        </section>
     <!-- test carousel -->

  <!-- ----------------section 6---------- -->
<section id="section6bda">
    <div id="corps">
        <div class="corps1">
            <a href="leslocations.php" target="_blank"><img src="images site web\chambre.jpg" alt=""></a>
            <h3>TAKAMAKA<br><p>Disponible</p></h3> <br>
            <ul style="list-style-type:square;">
              <li>1km de la plage</li>
              <li>Surface 100 m²</li>
              <li>2 chambres</li>
              <li>4 personnes</li>
              <li>Vue sur le jardin</li>
              <li>Jardin clos de 200 m²</li>
            </ul>
        </div>
        <div class="corps1">
          <a href="indexerreur.php"target="_blank"><img src="images site web\gros-plan-petit-dejeuner-romantique-au-lit_23-2150956525.jpg" alt="" ></a>
            <h3>BENJOIN <br><p>Disponible fin 2025</p></h3> <br>
            
            <ul style="list-style-type:square;">
              <li>1km de la plage</li>
              <li>Surface 50 m²</li>
              <li>1 chambre</li>
              <li>1 personne</li>
              <li>Vue sur montagne <br> et l'océan</li>
              <li>Balcon</li>
            </ul>
        </div>
            <div class="corps1">
              <a href="indexerreur.php" target="_blank"><img src="images site web\Salonmoderne.jpg" alt="" ></a>
                <h3>AMBAVILLE<br><p>Disponible fin 2025</p></h3> <br>
                <ul style="list-style-type:square;">
                <li>1km de la plage</li>
              <li>Surface 50 m²</li>
              <li>1 chambre</li>
              <li>1 personne</li>
              <li>Vue sur montagne <br> et l'océan</li>
              <li>Balcon</li>
                </ul>
            </div>
        </div>
</section>

<?php require_once(__DIR__.'/includes/footer.php'); ?>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        <script src="bda.js"></script>
        <script type="text/javascript" src="connexion.js"></script>
        <!-- carousel -->
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
        <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
        <script  src="./scriptbdacarousel.js"></script>
        <!-- les cookies -->
        <script  src="./scriptcookies.js"></script>
        
</body>
</html>