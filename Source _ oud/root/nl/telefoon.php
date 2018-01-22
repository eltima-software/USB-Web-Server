<?
include("../config.php");
$page = 'doneren.php';
include("header.php");
include ("../doneren/class.ivr.php");
?>
<?

	echo '<h1>Telefoon</h1>';


$rtlo = 57453;  // Replace with your TargetPay layoutcode

$country = 31;		// Replace with country code of the end-consumer
$adult = 0;			// Adult service? Replace with 1
$tariff = 130;		// Tariff in eurocents (e.g. 130 means  1,30 per call)

$myIVR = new IVR ($rtlo, $country);

if (!isset($_POST["submit"])) {
	$result = $myIVR->PreparePayPerCall ($tariff, $adult);
	if (!$result) { die ("Er is een fout opgetreden: ".$myIVR->error); }

	$returnURL = "?step=2&payline=".urlencode($myIVR->payline)."&paycode=".urlencode($myIVR->paycode);

	echo "Bel naar <b>$myIVR->payline</b> (1,30euro per gesprek) en toets ";
    echo "de code <b>$myIVR->paycode</b> in.<br><br>";
	
	echo "
	<form method=\"POST\">
	<table>
		<tr>
			<td>
				E-mail adres: <font size='1'>Optioneel</font>
			</td>
			<td>
				<input type='text' name='email'>*
			</td>
		</tr>
		<tr>
			<td>
				Het te doneren bedrag in EURO:
			</td>
			<td>
				<input type='text' value='1.30' disabled name='bedrag'>
			</td>
		</tr>

		<tr>
			<td collspan='2'>
				<input type='submit' name='submit' value='Ga verder'>
			</td>
		</tr>
	</table>
	</form><br>
	<font size='2'>* U ontvang <b>alleen</b> e-mail over updates van USBWebserver</font>";
	
} 
else {
	$result = $myIVR->CheckPayment ($_GET["paycode"], $_GET["payline"]);
	if (!$result) {
		echo "De betaling is nog niet afgerond!<br><br>";
		echo "<a href=\"javascript: history.go(-1);\">Klik hier om terug te gaan...</a>";
	} 
	else {
		if(isset($_POST['email']) AND !empty($_POST['email'])){
			mysql_query("INSERT INTO email SET donatie='130',email='".$_POST['email']."'") or die(mysql_error());
		}
		else{
			$_POST['email'] = 'onbekend';
		}
		mysql_query("INSERT INTO donaties SET bedrag='130',wie='".$_POST['email']."'") or die(mysql_error());
		
		echo "Bedankt voor het doneren aan USBWebserver, u donatie zal gebruikt worden om het product te verbeteren.";
	}
}

include("footer.php");
?>