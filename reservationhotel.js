// Room data with detailed information
const roomData = {
    takamaka: {
        title: 'TAKAMAKA',
        description: 'Rez de chaussée du cottage le Bois d Arnette, Takamaka est récemment restauré ',
        basePrice: 100,
        maxGuests: 4,
        image: 'images site web/chambre parentale2.jpg',
        features: ['Vous trouverez le confort et la sérénité propices au repos et à la découverte.']
    },
    benjoin: {
        title: 'BENJOIN',
        description: 'Logement en cours d aménagement et sera disponible fin 2025',
        basePrice: 50,
        maxGuests: 2,
        image: 'images site web/gros-plan-petit-dejeuner-romantique-au-lit_23-2150956525.jpg',
        features: ['cette image sera l esprit de l appartement']
    },
    ambaville: {
        title: 'AMBAVILLE',
        description: 'Logement en cours d aménagement et sera disponible fin 2025',
        basePrice: 50,
        maxGuests: 2,
        image: 'images site web/Salonmoderne.jpg',
        features: ['cette image sera l esprit de l appartement']
    }
};

// Form elements
const form = document.getElementById('bookingForm');
const checkIn = document.getElementById('checkIn');
const checkOut = document.getElementById('checkOut');
const roomType = document.getElementById('roomType');
const guests = document.getElementById('guests');
const litbebe = document.getElementById('litbebe');
const chaisehaute = document.getElementById('chaisehaute');
const roomPreview = document.getElementById('roomPreview');
const roomTitle = document.getElementById('roomTitle');
const roomDescription = document.getElementById('roomDescription');
const roomRate = document.getElementById('roomRate');
const taxes = document.getElementById('taxes');
const nettoyage = document.getElementById('nettoyage');
const totalPrice = document.getElementById('totalPrice');
const availabilityDot = document.getElementById('availabilityDot');
const availabilityText = document.getElementById('availabilityText');

// Définir des contraintes de date
const today = new Date();
const nextYear = new Date();
nextYear.setFullYear(nextYear.getFullYear() + 1);
checkIn.min = today.toISOString().split('T')[0];
checkOut.min = today.toISOString().split('T')[0];
checkIn.max = nextYear.toISOString().split('T')[0];
checkOut.max = nextYear.toISOString().split('T')[0];

// Fonction de notification 
function showToast(message, type = 'success') {
    const toast = document.createElement('div');
    toast.className = `toast ${type}`;
    toast.textContent = message;
    document.body.appendChild(toast);
    
    // Trigger reflow
    toast.offsetHeight;
    
    // Show toast
    toast.classList.add('show');
    
    // Hide after 3 seconds
    setTimeout(() => {
        toast.classList.remove('show');
        setTimeout(() => {
            document.body.removeChild(toast);
        }, 300);
    }, 3000);
}

// Loading state handler
function setLoading(element, isLoading) {
    if (isLoading) {
        element.classList.add('loading');
        element.disabled = true;
    } else {
        element.classList.remove('loading');
        element.disabled = false;
    }
}

// Validate dates
function validateDates() {
    const checkInDate = new Date(checkIn.value);
    const checkOutDate = new Date(checkOut.value);
    
    if (checkInDate >= checkOutDate) {
        document.getElementById('checkOutError').style.display = 'block';
        return false;
    }
    
    document.getElementById('checkOutError').style.display = 'none';
    return true;
}

// Price animation
function updatePriceWithAnimation(element, newValue) {
    element.style.transform = 'translateY(-10px)';
    element.style.opacity = '0';
    
    setTimeout(() => {
        element.textContent = newValue;
        element.style.transform = 'translateY(0)';
        element.style.opacity = '1';
    }, 200);
}

// Season-based pricing
function getSeasonMultiplier(date) {
    const month = new Date(date).getMonth();
    // Peak season (June - August, December)
    if (month >= 5 && month <= 7 || month === 11) return 1.3;
    // Shoulder season (April - May, September - October)
    if (month >= 3 && month <= 4 || month >= 8 && month <= 9) return 1.1;
    // Off season
    return 1.0;
}

// Update room preview with animations
function updateRoomPreview() {
    const selected = roomData[roomType.value];
    if (selected) {
        const preview = document.querySelector('.room-preview');
        preview.style.opacity = '0';
        
        setTimeout(() => {
            roomPreview.src = selected.image;
            roomTitle.textContent = selected.title;
            roomDescription.textContent = selected.description;
            
            // Update features list with animation
            const featuresList = document.createElement('div');
            featuresList.className = 'features-list';
            selected.features.forEach((feature, index) => {
                const featureItem = document.createElement('span');
                featureItem.className = 'feature-item';
                featureItem.textContent = feature;
                featureItem.style.animation = `fadeIn 0.5s ${index * 0.1}s forwards`;
                featuresList.appendChild(featureItem);
            });
            
            // Replace or add features list
            const oldFeaturesList = preview.querySelector('.features-list');
            if (oldFeaturesList) {
                oldFeaturesList.replaceWith(featuresList);
            } else {
                preview.appendChild(featuresList);
            }
            
            preview.style.opacity = '1';
            updatePricing();
        }, 300);
    }
}

