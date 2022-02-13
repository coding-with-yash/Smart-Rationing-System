<?php
require('stripe-php-master/init.php');

$publishableKey="your_publishable_key";

$secretKey="your_secret_key";

\Stripe\Stripe::setApiKey($secretKey);
?>