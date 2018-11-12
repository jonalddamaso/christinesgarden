<?php
$paypal = new \PayPal\Rest\ApiContext(
	new \PayPal\Auth\OAuthTokenCredential(
			//client id: 
		"ATLUQeZ1cEDW3HFNRnNsr9ZF6Yue1wr7x5B3zr91amC7BTTrR1vMaVvWohY1D09BzHaVy9tSkmEjwpZ3","EGSBnE3-qR1uSuLnnHn0zNpmDDJiLtg9aLW1FQ-O2YM2A4bNpYeCEVZA29yLXKtpG0oMtgMqwo33Etqr"
	)
);


// syntax:
		// $variable = new \PayPal\Auth\OAuthTokenCredential(
		// new \PayPal\Auth\OAuthTokenCredential(
		// (client id, secret)
		// );
?>

