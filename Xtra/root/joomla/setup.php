<?php
/* USBWebserver create database information */
if(isset($_POST['submit'])){

	$createdb = mysql_connect("localhost","root",$_POST['rpwd']);

	$id = 1;
	while(mysql_num_rows(mysql_query("SELECT user FROM mysql.user WHERE user='joomla".$id."'")) == 1){
		$id++;
	}
	
	if($createdb){
		mysql_query("CREATE USER 'joomla".$id."'@'localhost' IDENTIFIED BY 'usbw'") or die("Could not make user joomla".$id.":<br>".mysql_error()); // Create new user: 'joomla{id}'
			
		$zip = new ZipArchive;
		if ($zip->open("database.zip") === TRUE) {
			mkdir('../../mysql/data/joomla'.$id);
			$zip->extractTo('../../mysql/data/joomla'.$id);
			$zip->close();
			unlink("database.zip");
		} 
		else {
			echo 'Could create database!';
		}
		mysql_query("GRANT ALL PRIVILEGES ON `joomla".$id."`.* TO 'joomla".$id."'@'localhost'") or die("Could not grant user joomla".$id.":<br>". mysql_error()); // Grant user 'joomla{id}' for database 'joomla{id}'
		
		$hash = md5(mktime());
		$pwd = md5($_POST['password'].$hash).":".$hash;
		mysql_query("UPDATE joomla".$id.".jos_users SET password='".$pwd."' WHERE username='admin'") or die("Could not change admin password, default: usbw:<br>".mysql_error());
		
		$string = '
			<?php
				class JConfig {
				/* Site Settings */
				var $offline = "0";
				var $offline_message = "Deze website is tijdelijk niet beschikbaar i.v.m. werkzaamheden.<br /> Probeert u het later nog eens.";
				var $sitename = "'.$_POST["titel"].'";
				var $editor = "tinymce";
				var $list_limit = "20";
				var $legacy = "0";
				/* Debug Settings */
				var $debug = "0";
				var $debug_lang = "0";
				/* Database Settings */
				var $dbtype = "mysql";
				var $host = "localhost";
				var $user = "joomla'.$id.'";
				var $password = "usbw";
				var $db = "joomla'.$id.'";
				var $dbprefix = "jos_";
				/* Server Settings */
				var $live_site = "";
				var $secret = "ZgtQsJKNrJplWlzu";
				var $gzip = "0";
				var $error_reporting = "-1";
				var $helpurl = "http://help.joomla.org";
				var $xmlrpc_server = "0";
				var $ftp_host = "127.0.0.1";
				var $ftp_port = "21";
				var $ftp_user = "";
				var $ftp_pass = "";
				var $ftp_root = "";
				var $ftp_enable = "0";
				var $force_ssl = "0";
				/* Locale Settings */
				var $offset = "0";
				var $offset_user = "0";
				/* Mail Settings */
				var $mailer = "mail";
				var $mailfrom = "'.$_POST["email"].'";
				var $fromname = "'.$_POST["titel"].'";
				var $sendmail = "/usr/sbin/sendmail";
				var $smtpauth = "0";
				var $smtpsecure = "none";
				var $smtpport = "25";
				var $smtpuser = "";
				var $smtppass = "";
				var $smtphost = "localhost";
				/* Cache Settings */
				var $caching = "0";
				var $cachetime = "15";
				var $cache_handler = "file";
				/* Meta Settings */
				var $MetaDesc = "Joomla! - Het dynamische portaal- en Content Management Systeem";
				var $MetaKeys = "joomla, Joomla, JoomlaCommunity";
				var $MetaTitle = "1";
				var $MetaAuthor = "1";
				/* SEO Settings */
				var $sef           = "0";
				var $sef_rewrite   = "0";
				var $sef_suffix    = "0";
				/* Feed Settings */
				var $feed_limit   = 10;
				var $feed_email   = "author";
				var $log_path = "logs";
				var $tmp_path = "tmp";
				/* Session Setting */
				var $lifetime = "15";
				var $session_handler = "database";
			}
			?>
			';

		$fp = fopen('configuration.php', 'w');
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
			Titel website:<input type="text" name="titel"><br>
			Email:<input type="text" name="email"><br>
			Administrator password:<input type="text" name="password"><br><br>
			MySQL root password: <input type="text" name="rpwd" value="usbw">(default: usbw)<br>
			<input type="submit" value="instal" name="submit">
		</form>
		';
}

?>