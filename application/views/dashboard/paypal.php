<!DOCTYPE html>
<!-- PayPal JavaScript SDK -->
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Ensures optimal rendering on mobile devices. -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge" /> <!-- Optimal Internet Explorer compatibility -->
</head>

<body>
  <script
    src="https://www.paypal.com/sdk/js?client-id=AT_l-baB4Ca3drZqVCnCgcWrFURik2UIfsmDtuBBNVbK2kiCPxpl3uWW5sw8o1dlGlVutNi05w2-NxOu"> // Required. Replace YOUR_CLIENT_ID with your sandbox client ID.
  </script>
</body>

<!-- Render the Smart Payment Buttons -->
<body>
  <script
    src="https://www.paypal.com/sdk/js?client-id=AT_l-baB4Ca3drZqVCnCgcWrFURik2UIfsmDtuBBNVbK2kiCPxpl3uWW5sw8o1dlGlVutNi05w2-NxOu"> // Required. Replace YOUR_CLIENT_ID with your sandbox client ID.
  </script>

  <div id="paypal-button-container"></div>

  <script>
    paypal.Buttons().render('#paypal-button-container');
    // This function displays Smart Payment Buttons on your web page.
  </script>
</body>

<!-- Set up the transaction -->
<script>
  paypal.Buttons({
    createOrder: function(data, actions) {
      // This function sets up the details of the transaction, including the amount and line item details.
      return actions.order.create({
        purchase_units: [{
          amount: {
            value: '0.01' //price_list???
          }
        }]
      });
    }
  }).render('#paypal-button-container');
</script>


<!-- Capture the transaction -->
<script>
  paypal.Buttons({
    createOrder: function(data, actions) {
      // This function sets up the details of the transaction, including the amount and line item details.
      return actions.order.create({
        purchase_units: [{
          amount: {
            value: '0.01'
          }
        }]
      });
    },
    onApprove: function(data, actions) {
      // This function captures the funds from the transaction.
      return actions.order.capture().then(function(details) {
        // This function shows a transaction success message to your buyer.
        alert('Transaction completed by ' + details.payer.name.given_name);
      });
    }
  }).render('#paypal-button-container');
  //This function displays Smart Payment Buttons on your web page.
</script>



