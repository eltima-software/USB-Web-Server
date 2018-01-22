<?php
include("config.php");
$page = 'faq.php';
include("header.php");
?>
		<h1>Vaak gestelde vragen</h1>
			<p>
				<b>Waar moet ik mijn bestanden neerzetten?</b><br>
				Al u php bestanden moet u in de map root plaatsen.<br>U website is vervolgens te bereiken via <a href="http://localhost:8080/">http://localhost:8080/</a>.
			</p>
			<p>
				<b>Hoe kan ik bestanden chmodden?</b><br>
				Bij USBWebserver is het niet nodig om bestanden/mappen te chmodden als u bestanden wilt uploaden/bewerken met php.<br>
				Dit komt omdat USBWebserver op Windows draait.
			</p>
			<p>
				<b>Hoe pas ik de config bestanden van apache/mysql/php aan?</b><br>
				Al deze config bestanden staan in de map settings. Na het aanpassen van 1 van deze bestanden moet u USBWebserver herstarten voordat de wijzigingen zijn doorgevoerd.
			</p>
			<p>
				<b>Ik krijg error's die ik op mijn normale hosting niet heb</b><br>
				USBWebserver is standaard ingesteld op het hoogste foutmelding niveau. U kunt deze instelling wijzigen in het bestand settings/php.ini op regel 345.<br>Om alleen de meest gangbare foutmeldingen weer te geven vervang deze regel door: <i>error_reporting = E_ALL & ~E_NOTICE</i>
			</p>
			<p>
				<b>Hoe zet ik mijn website online?</b><br>
				U kunt al u bestanden uit de root map kopieren naar hosting door middel van een ftp programma.<br>
				Om de databases over te zetten moet u naar <a href="http://localhost:8080/">PhpMyAdmin</a> gaan en hier klikken op Export.<br>
				Daar kunt u de betreffende database selecteren en deze exporteren.<Br> Daarna moet u naar PhpMyAdmin van u hosting gaan en daar op SQL klikken.<br>
				Plak de export in dit vak en druk op uitvoeren.
			</p>
			<p>
				<b>Hoe kunnen andere mensen mijn website bekijken?</b><br>
				USBWebserver is een programma die het mogelijkmaakt lokaal op uw computer gebruik te maken van apache/php.<br>Indien u wilt dat anderen uw website kunnen bekijken kunt u het beste een webhosting pakket aanschaffen.
			</p>
			<p>
				<b>Wat zijn de inlog codes van phpmyadmin?</b><br>
				Gebruikersnaam is '<b>root</b>' en het wachtwoord '<b>usbw</b>'
			</p>

<?php
include("footer.php");
?>