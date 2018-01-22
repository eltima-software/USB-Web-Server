<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Usbwebserver</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link href="<?= URL ?>style.css" rel="stylesheet" type="text/css" media="screen" />
			<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script> 
			<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.2/jquery-ui.min.js" type="text/javascript"></script> 
	
	<script src="<?= URL ?>javascript.js"></script>
</head>
<body>
	<div id="container">
		<img id="header" src="<?= URL ?>images/header.png">
		<div id="flc">
			<img id="flag" src="<?= URL ?>images/flags/nl.png">
			<div id="flags">
				<?
				foreach($langs AS $l){
					if($l != 'nl'){
						echo '<a href="'.URL.$l.'"><img border="0" src="'.URL .'images/flags/'.$l.'.png"></a>';
					}
				}
				?>
			</div>	
		</div>
		<ul id="menu">
			<?php
				$menu[] = array('index.php','Home');
				$menu[] = array('download.php','Download');
				$menu[] = array('faq.php','FAQ');
				//$menu[] = array('my-own-usbwebserver.php','My own USBWebserver');
				$menu[] = array('doneren.php','Doneren');
				$menu[] = array('contact.php','Contact');
				
				if(isset($page)){
					$page = $page;
				}
				else{
					$page = 'index.php';
				}
				$menu = array_reverse($menu);
				foreach($menu AS $info){
					$url = $info[0];
					$title = $info[1];
					if($url == $page){
						echo '
							<li>
								<div id="menulefthover"></div>
								<a id="menuhover" href="'.URL.'nl/'.$url.'">
									'.$title.'
								</a>
								<div id="menurighthover"></div>
							</li>
						';
					}
					else{
						echo '
							<li>
								<div id="menuleft"></div>
								<a id="menua" href="'.URL.'nl/'. $url.'">
									'.$title.'
								</a>
								<div id="menuright"></div>
							</li>
						';
					}
				}
			?>
		</ul>
		<div id="topcontent"></div>
		<div id="content">

