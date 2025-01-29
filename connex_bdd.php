<?php
    $dsn = 'mysql:host=localhost;dbname=location';
    $username = 'root';
    $password = '';

    try {
        $pdo = new PDO($dsn, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
    } catch (PDOException $e) {
        echo "Échec de la connexion: " . $e->getMessage();
        die();
    }
?>