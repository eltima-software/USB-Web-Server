<?php
include("functions.php");

$dirname = str_replace("\\","/",strtolower(substr(dirname(__FILE__),0,-5)));
define("GIT","..\..\git\cmd\git");
chdir('test');

/*
putenv("HOME=".$dirname);
$output = shell_exec(GIT.' push origin master 2>&1');
echo $output;
exit();
*/
if(isset($_GET['add']) && isset($_POST['add'])){
	if(isset($_POST['file']) && is_array($_POST['file']) && count($_POST['file']) > 0){
		foreach($_POST['file'] AS $file){
			$output = shell_exec(GIT.' add "'.$file.'" 2>&1');
			echo $output;
		}
	}
	else{
		echo "<font color='red'>Er zijn geen bestanden geselecteerd om te adden!</font><br>";
	}
}

if(isset($_GET['commit']) && isset($_POST['commit'])){
	if(empty($_POST['message'])){
		echo "<font color='red'>Je hebt geen commit message ingevuld!</font><br>";
	}
	else{
		$status = shell_exec(GIT.' status');
		$data = filter_status($status);

		if(isset($_POST['file']) && is_array($_POST['file']) && count($_POST['file']) > 0){
			foreach($_POST['file'] AS $file){
				if(isset($data['files'][$file])){
					$file_data = $data['files'][$file];
					if($file_data['state'] == "unstaged"){
						if($file_data['type'] == "deleted"){
							$output = shell_exec(GIT.' rm "'.$file.'" 2>&1');
						}
						else{

							$output = shell_exec(GIT.' add "'.$file.'" 2>&1');
						}
					}
				
				}
			}
		}
		$status = shell_exec(GIT.' status');
		$data = filter_status($status);
		if(count($data['staged']) == 0){
			echo "Er waren geen bestanden \"gestaged\"";
		}
		else{		
			$output = shell_exec(GIT.' commit -m "'.$_POST['message'].'" 2>&1');
			echo $output;
		}
	}
}
//$output = shell_exec(GIT.' commit -m "test"');
//$output = shell_exec(GIT.' add "a.txt"');
//$output = shell_exec(GIT.' add "Nieuw tekstdocument.txt"');
$status = shell_exec(GIT.' status');
echo "<pre>".$status."</pre>";

$data = filter_status($status);

echo "<h2>Gewijzigde bestanden</h2>";
if((count($data['staged']) + count($data['unstaged'])) > 0){
	echo "<form method='post' action='?commit'>";
	foreach($data['staged'] AS $file){
		echo "<input type='checkbox' checked disabled value=\"".$file['file']."\" name='file[]'> ".$file['file']." (".$file['type'].")<br>";
	}
	foreach($data['unstaged'] AS $file){
		echo "<input type='checkbox' value=\"".$file['file']."\" name='file[]'> ".$file['file']." (".$file['type'].")<br>";
	}
	echo "<br>Wijzigingen:<br><textarea name='message'></textarea><br><input type='submit' name='commit' value='Update wijzigingen'></form>";
}
else{
	echo "Er zijn geen bestanden die gewijzigd zijn";
}
echo '<hr><h2>Bestanden die nog niet in GIT staan:</h2>';
if(count($data['untracked']) > 0){
	echo '<form method="post" action="?add">';
	foreach($data['untracked'] AS $file){
		echo "<input type='checkbox' value=\"".$file."\" name='file[]'> ".$file."<br>";
	}
	echo "<input type='submit' name='add' value='Voeg toe'>";
	echo '</form>';
}
else{
	echo "Alle bestanden staan in GIT";
}
echo "<hr>";
echo "<input type='submit' name='push' value='Zend naar server'> - <input type='submit' name='pull' value='Haal updates van server'>";
//echo "<pre>".print_r($data,true)."</pre>";
//echo "<pre>".print_r($list,true)."</pre>";
?>