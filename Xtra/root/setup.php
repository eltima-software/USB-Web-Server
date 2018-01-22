<?php
set_Time_limit(0);
include("functies.php");
include("header.php");

if(isset($_GET['hash'])){
	$file = base64_decode($_GET['hash']);
	$inh = 
}
else{
	error(6);
}

include("footer.php");
?>