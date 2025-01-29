<?php 
include 'connex_bdd.php';
?>
<!DOCTYPE HTML>
<html>
  <head>
    <title>Réinitialiser la mot de passe</title>
    <link rel="stylesheet" href="recup_mdp.css">
  </head>
  <body>
  <?php require_once('includes/header.php'); ?>
<section>
        <div class="box">
         <div class="container"> 
          <div class="form"> 
            <h2>Récupérer le mot de passe</h2>
            <p>Remplissez le formulaire ci-dessous pour recevoir un nouveau mot de passe:</p><br>
            <form action="send_password_reset.php" method="POST">
              <div class="inputBx">
                <input type="email" id="email" name="email" autocomplete="off" required>  
                <span>Votre mail...</span>
                <!-- required permet d'empêcher l'envoi du formulaire si le champ est vide -->
                <i class="fas fa-user-circle"></i>
              </div>
              <div class="inputBx">
                <button type="submit">Evoyer le lien de réinitialisation</button>
              </div>
            </form>
            <a href="connexion.php">Retour accueil</a>
          </div>
        </div>
        </div>
      </section>
  </body>
</html>