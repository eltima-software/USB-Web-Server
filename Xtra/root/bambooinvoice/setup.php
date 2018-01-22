<?php
if(isset($_POST['changepw'])){
	$createdb = mysql_connect("localhost","root",$_POST['pw']);
}
else{
	$createdb = mysql_connect("localhost","root","usbw"); // Default root passowrd
}
if($createdb){
	$id = 1;
	while(mysql_num_rows(mysql_query("SELECT user FROM mysql.user WHERE user='bamboo".$id."'")) == 1){
		$id++;
	}

	mysql_query("CREATE USER 'bamboo".$id."'@'localhost' IDENTIFIED BY 'usbw'") or die("Could not make user bamboo".$id.":<br>".mysql_error()); // Create new user: 'bamboo'
	mysql_query("CREATE DATABASE IF NOT EXISTS `bamboo".$id."`") or die("Could not make database bamboo".$id.":<br>". mysql_error()); // Create database 'bamboo'
	mysql_query("GRANT ALL PRIVILEGES ON `bamboo".$id."`.* TO 'bamboo".$id."'@'localhost'") or die("Could not grant user bamboo".$id.":<br>". mysql_error()); // Grant user 'bamboo' for database 'bamboo'
	
	$string='
		<?php  if (!defined("BASEPATH")) exit("No direct script access allowed");
			$active_group = "default";
			$db["default"]["hostname"] = "localhost";
			$db["default"]["username"] = "bamboo'.$id.'";
			$db["default"]["password"] = "usbw";
			$db["default"]["database"] = "bamboo'.$id.'";
			$db["default"]["dbdriver"] = "mysql";
			$db["default"]["dbprefix"] = "bamboo_";
			$db["default"]["active_r"] = TRUE;
			$db["default"]["pconnect"] = FALSE;
			$db["default"]["db_debug"] = TRUE;
			$db["default"]["cache_on"] = FALSE;
			$db["default"]["cachedir"] = "";
			$db["default"]["char_set"] = "utf8";
			$db["default"]["dbcollat"] = "utf8_general_ci";
		?>
	';
	$fp = fopen('bamboo_system_files\application\config\database.php', 'w');
	fwrite($fp, $string);
	fclose($fp);
	
	header("location: index.php/install");	
}
else{
	echo "<h1>Error</h1>";
	echo "Could not connect to the MySQL database width default settings (root/usbw).<br>If you have changed the password use the form below.<br><br>";
	echo '<form action="" method="POST">Root password :<input type="text" name="pw"><br><input type="submit" name="changepw" value="Go"></form>';
	exit();
}
mysql_close($createdb);
?>