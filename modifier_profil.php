
<!DOCTYPE HTML>
<html>
  <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modifier votre profil</title>
    <link rel="stylesheet" href="modifier_profil.css">
  </head>

  <body>
  

  <?php require_once('includes/header.php'); ?>
 <main>
<section id="espace_user">
    <h2>Vos informations</h2>
    <form action="modification.php" method="POST">

    <div class="input-groupe">
                <label for="id">Identifiant</label>
                <input type="text" placeholder="Votre identifiant" name="id" value="<?php echo htmlspecialchars($_SESSION['utilisateur_id']); ?>"disabled>
    </div>
    <div class="input-groupe">
                <label for="login-username">Nom d'utilisateur</label>
                <input type="text" placeholder="Votre utilisateur" name="nom" value="<?php echo htmlspecialchars($_SESSION['utilisateur_nom']); ?>">
    </div>
    
    <div class="input-groupe">
                <label for="login-username">Email</label>
                <input type="text" placeholder="Votre Email" name="email" value="<?php echo htmlspecialchars($_SESSION['utilisateur_email']); ?>">
    </div>
    
    <div class="input-groupe">
                 <label for="photo_profil">Photo de profil:</label>
                 <input type="file" id="photo_profil" name="photo_profil" value="<?php echo htmlspecialchars($_SESSION['photo_profil']); ?>">
            </div>
    
 
    <img src="<?php echo htmlspecialchars($_SESSION['photo_profil']); ?>" alt="">
    <button type="submit" id="deco" href="deconnexion.php">Se déconnecter</button>
    <button type="submit" id="decomod" href="modifier_profil.php">Modifier</button>
    
    </form>
</section>
</main>
<?php require_once('includes/footer.php'); ?>
</body>
</html>