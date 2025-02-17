<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Italiana&display=swap" rel="stylesheet">
    <title>Les Locations</title>
    <meta name="description" content="Maison de vacances dans le sud sauvage">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/particlesjs/2.2.3/particles.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    <!-- fullcalendar -->
    <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/core@6.1.15/index.global.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/daygrid@6.1.15/index.global.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/interaction@6.1.15/index.global.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/@fullcalendar/multimonth@6.1.15/index.global.min.js'></script>
    <script src='fullcalendar/core/locales-all.global.js'></script>
    
    <link rel="stylesheet" href="leslocations.css">
</head>
<body>
 
<?php require_once(__DIR__.'/includes/header.php'); ?>


    <!-- _________________________ section1 ____________________ -->
    <section class="nav" id="section1locations">
    <!-- <section id="section1"> -->
      
        <div id="tete">
            <img src="images site web\entetetakamaka.jpg" alt="">
            <h1>TAKAMAKA</h1>
            <a href="contact.php" target="_blank"><button>Des questions ?<br>
              Ecrivez-nous</button></a>
        </div>
        <div class="nav-container">
          <a class="nav-tab" href="#section1locations">Takamaka</a>
          <a class="nav-tab" href="#tab-svelte">Introduction</a>
          <a class="nav-tab" href="#tab-esbuild">Chambre</a>
          <a class="nav-tab" href="#tab-typescript">Cuisine</a>
          <a class="nav-tab" href="#tab-vite">Varangue</a>
          <a class="nav-tab" href="#section7">Calendrier</a>
          <span class="nav-tab-slider"></span>
        </div>
    </section>
    <main class="main">
    <!-- _________________________ section2 ____________________ -->

  <section class="slider" id="tab-svelte">
    <div class="contenu">
    <div class="row">
    <div class="columninfo">
            <p> Une retraite confortable et moderne au charme intemporel. <br>
                Découvrez cette maison entièrement rénovée, <br>
                où authenticité et modernité se rencontrent pour créer un
                cocon idéal pour vos vacances. <br>Nichée dans un cadre
                paisible, de plein pied, cette demeure de 40 ans a été
                métamorphosée pour offrir un confort exceptionnel
                tout en préservant son âme d’antan.</p>
      </div>
      <div class="columninfo">
        <p>Des espaces confortables et accueillants <br>
            Dès votre entrée, vous serez charmé par un grand salon à l’ambiance tamisée, parfait pour des moments de convivialité ou de détente. <br>
            Les tons apaisants et la décoration soignée créent une ambiance chaleureuse où vous vous sentirez immédiatement chez vous.</p>
      </div>
    </div>
</div>
</section>

<!-- _________________________ section3 ____________________ -->
<section class="slider" id="tab-esbuild">
    <div id="takamaka">
        <p> Des chambres cosy et élégantes <br>
            La maison dispose de deux chambres spacieuses : <br>
             . Une chambre parentale avec un grand lit accueillant, parfaite pour des nuits réparatrices. <br>
             . Une seconde chambre équipée de deux lits individuels, idéale pour les enfants ou des amis, avec une atmosphère harmonieuse et reposante.</p>
                
               <div class="puce">
                <ul style="list-style:square">
                  <li>. 2 Chambres</li>
                  <li>. 1 salle d'eau</li>
                  <li>. Lave-linge</li> 
                  <li>. Four</li>       
              </ul>
              <ul style="list-style: square;">
                <li>. TV</li>
                <li>. Wifi</li>
                <li>. Cuisine équipée</li>
              </ul>
               </div> 
    </div>
          <div id="rdctakamaka">
            <div class="slider">
              <div class="slider__slide slider__slide--active" data-slide="1">
                <div class="slider__wrap">
                  <div class="slider__back"></div>
                </div>
                <div class="slider__inner">
                  <div class="slider__content">
                    <h2>Les chambres <br></h2><a class="go-to-next">suivant</a>
                  </div>
                </div>
              </div>
              <div class="slider__slide" data-slide="2">
                <div class="slider__wrap">
                  <div class="slider__back"></div>
                </div>
                <div class="slider__inner">
                  <div class="slider__content">
                    <h2>Les chambres <br></h2><a class="go-to-next">suivant</a>
                  </div>
                </div>
              </div>
              <div class="slider__slide" data-slide="3">
                <div class="slider__wrap">
                  <div class="slider__back"></div>
                </div>
                <div class="slider__inner">
                  <div class="slider__content">
                    <h2>Les chambres <br></h2><a class="go-to-next">suivant</a>
                  </div>
                </div>
              </div>
              <div class="slider__indicators"></div>
            </div>
            </div>
