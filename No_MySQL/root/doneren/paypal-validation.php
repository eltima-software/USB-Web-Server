<?php
// PHP 4.1
if(!isset($_POST['txn_id'])){
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
// HTTP ERROR
} else {
fputs ($fp, $header . $req);
while (!feof($fp)) {
$res = fgets ($fp, 1024);
if (strcmp ($res, "VERIFIED") == 0) {
            if(isset($_SESSION['betalen'][$item_name])){
				$trxid = $item_name;
				mysql_query("INSERT INTO donaties SET bedrag='".$_SESSION['betaling'][$trxid]['bedrag']."',naam='".$_SESSION['betaling'][$trxid]['naam']."',email='".$_SESSION['betaling'][$trxid]['email']."',telefoon='".$_SESSION['betaling'][$trxid]['telefoon']."',nickname='".$_SESSION['betaling'][$trxid]['weergave']."'") or die(mysql_error());
				echo "Je betaling is verwerkt, en de donatie opgeslagen. Bedankt!";
		
			}
			else{
				echo " Er is iets fout gegaan, neem contact op met mail@leondevries.com";
			}		
}
else if (strcmp ($res, "INVALID") == 0) {
	echo "Er is iets fout gegaan met de betaling, neem contact op met mail@leondevries.com";
}
}
fclose ($fp);
}
?>

