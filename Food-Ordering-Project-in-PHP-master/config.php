<?php
/* Define MySQL connection details and database table name */ 
$SETTINGS["mysql_database"] = 'foodies';
$SETTINGS["USERS"] = 'php_users_login'; // this is the default table name that we used

/* Connect to MySQL */
$connection = mysqli_connect("localhost", "root", "", $SETTINGS["mysql_database"]);
if (!$connection) {
    die('Unable to connect to MySQL server.<br ><br >Please make sure your MySQL login details are correct.');
}

$db = mysqli_select_db($connection, $SETTINGS["mysql_database"]);
if (!$db) {
    die('Unable to select database.');
}
?>