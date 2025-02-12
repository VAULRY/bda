<?php
include 'connex_bdd.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    // password_hash > password_bcrypt = criptage du mot de passe dans la base de donnée php
    $mot_de_passe = password_hash($_POST['mot_de_passe'], PASSWORD_BCRYPT);
    $photo_profil = '';

    // // Gestion du téléchargement de la photo
     if (isset($_FILES['photo_profil']) && $_FILES['photo_profil']['error'] === UPLOAD_ERR_OK) {
        $upload_dir = 'uploads/';
         $file_name = basename($_FILES['photo_profil']['name']);
        $file_tmp = $_FILES['photo_profil']['tmp_name'];
         $target_file = $upload_dir . $file_name;

    //     // Déplacer le fichier téléchargé vers le dossier de destination
        if (move_uploaded_file($file_tmp, $target_file)) {
             $photo_profil = $target_file;
         } else {
             echo "Erreur lors du téléchargement de la photo.";
             exit();
         }
     }

    // Insertion des données de l'utilisateur dans la base de données
    $sql = "INSERT INTO utilisateurs (nom, email, mot_de_passe, photo_profil) VALUES (:nom, :email, :mot_de_passe, :photo_profil)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':mot_de_passe', $mot_de_passe);
    $stmt->bindParam(':photo_profil', $photo_profil);

    if ($stmt->execute()) {
        echo "Inscription réussie!";
        // Rediriger ou afficher un message de succès
    } else {
        echo "Erreur lors de l'inscription.";
    }
}
?>


<br>
<a href="conectinscrip.php">Retour à l'accueil pour se connecter ou s'inscrire</a>