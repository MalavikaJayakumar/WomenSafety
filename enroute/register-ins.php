 <?php 
  session_start();
  if($_POST['submit']){

    $name     = strip_tags($_POST['name']);
    $username = strip_tags($_POST['username']);
    $password = strip_tags($_POST['password']);

    $db = mysqli_connect("localhost", "root", "", "app2") or die ("Failed to connect");
    $query = "INSERT INTO members(name,username,password,activated) VALUES('$name','$username', '$password','1')";
    $result = mysqli_query($db,$query);
    if($result) {
      echo "Succesfully registered";
      header('Location: index.php');
    }
    else {
      echo "Failed to register";
      echo mysqli_error($db)." ".$query;
    }
  }
?>