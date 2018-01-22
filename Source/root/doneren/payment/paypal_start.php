<?php

// Include the paypal library
include_once ('Paypal.php');

// Create an instance of the paypal library
$myPaypal = new Paypal();

// Specify your paypal email
$myPaypal->addField('business', 'leondevries@border-it.nl');

// Specify the currency
$myPaypal->addField('currency_code', 'EUR');

// Specify the url where paypal will send the user on success/failure
$myPaypal->addField('return', 'http://multitouch.leondevries.com/payment/paypal_success.php');
$myPaypal->addField('cancel_return', 'http://multitouch.leondevries.com/payment/paypal_failure.php');

// Specify the url where paypal will send the IPN
$myPaypal->addField('notify_url', 'http://multitouch.leondevries.com/payment/paypal_ipn.php');

// Specify the product information
$myPaypal->addField('item_name', 'T-Shirt');
$myPaypal->addField('amount', '9.99');
$myPaypal->addField('item_number', '001');

// Specify any custom value
$myPaypal->addField('custom', 'muri-khao');

// Enable test mode if needed
$myPaypal->enableTestMode();

// Let's start the train!
$myPaypal->submitPayment();