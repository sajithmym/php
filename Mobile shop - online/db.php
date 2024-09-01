<?php
$servername = "bc6nefuf5btd70hpssix-mysql.services.clever-cloud.com";
$username = "ubmwzieimi0ctsnu";
$password = "XTl5zLC83Mkt2WVxBpUE";
$dbname = "bc6nefuf5btd70hpssix";

$db = mysqli_connect($servername, $username, $password, $dbname);
if (!$db) {
  die("Connection failed: " . mysqli_connect_error());
}

?>