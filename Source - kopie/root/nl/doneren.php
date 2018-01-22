<?php
include("../config.php");
$page = 'doneren.php';
include("header.php");
?>
	<h1>Doneren</h1>
	<p>
		USBWebserver is gratis voor prive gebruik en de ontwikkeling van het programma gebeurt dus vrijwillig.<br>
		Daarom stellen wij alle donaties zeer op prijs, zodat wij USBWebserver kunnen blijven verbeteren en doorontwikkelen.<br>
		Voor commerciëel gebruik is het verplicht om een donatie te doen.
	</p>
	<p>		
		<b>Kies hieronder de methode waarmee u wilt doneren: ideal/paypal/telefoon</b><br><br>
		
		<a href="ideal.php"><img width="128px" height="128px" src="../doneren/ideal.jpg"></a>
		
		<a href="paypal.php"><img style="margin-left:50px" width="128px" height="128px" src="../doneren/paypal.png"></a>
		
		<a href="telefoon.php"><img style="margin-left:50px" width="128px" height="128px" src="../doneren/phone.png"></a>
	</p>
<?php
include("footer.php");
?>