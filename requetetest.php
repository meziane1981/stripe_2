<?php
// Set your secret key. Remember to switch to your live secret key in production.
// See your keys here: https://dashboard.stripe.com/apikeys
\Stripe\Stripe::setApiKey('sk_test_51JfONNAEcI2cqmHuyph6DhVKT6VBpJBNAwtAieqbryfkzFPFtYHL7Pf7OV4jpFvsxAJXVU6ZiW1qrZdWKJbyvlWn0001OOQhXu');

\Stripe\PaymentIntent::create([
  'amount' => 1000,
  'currency' => 'eur',
  'payment_method_types' => ['card'],
  'receipt_email' => 'jenny.rosen@example.com',
]);
?>