function displayMessage() {
    const messageDiv = document.getElementById('message');
    const screenWidth = window.innerWidth;
  
    if (screenWidth <= 576) {
      messageDiv.textContent = 'Vous utilisez un smartphone !';
    } else if (screenWidth <= 768) {
      messageDiv.textContent = 'Vous utilisez une tablette !';
    } else if (screenWidth <= 1024) {
      messageDiv.textContent = 'Vous utilisez un ordinateur portable !';
    } else {
      messageDiv.textContent = 'Vous utilisez un grand écran !';
    }
  }
  
  // Appeler la fonction à l'affichage initial
  displayMessage();
  
  // Mettre à jour le message lorsque la taille de la fenêtre change
  window.addEventListener('resize', displayMessage);