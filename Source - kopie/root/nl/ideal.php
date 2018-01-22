<?
include("../config.php");
$page = 'doneren.php';
include("header.php");
include ("../doneren/class.ideal.php");

$rtlo = 57453;  // Replace with your TargetPay layoutcode

$description = "Usbwebserver Donatie";		// Description (will appear on receipt)					// Amount in eurocents (e.g. 1000 means € 10,00)
$returnurl = URL.'nl/ideal.php'; // URL to return

$myiDEAL = new iDEAL ($rtlo);

if (isset($_GET["trxid"])) { 
	$step = 3; 
} 
elseif (isset($_POST["bank"])) { 
	$step = 2; 
} 
else{ 
	$step = 1;
}
	echo '<h1>Ideal donatie</h1>';

if ($step==1) {
	echo "
	<form name=\"bankselect\" method=\"POST\">
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
				<input type='text' name='bedrag'>
			</td>
		</tr>
		<tr>
			<td>
				Kies uw bank:
			</td>
			<td>
				<select name=bank>
					<script src=\"http://www.targetpay.nl/ideal/issuers-nl.js\"></script>
				</select>
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
elseif ($step==2) {
	$bedrag = (int)($_POST['bedrag'] * 100);
	if($bedrag < 100){
		echo "Wegens de transactie kosten moet u minstens 1 euro doneren.<br>";
		echo "<a href=\"javascript: history.go(-1);\">Klik hier om terug te gaan...</a>";
	}
	elseif(!is_int($bedrag)){
		echo "U heeft geen geldig bedrag ingevuld.<br>";
		echo "<a href=\"javascript: history.go(-1);\">Terug naar de vorige pagina...</a>";
	}
	else{
		$result = $myiDEAL->GetLink ($_POST["bank"], $description, ($_POST['bedrag'] * 100), $returnurl);
		if (!$result) {
			echo "Er kon geen verbinding gemaakt worden met de site van je bank.<br><br>";
			echo "<a href=\"javascript: history.go(-1);\">Terug naar de vorige pagina...</a>";
		} 
		else {
			$_SESSION['betaling'][$myiDEAL->trxid] = $_POST;
			setcookie ("trxid", $myiDEAL->trxid, time()+86400);
			echo "Je wordt nu doorverwezen naar de site van je bank.<br><br>";
			echo "<a href=\"".$myiDEAL->url."\">Klik hier om verder te gaan...</a>";
			echo "<br><br><font size=-2>Transactie ID: ".$myiDEAL->trxid;
		}
	}
}
elseif ($step==3) {
	$trxid = ($_COOKIE["trxid"]) ? $_COOKIE["trxid"] : $_GET["trxid"];
    $result = $myiDEAL->CheckPayment ($trxid, 1);

    if (!$result) {
    	echo "De betaling is niet voltooid, of al eerder verwerkt...<br><br>";
        echo "Foutmelding: ".$myiDEAL->error;
    } else {
		if(isset($_SESSION['betaling'][$trxid]['email']) AND !empty($_SESSION['betaling'][$trxid]['email'])){
			mysql_query("INSERT INTO email SET donatie='".$_SESSION['betaling'][$trxid]['bedrag']."',email='".$_SESSION['betaling'][$trxid]['email']."'") or die(mysql_error());
		}
		else{
			$_SESSION['betaling'][$trxid]['email'] = 'onbekend';
		}
		mysql_query("INSERT INTO donaties SET bedrag='".$_SESSION['betaling'][$trxid]['bedrag']."',wie='".$_SESSION['betaling'][$trxid]['email']."'") or die(mysql_error());
		
		echo "Bedankt voor het doneren aan USBWebserver, u donatie zal gebruikt worden om het product te verbeteren.";
		unset($_SESSION['betaling'][$trxid]);
    }
}
include("footer.php");
?>