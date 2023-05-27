<?php
// define("Hostname","localhost");
// define("UserName","root");
// define("Password","");
// define("DATABASE","crud");
// $connection  = mysqli_connect(Hostname, UserName, Password,DATABASE);
// if(!$connection){
//     die("CONNECTION FALIDE");

// }


$servername = "localhost";
$username = "root";
$password = "";
$db_name ="crud";

// Create connection
$conn = new mysqli($servername, $username, $password, $db_name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";

?>