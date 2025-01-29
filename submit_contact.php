<?php
include 'connex_bdd.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $sujet = $_POST['sujet'];
    $message = $_POST['message'];

    $sql = "INSERT INTO messages_contact (nom, email, sujet, message) VALUES (:nom, :email, :sujet, :message)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':sujet', $sujet);
    $stmt->bindParam(':message', $message);

    if ($stmt->execute()) {
        echo "Message envoyé avec succès!";
    } else {
        echo "Erreur lors de l'envoi du message.";
    }
}
?>

<br>
<a href="bda.php">Retour à l'accueil pour se connecter ou s'inscrire</a>