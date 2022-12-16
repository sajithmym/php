<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "shopping-cart";

// Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }

function getDbConnection(){
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "shopping-cart";

    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
    return $conn;
}
 
?>