</section>

<!-- _________________________ section4 ____________________ -->
<section class="slider" id="tab-next">
    <div id="reserver">
    <a href="reserve.php" target="_blank"><button>Réserver TAKAMAKA</button></a>
  </div>
</section>

<!-- _________________________ section5 ____________________ -->
<section class="slider" id="tab-typescript">
          <div id="cuisinetakamaka">
            <img src="images site web\CUISINE.jpg" alt="">
            </div>
            <div id="cuistakamaka">
                <p> Une cuisine moderne et équipée <br>
                    La cuisine, entièrement rénovée, est pensée pour les amateurs de <br>gastronomie.
                    Dotée de toutes les commodités modernes, elle vous <br>
                    permettra de préparer vos repas en toute simplicité, que ce soit pour <br>
                    un petit-déjeuner sur le pouce ou un dîner savoureux à partager.</p>
                        
                   <div class="puce">
                    <ul style="list-style:square">
                      <li>. BBQ</li>
                      <li>. Parking privé</li>
                  </ul>
                  <ul style="list-style: square;">
                    <li>. Patio et jardin</li>
                    <li>. Jaccuzzi</li>
                  </ul>
                   </div>    
            </div>
</section>

<!-- _________________________ section6 ____________________ -->
<section class="slider" id="tab-vite">
    <div id="varangtakamaka">
        <p> Une varangue pour des moments inoubliables <br>
            Le véritable bijou de cette maison est sa vaste varangue, un espace extérieur couvert, où vous pourrez profiter de l’air frais, que ce soit pour un café matinal, un apéritif au coucher du soleil ou une soirée à la belle étoile. Mobilier confortable et vue arborée ajoutent une touche d’exception à cet espace de vie en plein air. <br>
            Que ce soit pour une escapade en famille ou entre amis, cette maison rénovée vous promet des souvenirs inoubliables, entre confort moderne et charme d’une maison de caractère. <br>
            Réservez dès maintenant pour vivre l'expérience d'une sérénité absolue dans un cadre enchanteur.</p>
                
    </div>
</section>
<!-- _________________________ section7 ____________________ -->

<section class="slider" id="section7">
        <div id="checkinouttakamaka">
            <h1>Calendrier</h1>
            <h1>Disponibilités "TAKAMAKA"</h1>
            <!-- _________________________ calendrier debut____________________ -->
            <div class="containerloc">
            <div id='calendar'>
            <script src='calendrier.js'></script>
           </div>
            </div>

             <!-- _________________________ calendrier fin ____________________ -->
            <div id="disponible">
              <span class="active">00</span>
              <p>non disponible</p>
            </div>
            <div id="paragraphe">
              <a href="mentionscgvcgu.html" target="_blank">Télécharger les mentions légales</a>
              <a href="mentionscgvcgu.html" target="_blank">Télécharger le règlement intérieur</a>
           </div>
            </div>
            <div id="checktakamaka">
              <h1>Entrée - Sortie</h1>
                <p>Départ avant 10h et arrivée au plus tôt à 15h. <br></p>
              <h1>Paiement</h1>      
                <p>Acompte 50% en ligne, solde 30 j avant l’arrivée </p>
              <h1>Services</h1>      
                <p>ménage de fin de séjour (45 €). <br>
                   Lit parapluie  (gratuit sur demande à la réservation)
                   baignoire bébé (gratuit sur demande à la réservation)
                   Chaise haute bébé (gratuit sur demande à la réservation)</p>
            </div>
</section>
</main>
    <!-- <footer></footer> -->
    <?php require_once(__DIR__.'/includes/footer.php'); ?>
   
    <!-- JS pour scroll dans la page -->
    <canvas class="background"></canvas>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
    <script  src="./leslocations.js"></script>

    <!-- JS pour changement photos section 3 -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'>
    </script><script  src="./script.js"></script>


  </body>
</html>