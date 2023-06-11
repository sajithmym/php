<?php
$count = 0;
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "save";

$db = mysqli_connect($servername, $username, $password, $dbname);
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
$data = json_decode($_POST['d'], true);
foreach ($data as $ck) {
    $count += 1;
    if ($count == 1) {
        $owner = $ck['user'];
        try {
                $Q = "DROP TABLE $owner ";
                $list = mysqli_query($db, $Q);
        } catch (Exception $e) {
            echo 'cool';
        }

        $Q = "CREATE TABLE $owner ( id int AUTO_INCREMENT PRIMARY KEY, item varchar(100), qty int ); ";
        $list = mysqli_query($db, $Q);
        continue;
    }
    echo $owner;
    $Q = " INSERT INTO `$owner` (item,qty) VALUES ('$ck[nm]',$ck[qty]); ";
    $list = mysqli_query($db, $Q);
}
mysqli_close($db);