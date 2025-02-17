<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact</title>
    <meta name="description" content="Maison de vacances dans le sud sauvage">
    <link rel="stylesheet" href="contact.css">
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

<?php require_once(__DIR__.'/includes/header.php'); ?>
<body>
  <!-- ___________________ section1 ___________ -->
    <section id="section1contact">
        <div id="tete">
            <img src="images site web\ch parent.jpg" alt="">
            <h1>Contact </h1>
        </div>
    </section>
    <!-- ____________ section2 ___________________ -->
<section id="section2contact">
    <div class="containercontact">
        <div style="text-align:center">
          <h2>Contactez-nous</h2>
          <p>Passez prendre un café ou laissez-nous un message :</p>
        </div>
        <div class="row">
          <div class="columninfo">
            <p>Formulaire <br>
              Contactez nous pour toutes les questions sur les gîtes <br>
              ou sur votre réservation. Pour réserver, merci de <br>
              vous rendre sur la page de réservation. <br><br>
              Rendez vous dans les pages de les locations pour voir <br>
                le calendrier des disponibilités de chaque gîte. <br>
                Les conditions générales et mentions légales sont <br>
                accessibles sur celle-ci</p>
              <p></p>
                <div id="coordonneescont">
                  <p>Le Bois d'Arnette - Mr DEVAUD Laurent<br>
                  44 Chemin Neuf<br>
                  97429 Petite-Ile<br>
                  0692 64 65 50 <br>
                  <a href="mailto:leboisdarnette@gmail.com, leboisdarnette@gmail.com">Envoyer un mail</a></p>
                </div>
          </div>
          <div class="column">
          <form method="post" action="submit_contact.php">
          <div class=" input-groupe">
                <label for="nom">Votre nom</label>
                <input type="text" id="nom" name="nom" autocomplete="off" required>
            </div>
            <div class=" input-groupe">
                <label for="email">Votre e-maill</label>
                <input type="mail" id="email-user" name="email" autocomplete="off" required>
            </div>
            <div class=" input-groupe">
                <label for="sujet">Objet</label>
                <input type="text" id="sujet" name="sujet" autocomplete="off" required>
            </div>
            <div class="input-groupe">
                <label for="message">Message</label>
                <input type="textarea" id="message" name="message" required>
            </div>
            <button type="submit">Se connecter</button>
        </form>
          </div>
        </div>
      </div>
</section>
<!-- changer l'adresse de la carte google maps si necessaire -->
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4000.950922283033!2d55.55244937565963!3d-21.369645884750327!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x21780961203353cd%3A0x950e8fbc92397039!2s44%20Chem.%20Neuf%2C%20Petite%20%C3%8Ele%2097429%2C%20La%20R%C3%A9union!5e1!3m2!1sfr!2sfr!4v1732855156014!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

</body>
<?php require_once(__DIR__.'/includes/footer.php'); ?>
</html>