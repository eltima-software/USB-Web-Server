<?php
define("KEY","&*()HJ%^KFG#$$&^86897^_+*0-9ghK&%gfhght57856897^G&*g87oT%^723!@#%56347");

function error($nummer = 0){
	ob_end_clean();
	echo "Er is een foutmeldingen opgetreden. Neem contact op met info@usbwebserver.com";
	echo "<br><b>Fout:</b><Br>";
	if($nummer == 1){
		echo "Fout nummer 2"; // Geen config mail/password
	}
	elseif($nummer == 2){
		echo "Geen email en wachtwoord ingevuld in config.php";
	}
	elseif($nummer == 3){
		echo "Kan geen contact maken met validatie server";
	}
	elseif($nummer == 4){
		echo "Ongeldige gegevens";
	}
	elseif($nummer == 5){
		echo "Licensie verlopen";
	}
	elseif($nummer ==6){
		echo "Wrong use X";
	}
	else{
		echo "Onbekend";
	}
	exit();
}
function encrypt($string, $key) { 
	return base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($key), $string, MCRYPT_MODE_CBC, md5(md5($key))));
}

function decrypt($string, $key) { 
	return rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($key), base64_decode($string), MCRYPT_MODE_CBC, md5(md5($key))), "\0");
}



function geturl($page){
	if(stristr($page,"?")){
		$url = "http://www.lrdv.eu/usbwX/".$page."&hash=".urlencode(HASH);
	}
	else{
		$url = "http://www.lrdv.eu/usbwX/".$page."?hash=".urlencode(HASH);
	}
	if(!$return = @file_get_contents($url)){
		error(3);
	}
	elseif($return == "NO"){
		error(4);
	}
	elseif($return == "EXPIRED"){
		error(5);
	}
	else{
		return $return;
	}
}

include("config.php");

if(!isset($config['mail']) OR !isset($config['password'])){
	error(1);
}
if(empty($config['mail']) OR empty($config['password'])){
	error(2);
}

define("HASH",encrypt($config['mail'].",".$config['password'],KEY));
?>