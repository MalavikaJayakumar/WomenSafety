<?php 
  session_start();
  if($_POST['submit']){
    $id = strip_tags($_POST['id']);
    $status = strip_tags($_POST['status']);




    $db = mysqli_connect("localhost", "root", "", "app2") or die ("Failed to connect");
    $query = "INSERT INTO sites (spot_name, ammenity,addr,longi,latti,contact,web,email)
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