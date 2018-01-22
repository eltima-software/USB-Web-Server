<?php
set_Time_limit(0);
include("functies.php");
include("header.php");

if(isset($_GET['install'])){
	if(isset($_POST['submit'])){
		if(@!is_dir("../root/".$_POST['dir'])){
			mkdir("../root/".$_POST['dir']);
		}
		if(@is_dir("../root/".$_POST['dir'])){
			$info = geturl("packages.php?install=".$_GET['install']);
			if($info=="UNKOWN"){
				echo "Het pakket dat je wilt installeren is bij ons niet bekend";
			}
			else{
				$info = unserialize($info);
				if(@copy($info['zip'],$_GET['install'].".zip")){
					$zip = new ZipArchive;
					if ($zip->open($_GET['install'].".zip") === TRUE) {
						$zip->extractTo('../root/'.$_POST['dir']);
						$zip->close();
						echo 'De packages is uitgepakt.<br>';
						unlink($_GET['install'].".zip");
						header('location: '.$_POST['dir'].'/'.$info['startfile']);
					} 
					else {
						echo 'Kon de package niet uitpakken';
					}
				}
				else{
					echo "Kon de package niet downloaden";
				}
			}
		}
		else{
			echo "U heeft een onbestaande map gekozen";
		}
	}
	else{
		echo '
			<form action="packages.php?install='.$_GET['install'].'" method="POST">
				Kies een map waarin u dit pakket wilt installeren. bij leeglaten word de root gekozen.:<input type="input" name="dir"><br>
				<input type="submit" name="submit" value="INSTALL"><br>
				<b>LETOP DIT KAN ENIGE TIJD DUREN!</b>
			</form>';
	}
}
else{
	echo 'Op deze pagina is het mogelijk om standaard pakketen te installeren.<br><br>';
	$packages = unserialize(geturl("packages.php"));
	foreach($packages AS $package){
		echo "<b><a style='color:black;text-decoration:none;' href='".$package['website']."'>".$package['titel']."</a></b> (".$package['versie'].") <a href='packages.php?install=".$package['id']."'>Installeer</a><br>";
	}
}
include("footer.php");
?>