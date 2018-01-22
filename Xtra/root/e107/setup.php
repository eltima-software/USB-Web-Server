<?php
/* USBWebserver create database information */
if(isset($_POST['submit'])){

	$createdb = mysql_connect("localhost","root",$_POST['rpwd']);

	$id = 1;
	while(mysql_num_rows(mysql_query("SELECT user FROM mysql.user WHERE user='e107".$id."'")) == 1){
		$id++;
	}
	
	if($createdb){
		mysql_query("CREATE USER 'e107".$id."'@'localhost' IDENTIFIED BY 'usbw'") or die("Could not make user e107".$id.":<br>".mysql_error()); // Create new user: 'e107{id}'
			
		$zip = new ZipArchive;
		if ($zip->open("database.zip") === TRUE) {
			mkdir('../../mysql/data/e107'.$id);
			$zip->extractTo('../../mysql/data/e107'.$id);
			$zip->close();
			unlink("database.zip");
		} 
		else {
			echo 'Could create database!';
		}
		mysql_query("GRANT ALL PRIVILEGES ON `e107".$id."`.* TO 'e107".$id."'@'localhost'") or die("Could not grant user e107".$id.":<br>". mysql_error()); // Grant user 'e107{id}' for database 'e107{id}'
		
		$pwd = md5($_POST['password']);
		mysql_query("UPDATE e107".$id.".e107_user SET user_password='".$pwd."', user_name='".mysql_escape_string($_POST['username'])."', user_loginname='".mysql_escape_string($_POST['loginname'])."', user_email='".mysql_escape_string($_POST['email'])."' WHERE user_loginname='admin'") or die("Could not change admin password, default: usbw:<br>".mysql_error());
		
		$string = '
			<?php
			$mySQLserver    = "localhost";
			$mySQLuser      = "e107'.$id.'";
			$mySQLpassword  = "usbw";
			$mySQLdefaultdb = "e107'.$id.'";
			$mySQLprefix    = "e107_";
			$mySQLcharset   = "";

			$ADMIN_DIRECTORY     = "e107_admin/";
			$FILES_DIRECTORY     = "e107_files/";
			$IMAGES_DIRECTORY    = "e107_images/";
			$THEMES_DIRECTORY    = "e107_themes/";
			$PLUGINS_DIRECTORY   = "e107_plugins/";
			$HANDLERS_DIRECTORY  = "e107_handlers/";
			$LANGUAGES_DIRECTORY = "e107_languages/";
			$HELP_DIRECTORY      = "e107_docs/help/";
			$DOWNLOADS_DIRECTORY = "e107_files/downloads/";
			?>
			';

		$fp = fopen('e107_config.php', 'w');
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
			Display name:<input type="text" name="username"><br>
			Loginname:<input type="text" name="loginname"><br>
			Email:<input type="text" name="email"><br>
			Administrator password:<input type="text" name="password"><br><br>
			MySQL root password: <input type="text" name="rpwd" value="usbw">(default: usbw)<br>
			<input type="submit" value="instal" name="submit">
		</form>
		';
}

?>