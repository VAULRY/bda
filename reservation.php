<?php
include 'connex_bdd.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $telephone = $_post['telephone'];
    $email = $_POST['email'];
    $date_entre = $_post['date_entre'];
    $date_depart = $_post['date_depart'];
    $logement = $_post['logement'];
    $nombre_voyageur = $_post['nombre_voyageur'];
    $montant_ttc = $_post['montant_ttc'];
    $date_envoi = $_post['date_envoi'];

    

    // Insertion des données de l'utilisateur dans la base de données
    $sql = "INSERT INTO reservation (nom, telephone, email, date_entre, date_depart, logement, nombre_voyageur, montant_ttc, date_envoi) VALUES (:nom, :telephone, :email, :date_entre, :date_depart, :logement, :nombre_voyageur, :montant_ttc, :date_envoi)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':telephone', $telephone);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':date_entre', $date_entre);
    $stmt->bindParam(':date_depart', $date_depart);
    $stmt->bindParam(':logement', $logement);
    $stmt->bindParam(':nombre_voyageur', $nombre_voyageur);
    $stmt->bindParam(':montant_ttc', $montant_ttc);
    $stmt->bindParam(':date_envoi', $date_envoi);
   

    if ($stmt->execute()) {
        echo "Reservation réussie!";
        // Rediriger ou afficher un message de succès
    } else {
        echo "Erreur lors de l'inscription.";
    }
}
?>


<br>
<a href="conectinscrip.php">Retour à l'accueil pour se connecter ou s'inscrire</a>