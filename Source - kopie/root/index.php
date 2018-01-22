<?php
include("config.php");
if(isset($_SERVER["HTTP_ACCEPT_LANGUAGE"])){
	if(eregi("nl",$_SERVER["HTTP_ACCEPT_LANGUAGE"])){
		header("location: ".URL."nl/");
	}
}
else{
	header("location: ".URL."en/");
}
?>