

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Italiana&display=swap" rel="stylesheet">
    <title>Réserver</title>
    <meta name="description" content="Maison de vacances dans le sud sauvage">
    <link rel="stylesheet" href="reserve.css">
</head>

<body>
<?php require_once(__DIR__.'/includes/header.php'); ?>
    <main>
    <!----------------------- section 1 IMAGE----------------------->
    <section id="section1reserver">
            <div id="tetereserv">
                <img src="images site web\20240316_185405.jpg" alt="">
                <h1>Réservation</h1>
            </div>
    </section>
     <!----------------------- section 2----------------------->
    <!--  formulaire réservation hotel -->
<section id="reservationhotel">
<div class="container">
            <div class="header">
                <h1>Cherchez des disponibilités</h1>
                <p>Réserver votre appartement de vacances au meilleur tarif, en toute sécurité</p>
            </div>
            <!-- <form class="booking-form" id="bookingForm"> -->
            <!-- <form action="submit_reserve.php" method="POST" class="booking-form" id="bookingForm"> -->
            <form action="submit_reserve.php" method="POST" >
            <div class="booking-form" id="bookingForm">
            <div class="room-preview">
                <img src="images site web\chambre parentale2.jpg" alt="Room Preview" id="roomPreview">
                <h3 id="roomTitle">Le Bois d'Arnette</h3>
                <p id="roomDescription">Rez de chaussée du cottage le Bois d'Arnette, Takamaka est récemment restauré ,    <br>
                vous trouverez le confort et la sérénité propices au repos et à la découverte. <br>
                </p>
            </div>
            
            <!-- <form action="submit_reserve.php" method="POST" enctype="multipart/form-data"> -->
            <!-- <form action="submit_reserve.php" method="POST"> -->
            <div id="choix">
            <div class="form-group">
                <label for="checkIn">Date d'arrivéé</label>
                <input type="date" id="checkIn" autocomplete="off" name="date_entre" required>
                <div class="error" id="checkInError">Veuillez sélectionner une date d'arrivée valide
                </div>
            </div>

            <div class="form-group">
                <label for="checkOut">Date de départ</label>
                <input type="date" id="checkOut" autocomplete="off" name="date_depart" required>
                <div class="error" id="checkOutError">Veuillez sélectionner une date de départ valide
                </div>
            </div>
            <div class="form-group">
                <label for="roomType">Type de logement</label>
                <select id="roomType" autocomplete="off" name="logement" required>
                    <option value="">Selectionner votre logement</option>
                    <option value="takamaka">TAKAMAKA</option>
                    <option value="benjoin">BENJOIN</option>
                    <option value="ambaville">AMBAVILLE</option>
                </select>
                <div class="error" id="roomTypeError">Veuillez sélectionner un type de logement
                </div>
            </div>
            <div class="form-group">
                <label for="guests">Nombre de voyageur</label>
                <select id="guests" autocomplete="off" name="nombre_voyageur" required>
                    <option value="">Selectionner le nombre de voyageurs</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            <div class="error" id="guestsError">Veuillez sélectionner le nombre de voyageurs
            </div>
            </div>
            <div class="form-group">
                <label for="litbebe">Lit parapluie</label>
                <select id="litbebe" autocomplete="off" name="litbebe" required>
                    <option value="">Voulez-vous disposer du lit parapluie ?</option>
                    <option value="oui">Oui</option>
                    <option value="non">Non</option>  
                </select>
            <div class="error" id="litbebeError">Veuillez sélectionner une option
            </div>
            </div>
            <div class="form-group">
                <label for="chaisehaute">Chaise haute</label>
                <select id="chaisehaute" autocomplete="off" name="chaisehaute" required>
                    <option value="">Voulez-vous disposer de la chaise haute ?</option>
                    <option value="oui">Oui</option>
                    <option value="non">Non</option>  
                </select>
            <div class="error" id="chaisehauteError">Veuillez sélectionner une option
            </div>
            </div>
            <div class="price-summary">
                <h3>Résumé des prix</h3>
            <div class="price-details">
                <span>Tarif de la chambre :</span>
                <span id="roomRate">0.00€</span>
            </div>
            <div class="price-details">
            <label>
            <label>
                    <input type="checkbox" id="nettoyageCheckbox">
                    Frais de nettoyage : <span id="nettoyagePrice">45.00€</span>
                </label>
            </div>
            <div class="price-details">
                <span>Taxes et frais :</span>
                <span id="taxes">0.00€</span>
            </div>
                <hr>
                <!-- affiche montant dans input -->
            <div class="price-details">
           
                <strong>Total :</strong>
                
               <input type="text" id="totalPrice" name="total" readonly>
              
            </div> 

            <div class="availability-indicator">
            <div class="indicator" id="availabilityDot">
            </div>
                <span id="availabilityText">Vérifier la disponibilité</span>
            </div>
            </div>
            </div>
            <div class="room-preview">
                <img src="images site web\chamb enfant 1.jpg" alt="Room Preview" id="roomPreview">
            </div>
            <div id="identité">
            
            <div class="form-group">
                <label for="name">Votre nom</label>
                <input type="texte" id="name" autocomplete="off" name="nom" required>
            <div class="error" id="checkInError">Veuillez saisir votre nom et prénom
            </div>
            </div>
            <div class="form-group">
                <label for="firstname">Votre téléphone</label>
                <input type="texte" id="telephone" autocomplete="off" name="telephone" required>
            <div class="error" id="checkInError">Veuillez saisir votre numéro de téléphone
            </div>
            </div>
            <div class="form-group">
                <label for="email">Votre email</label>
                <input type="texte" id="email" autocomplete="off" name="email" required>
            <div class="error" id="checkInError">Veuillez saisir votre adresse email
            </div>
            </div>
            <!-- connection bdd et stripe -->
            <form action="/public/checkout.php" method="POST">
            <button type="submit" id="checkout-button">Réserver et payer</button>
            <div id="error-message"></div>
            </form>
            
            </div>
            </div>
        </form>            
            <!-- </form> -->
        </div>
               
    </section>

</main>    
<?php require_once(__DIR__.'/includes/footer.php'); ?>
<script src="reservationhotel.js"></script>
<script src="stripe.js"></script>

</body>
</html>