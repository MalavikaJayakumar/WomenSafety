<?php 
	session_start();
	if($_POST['submit']){
		$username = strip_tags($_POST['username']);
		$password = strip_tags($_POST['password']);
		$db = mysqli_connect("localhost", "root", "", "app2") or die ("Failed to connect");
		$query = "INSERT INTO sites (username,password,activated) VALUES('$username', '$password','1')";
		$result = mysqli_query($db,$query);
		if($result) {
			echo "Succesfully registered";
			header('Location: complaints');//redirect to compliants
		}
		else {
			echo "Failed to register";
			echo mysqli_error($db);
		}
	}
?>