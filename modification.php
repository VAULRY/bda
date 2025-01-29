<?php
    include 'connex_bdd.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //$id = $_POST['id'];
        $nom = $_POST['nom'];
        $email = $_POST['email'];
        $photo_profil = $_POST['photo_profil'];

        // Requête pour vérifier si l'utilisateur existe et récupérer ses informations
        $sql = "SELECT * FROM utilisateurs WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $utilisateur = $stmt->fetch(PDO::FETCH_ASSOC);
    }
    //try {
    //$sql = "UPDATE utilisateurs (nom, email, photo_profil) VALUES (:nom, :email, :photo_profil)WHERE id=$id";
        $sql = "ALTER TABLE utilisateurs SET nom=$nom, email=$email, photo_profil=$photo_profil WHERE id=$id";
        //$stmt = $pdo->prepare($sql);
       //$stmt->bindParam(':nom', $nom);
        //$stmt->bindParam(':email', $email);
        //$stmt->bindParam(':photo_profil', $photo_profil);
       

        if ($stmt->execute()) { 
           echo "Enregistrement de vos modification est un succès!";
        } else {
            echo "Erreur problème de connexion.";
        }
         
    //} catch(PDOException $e){
           // echo "Erreur : " . $e->getMessage();
       // }
?>



<a href="espace_user.php">Retour à l'accueil pour se connecter ou s'inscrire</a>