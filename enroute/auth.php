<?php
session_start();
error_reporting(E_ALL & ~E_NOTICE);
if($_POST['username']) {
  //include('connection.php');
  $username = strip_tags($_POST['username']);
  $password = strip_tags($_POST['password']);







$conn = new mysqli('localhost', 'root', '', 'app2');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

 $sql = "SELECT * FROM members where `username` = 'admin' LIMIT 1";


$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $userId = $row["id"];
        $dbUserName = $row["username"];
        $dbPassword .$row["password"];
    }
} else {
    echo "reeor 111";
}







 

if($username === $dbUserName ) {
    $_SESSION['username'] = $username;
    $_SESSION['id'] = $userId;
    header('Location: user.php');
    echo "all is wellll";
  }else {
    echo "<b><i>Incorrect credentials</i><b>";

  }
  echo(mysqli_error($db));
}
echo $dbUserName ." ".$dbPassword;
echo "<br>";
echo($sql);


$conn->close();

?>