// Check room availability with animation
async function checkAvailability() {
    availabilityDot.style.transform = 'scale(0.8)';
    availabilityText.style.opacity = '0';
    
    return new Promise(resolve => {
        setTimeout(() => {
            const random = Math.random();
            const isAvailable = random > 0.1;
            
            availabilityDot.className = `indicator ${isAvailable ? 'available' : 'unavailable'}`;
            availabilityText.textContent = isAvailable ? 'Logement disponible' : 'Ce logement n est pas disponible';
            
            availabilityDot.style.transform = 'scale(1)';
            availabilityText.style.opacity = '1';
            
            resolve(isAvailable);
        }, 500);
    });
}

// Update pricing with animations
const nettoyageCheckbox = document.getElementById("nettoyageCheckbox");
const nettoyagePrice = 45.00; // Prix fixe du nettoyage

nettoyageCheckbox.addEventListener("change", updatePricing);

function updatePricing() {
    if (!checkIn.value || !checkOut.value || !roomType.value) return;

    const checkInDate = new Date(checkIn.value);
    const checkOutDate = new Date(checkOut.value);
    const nights = Math.ceil((checkOutDate - checkInDate) / (1000 * 60 * 60 * 24));
    
    const basePrice = roomData[roomType.value].basePrice;
    const seasonMultiplier = getSeasonMultiplier(checkInDate);
    const roomTotal = basePrice * nights * seasonMultiplier;
    const taxAmount = roomTotal * 0.085;
    
    const nettoyage = nettoyageCheckbox.checked ? 45 : 0;
    

    updatePriceWithAnimation(roomRate, `${roomTotal.toFixed(2)} €`);
    updatePriceWithAnimation(taxes, `${taxAmount.toFixed(2)} €`);

    
    // updatePriceWithAnimation(totalPrice, `${(roomTotal + taxAmount).toFixed(2)} €`);
    const total = (roomTotal + nettoyage +taxAmount).toFixed(2);
            updatePriceWithAnimation(totalPrice, `${total} €`);
    // Affiche la valeur totale dans l'input
    document.getElementById('totalPrice').value = total;
   
    // Envoie la valeur totale au serveur pour l'enregistrer
sendTotalToServer(total);

function sendTotalToServer(total) {
    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'submit_reserve.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            console.log('Total saved successfully');
        }
    };
    xhr.send('total=' + encodeURIComponent(total));
}
}

// Input field animations
const inputs = document.querySelectorAll('input, select');
inputs.forEach(input => {
    input.addEventListener('focus', () => {
        input.parentElement.querySelector('label').style.color = '#3498db';
    });

    input.addEventListener('blur', () => {
        input.parentElement.querySelector('label').style.color = '';
    });
});

// Room image hover effect
roomPreview.addEventListener('mouseenter', () => {
    roomPreview.style.transform = 'scale(1.05)';
});

roomPreview.addEventListener('mouseleave', () => {
    roomPreview.style.transform = 'scale(1)';
});

// Event listeners
roomType.addEventListener('change', () => {
    updateRoomPreview();
    const selected = roomData[roomType.value];
    
    // Update guests dropdown
    guests.innerHTML = '<option value="">Veuillez sélectionner le nombre de voyageurs</option>';
    for (let i = 1; i <= selected.maxGuests; i++) {
        guests.innerHTML += `<option value="${i}">${i} ${i > 1 ? '' : ''}</option>`;
    }
    
    checkAvailability();
});

[checkIn, checkOut].forEach(input => {
    input.addEventListener('change', () => {
        validateDates();
        updatePricing();
        checkAvailability();
    });
});

// Form submission handler
form.addEventListener('submit', async (e) => {
    e.preventDefault();
    
    let isValid = true;
    const required = [checkIn, checkOut, roomType, guests];
    
    required.forEach(field => {
        if (!field.value) {
            const errorElement = document.getElementById(`${field.id}Error`);
            errorElement.style.display = 'block';
            errorElement.style.animation = 'shake 0.5s ease-in-out';
            field.classList.add('error-input');
            isValid = false;
        } else {
            document.getElementById(`${field.id}Error`).style.display = 'none';
            field.classList.remove('error-input');
        }
    });

      if (!validateDates()) isValid = false;
    
      if (isValid) {
          const submitButton = e.target.querySelector('button[type="submit"]');
         setLoading(submitButton, true);
        
         // Simulate API call
            try {
               const isAvailable = await checkAvailability();
                if (isAvailable) {
                   showToast('Réservation réussie ! Un e-mail de confirmation sera envoyé sous peu.', 'success');
                     form.reset();
                      updatePricing();
                  } else {
                     showToast('Désolé, ce logement n est plus diponible aux dates sélectionnées.', 'error');
                  }
              } catch (error) {
                  showToast('Une erreur s est produite. Veuillez réessayer.', 'error');
              } finally {
                  setLoading(submitButton, false);
              }
    }
 }
);

// Initialize the form
updateRoomPreview();
checkAvailability();
