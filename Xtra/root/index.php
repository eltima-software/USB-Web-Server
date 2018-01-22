<?php
include("functies.php");
include("header.php");
if(geturl("validate.php") == "OK"){
	echo 'Welkom bij USBWebserver Xtra';
}
else{
	echo "Controleer je licentie gegevens";
}
include("footer.php");
?>