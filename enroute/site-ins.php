<?php 
	session_start();
	if($_POST['spot']){
		$spt = strip_tags($_POST['spot']);
		$typ = strip_tags($_POST['types']);
		$org = strip_tags($_POST['org']);
		$lon = strip_tags($_POST['lon']);
		$lat = strip_tags($_POST['lat']);
		$num = strip_tags($_POST['number']);
		$eml = strip_tags($_POST['mail']);
		$web = strip_tags($_POST['web']);



		$db = mysqli_connect("localhost", "root", "", "app2") or die ("Failed to connect");
		$query = "INSERT INTO sites (spot_name,	ammenity,addr,longi,latti,contact,web,email)
		 VALUES('$spt', '$typ','$org','$lon','$lat','$num','$web','$eml')";
		$result = mysqli_query($db,$query);

		if($result) {
			echo "Succesfully registered";
			header('Location: safe-site');//redirect to compliants
		}
		else {
			echo "Failed to register";
			echo mysqli_error($db);
			//echo "<br>";
			//echo($query);
		}
	}
?>