<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Usbwebserver</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
	<div id="container">
		<img id="header" src="http://www.lrdv.eu/usbw/images/header2.png">
		<!--
			<a title="Dutch" href="../lang.php?nl"><img border="0" style="float:right" src="../flags/nl.png"></a>
			<a title="English" href="../lang.php?us"><img border="0" style="margin-right:2px;float:right" src="../flags/us.png"></a>
		-->
		<ul id="menu">
			<?php
				$menu[] = array('index.php','Home');
				$menu[] = array('packages.php','Packages');
				$menu[] = array('publish.php','Publish');
				$menu[] = array('updates.php','Updates');
				
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
								<a id="menuhover" href="'.$url.'">
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
								<a id="menua" href="'.$url.'">
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

