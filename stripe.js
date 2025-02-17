var stripe = Stripe('pk_test_51QqorEDB288nL4rrFwsnF3bels6Ay3jOh3tYWOAXGTu1QoClVkIO0yLemq6xi6kAwZduRKrhOCCaCJWWsV1ausz400xiaxE2Uj', {
    betas: ['checkout_beta_4']
  });

  var checkoutButton = document.getElementById('checkout-button');
  checkoutButton.addEventListener('click', function () {
    // Lorsque le client clique sur le bouton, redirigez
    // les passer à la caisse.
    stripe.redirectToCheckout({
      lineitems: [{sku: 'price_1QqpW2DB288nL4rrw0RigZm8', quantity: 1}],
      mode: 'payment',
      //Notez qu'il n'est pas garanti que vos clients seront redirigés vers cette page.
      // URL *100%* du temps, il est possible qu'ils puissent par ex. fermer le
      // tabulation entre la soumission du formulaire et la redirection.
      successUrl: 'https://yourwebsite.com/success',
      cancelUrl: 'https://yourwebsite.com/cancel',
    })
    .then(function (result) {
      if (result.error) {
       // Si `redirectToCheckout` échoue à cause d'un navigateur ou d'un réseau
        // erreur, affichez le message d'erreur localisé à votre client.
        var displayError = document.getElementById('error-message');
        displayError.textContent = result.error.message;
      }
    });
  });

