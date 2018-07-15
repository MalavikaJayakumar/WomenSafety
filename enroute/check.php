<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "app2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

 $sql = "SELECT * FROM members where `username` = 'admin' LIMIT 1";


$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br>id:" . $row["id"];
        echo "<br>Name:" . $row["username"];
        echo "<br>pass" .$row["password"];
    }
} else {
    echo "0 results";
}
$conn->close();
?>