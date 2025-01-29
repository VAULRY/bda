<?php
include 'connex_bdd.php';

$email = $_POST['email'];

// Vérification de l'utilisateur dans la base de données
$sql = "SELECT * FROM utilisateurs WHERE email='$email'";
//$result = $pdo->query($sql);
$stmt = $pdo->prepare($sql);

//if ($result->$num_rows > 0) {
    if ($stmt->execute()) {
    // Générer un token de réinitialisation et l'envoyer par email
    $token = bin2hex(random_bytes(50));
    $reset_link = "http://yourdomain.com/reset_password.php?token=$token";

    // Code pour envoyer l'email (à compléter)
    // mail($email, "Réinitialisation de mot de passe", "Cliquez sur ce lien pour réinitialiser votre mot de passe : $reset_link");

    echo "Un lien de réinitialisation a été envoyé à votre adresse email.";
} else {
    echo "Adresse email non trouvée.";
}

$pdo=null;
?>
