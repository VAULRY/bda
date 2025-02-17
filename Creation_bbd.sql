-- Créer la base de données
CREATE DATABASE location;

-- Utiliser la base de données
USE location;

-- Créer la table des utilisateurs
CREATE TABLE utilisateurs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    mot_de_passe VARCHAR(255) NOT NULL,
    photo_profil VARCHAR(255),
    date_inscription TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Créer la table des messages de contact
CREATE TABLE messages_contact (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    sujet VARCHAR(100) NOT NULL,
    message TEXT NOT NULL,
    date_envoi TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Créer la table des messages de contact
CREATE TABLE reservation (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50) NOT NULL,
    telephone varchar(15) not null,
    email VARCHAR(100) NOT NULL,
    date_entre TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    date_depart TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    logement VARCHAR(50) NOT NULL,
    nombre_voyageur VARCHAR(10)not null,
    total decimal(8,2) NOT NULL,
    date_envoi TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);



-- Créer la table des prestations
CREATE TABLE prestations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50) NOT NULL,
    prix decimal(8,2) NOT NULL,
    description VARCHAR(50) NOT NULL,
    photo VARCHAR(255),
    date_inscription TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);