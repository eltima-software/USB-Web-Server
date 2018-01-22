<?php
include("../config.php");
$page = 'doneren.php';
include("header.php");

if(isset($_POST['submit'])){
	$q = md5(time()) . rand(0,1000);
	if($_POST['bedrag'] < 1){
		echo "Wegens de transactie kosten, moet u minstens 1 euro doneren.<br>";
		echo "<a href=\"javascript: history.go(-1);\">Klik hier om terug te gaan...</a>";
	}
	else{
		$_SESSION['betalen'][$q] = $_POST;
		?>

	<h1>Paypal</h1>
	<form action="https://www.paypal.com/cgi-bin/webscr" method="post" />
			<input type="hidden" name="cmd" value="_xclick" />
			<input type="hidden" name="business" value="leondevries@border-it.nl" />
			<input type="hidden" name="item_name" value="<?= $q ?>" />
			<input type="hidden" name="item_number" value="1" />
			<input type="hidden" name="amount" value="<?= $_POST['bedrag'] ?>" /><br>
			<input type="hidden" name="no_shipping" value="1" />
			<input type="hidden" name="return" value="<?=URL ?>nl/paypal-validator.php" />
			<input type="hidden" name="rm" value="2" />
			<input type="hidden" name="no_note" value="1" />
			<input type="hidden" name="currency_code" value="EUR" />
			<input type="hidden" name="lc" value="NL" />
			<input type="hidden" name="bn" value="PP-BuyNowBF" />
			Klik op de paypal betaal button om verder te gaan:<br>
			<input type="image" src="https://www.paypal.com/en_US/i/btn/x-click-but5.gif" border="0" name="submit" alt="Make payments with PayPal - it's fast, free and secure!" />
			<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1" />
	</form>
		<?
	}
}
else{
?>
	<h1>Paypal</h1>

	
	
	<form action="paypal.php" method="POST">
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
			<td collspan='2'>
				<input type='submit' name='submit' value='Ga verder'>
			</td>
		</tr>
	</table>
	</form><br>
	<font size='2'>* U ontvang <b>alleen</b> e-mail over updates van USBWebserver</font>
	<?
}
include("footer.php");
?>