<!DOCTYPE html>
<html lang="fr"> 
  <!-- Définit le type de document comme le HTML5 et le langage principale comme le français -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bda.css"> 
    <!--  Définit l'encodage des caractères en UTF-8, permettant d'afficher des caractères spéciaux -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Italiana&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="espace_user.css">
    <title>Bienvenue sur votre espace</title>
    <meta name="description" content="Maison de vacances dans le sud sauvage">
</head>
<html>
<body>
    

<?php require_once('includes/header.php'); ?>
 <main>
<section id="espace_user">
    <h2>Vos informations</h2>
    <p>Nom d'utilisateur : <?php echo htmlspecialchars($_SESSION['utilisateur_nom']); ?> </p>
    <p>Email : <?php echo htmlspecialchars($_SESSION['utilisateur_email']); ?> </p>
    <img src="<?php echo htmlspecialchars($_SESSION['photo_profil']); ?>" alt="">
    <a id="deco" href="deconnexion.php">Se déconnecter</a>
    <a id="decomod" href="modifier_profil.php">Modifier</a>
</section>
</main>
<?php require_once('includes/footer.php'); ?>
</body>
</html>