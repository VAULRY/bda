
<!DOCTYPE HTML>
<html>
  <head>
    <title>Connexion</title>
    <link rel="stylesheet" href="conectinscrp.css">
    
  </head>

  <body>
  

<?php require_once('includes/header.php'); ?>

<section>     
    <div class="container" id="zone-connexion">
        <!-- <div id="ret"> -->
        <form action="connexion.php" method="POST">
        <h2>Connexion</h2>
        <br>
            <div class="input-groupe">
                <br>
                <label for="login-username">Nom d'utilisateur</label>
                <input type="text" id="login-username" autocomplete="off" name="nom" required>
            </div>
            <div class="input-groupe">
                <br><br>
                <label for="login-password">
                <input type="password" placeholder="Mot de passe" id="login-password" autocomplete="off" name="mot_de_passe" required>
            <div class="password-icon">
                <i data-feather="eye"></i>
                <i data-feather="eye-off"></i>
            </div>
                </label>
            <script src="https://unpkg.com/feather-icons"></script>
            <script>
                feather.replace();
            </script>

            </div>
          
            <br><br>
            <div class="bout">
            <a href="espace_user.php"><button type="submit">Se connecter......</button></a>
            </div><br>
            <div class="bout">
            <a href="recup_mdp.php" target="_blank"><button>Mot de passe oublié.....</button></a>
            </div>
            <!-- <button type="submit">Se connecter  </button><br><br>   -->
        </form>
       
        <!-- </div> -->
    </div>
    
          
    <div class="container" id="zone-inscription">
        
        <form action="inscription.php" method="POST" enctype="multipart/form-data">
        <h2>Inscription</h2><br>
            <div class="input-groupe">
                <label for="register-username">Nom d'utilisateur </label>
                
                <input type="text" id="register-username" autocomplete="off" name="nom" required>
            </div>
            <div class="input-groupe">
                <br>
            <label for="register-password">
                <input type="password" placeholder="Mot de passe" id="register-password" autocomplete="off" name="mot_de_passe" required>
            <div class="password-icon">
                <i data-feather="eye"></i>
                <i data-feather="eye-off"></i>
            </div>
            </label>
            <script src="https://unpkg.com/feather-icons"></script>
            <script>
                feather.replace();
            </script>
            </div>
            <div class="input-groupe">
                <br>
                <label for="register-email">Email</label>
                <input type="email" id="register-email" autocomplete="off" name="email" required>
            </div>

            <div class="input-groupe">
                <br>
                <label for="photo_profil">Photo de profil:</label>
                <br> 
                <input type="file" id="photo_profil" name="photo_profil" required>
            </div>
            <br>

            <button type="submit">S'inscrire .....</button>
        </form>
    </div>
    
   

</section>


<script src="visible.js"></script>
</body>
</html>