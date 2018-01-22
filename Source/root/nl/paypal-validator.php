<?php
include("../config.php");
include("header.php");
// PHP 4.1
if(!isset($_POST['txn_id'])){
	echo " Je kan deze pagina niet direct oproepen";
	include("footer.php");
	exit();
}

// read the post from PayPal system and add 'cmd'
$req = 'cmd=_notify-validate';

foreach ($_POST as $key => $value) {
$value = urlencode(stripslashes($value));
$req .= "&$key=$value";
}

// post back to PayPal system to validate
$header .= "POST /cgi-bin/webscr HTTP/1.0\r\n";
$header .= "Content-Type: application/x-www-form-urlencoded\r\n";
$header .= "Content-Length: " . strlen($req) . "\r\n\r\n";

$fp = fsockopen ('ssl://www.paypal.com', 443, $errno, $errstr, 30);

// assign posted variables to local variables
$item_name = $_POST['item_name'];
$item_number = $_POST['item_number'];
$payment_status = $_POST['payment_status'];
$payment_amount = $_POST['mc_gross'];
$payment_currency = $_POST['mc_currency'];
$txn_id = $_POST['txn_id'];
$receiver_email = $_POST['receiver_email'];
$payer_email = $_POST['payer_email'];


if (!$fp) {
echo "Er is iets foutegaan met de betaling, neem contact op met mail@leondevries.com";
} else {
	fputs ($fp, $header . $req);
	while (!feof($fp)) {
		$res = fgets ($fp, 1024);
		if (stristr("VERIFIED",$res)){
			if(isset($_SESSION['betalen'][$item_name])){
						$trxid = $item_name;
						
						if(isset($_SESSION['betalen'][$trxid]['email']) AND !empty($_SESSION['betalen'][$trxid]['email'])){
							mysql_query("INSERT INTO email SET donatie='".$_SESSION['betalen'][$trxid]['bedrag']."',email='".$_SESSION['betalen'][$trxid]['email']."'") or die(mysql_error());
						}
						else{
							$_SESSION['betaling'][$trxid]['email'] = 'onbekend';
						}
						mysql_query("INSERT INTO donaties SET bedrag='".$_SESSION['betalen'][$trxid]['bedrag']."',wie='".$payer_email."'") or die(mysql_error());
						
						echo "Bedankt voor het doneren aan USBWebserver, u donatie zal gebruikt worden om het product te verbeteren.";
						UNSET($_SESSION['betalen'][$item_name]);
				
					}
					else{
						echo " Er is iets fout gegaan met de sessie neem contact op met mail@leondevries.com";
					}		
		}
		elseif (stristr ("INVALID",$res)) {
			echo "Er is iets fout gegaan met de betaling, neem contact op met mail@leondevries.com";
		}
	}
	fclose ($fp);
}

include("footer.php");
?>

