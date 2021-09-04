<?php
	require_once "stripe-php-master/init.php";

	$stripeDetails = array(
		"secretKey" => "sk_test_51JAW36LbL1tUcWWUdDb7iU1Y1BmimlhcMGEfvvvW5rBkhWfTXELXLAqU8u5uU7B2STPBhyCXpZz1OAlgpLMFrbBz00yjr5sREd",
		"publishableKey" => "pk_test_51JAW36LbL1tUcWWUqOumhoq39YMVXytWgq4iXQVCCGuZXXvTCzs32ZH3SdFFboDsBLZs0BhoqJvF80DegHAj63oM00LnDKtNxp"
	);

	// Set your secret key: remember to change this to your live secret key in production
	// See your keys here: https://dashboard.stripe.com/account/apikeys
	\Stripe\Stripe::setApiKey($stripeDetails['secretKey']);
?>
