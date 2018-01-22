<?php
/* USBWebserver create database information */
if(isset($_POST['submit'])){

	$createdb = mysql_connect("localhost","root",$_POST['rpwd']);

	$id = 1;
	while(mysql_num_rows(mysql_query("SELECT user FROM mysql.user WHERE user='phpbb".$id."'")) == 1){
		$id++;
	}
	
	if($createdb){
		mysql_query("CREATE USER 'phpbb".$id."'@'localhost' IDENTIFIED BY 'usbw'") or die("Could not make user phpbb".$id.":<br>".mysql_error()); // Create new user: 'phpbb{id}'
			
		$zip = new ZipArchive;
		if ($zip->open("database.zip") === TRUE) {
			mkdir('../../mysql/data/phpbb'.$id);
			$zip->extractTo('../../mysql/data/phpbb'.$id);
			$zip->close();
			unlink("database.zip");
		} 
		else {
			echo 'Could create database!';
		}
		mysql_query("GRANT ALL PRIVILEGES ON `phpbb".$id."`.* TO 'phpbb".$id."'@'localhost'") or die("Could not grant user phpbb".$id.":<br>". mysql_error()); // Grant user 'phpbb{id}' for database 'phpbb{id}'
		
		$pwd = md5($_POST['password']);;
		mysql_query("UPDATE phpbb".$id.".phpbb_users SET user_password='".$pwd."' WHERE username='admin'") or die("Could not change admin password, default: usbw:<br>".mysql_error());
		
		$string = '
			<?php
			// phpBB 3.0.x auto-generated configuration file
			// Do not change anything in this file!
			$dbms = "mysql";
			$dbhost = "localhost";
			$dbport = "";
			$dbname = "phpbb'.$id.'";
			$dbuser = "phpbb'.$id.'";
			$dbpasswd = "usbw";
			$table_prefix = "phpbb_";
			$acm_type = "file";
			$load_extensions = "";

			@define("PHPBB_INSTALLED", true);
			// @define("DEBUG", true);
			// @define("DEBUG_EXTRA", true);
			?>
			';

		$fp = fopen('config.php', 'w');
		fwrite($fp, $string);
		fclose($fp);
		header("location: index.php");		
	}
	else{
		echo "<h1>Error</h1>";
		echo "Could not connect to the MySQL database width settings (root/".$_POST['pass'].")";
		exit();
	}
	mysql_close($createdb);
}
else{
	echo '<form action=""  method="POST">
			Administrator password:<input type="text" name="password"><br><br>
			MySQL root password: <input type="text" name="rpwd" value="usbw">(default: usbw)<br>
			<input type="submit" value="instal" name="submit">
		</form>
		';
}

?>