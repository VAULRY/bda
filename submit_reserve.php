<?php
include 'connex_bdd.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $telephone = $_POST['telephone'];
    $email = $_POST['email'];
    $date_entre = $_POST['date_entre'];
    $date_depart = $_POST['date_depart'];
    $logement = $_POST['logement'];
    $nombre_voyageur = $_POST['nombre_voyageur'];
    $litbebe = $_POST['litbebe'];
    $chaisehaute = $_POST['chaisehaute'];
    $nettoyage = isset($_POST['nettoyage']) ? $_POST['nettoyage'] : 0; // Attribuer une valeur par défaut si la case n'est pas cochée
    $total = $_POST['total'];

     // Vérifiez les données reçues
     var_dump($_POST);

     if (empty($total)) {
        die("Erreur: La valeur de 'total' est vide.");
    }

    if (!is_numeric($total)) {
        die("Erreur: La valeur de 'total' doit être un nombre.");
    }
    
    $sql = "INSERT INTO reservation (nom, telephone, email, date_entre, date_depart, logement, nombre_voyageur, litbebe, chaisehaute, nettoyage, total) VALUES (:nom, :telephone, :email, :date_entre, :date_depart, :logement, :nombre_voyageur,:litbebe, :chaisehaute, :nettoyage, :total)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':telephone', $telephone);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':date_entre', $date_entre);
    $stmt->bindParam(':date_depart', $date_depart);
    $stmt->bindParam(':logement', $logement);
    $stmt->bindParam(':nombre_voyageur', $nombre_voyageur);
    $stmt->bindParam(':litbebe', $litbebe);
    $stmt->bindParam(':chaisehaute', $chaisehaute);
    $stmt->bindParam(':nettoyage', $nettoyage);
    $stmt->bindParam(':total', $total); 
   
    
    if ($stmt->execute()) {
        echo "Réservation envoyé avec succès!";
    } else {
        echo "Erreur lors de l'envoi du message.";
    }
}
?>

<br>
<a href="bda.php">Retour à l'accueil </a>

