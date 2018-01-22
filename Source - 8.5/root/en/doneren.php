<?php
include("config.php");
$page = 'doneren.php';
include("header.php");
?>
	<h1>Doneren</h1>
	<p>
		USBWebserver is gratis voor prive gebruik en de ontwikkeling van het programma gebeurt dus vrijwillig.<br>
		Daarom stellen wij alle donaties zeer op prijs, en met de donaties gaan wij proberen USBWebserver te verbeteren.<br>
		Voor commerciëel gebruik is het verplicht om een donatie te doen.
	</p>
	<p>		
		<b>Kies hieronder de methode waarmee u wilt doneren: ideal/paypal/telefoon</b><br><br>
		
		<a href="doneren/ideal.php"><img width="128px" height="128px" src="doneren/ideal.jpg"></a>
		
		<a href="doneren/paypal.php"><img style="margin-left:50px" width="128px" height="128px" src="doneren/paypal.png"></a>
		
		<a href="doneren/telefoon.php"><img style="margin-left:50px" width="128px" height="128px" src="doneren/phone.png"></a>
	</p>
<?php
include("footer.php");
?>