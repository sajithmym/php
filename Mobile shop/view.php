<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Orders</title>

    <style>
        body{
            background-image: linear-gradient(lightblue, lightcyan);
        }

        table{
            font-weight: bolder;
            text-align: center;
            margin-top: 40px;
            box-shadow: 0 0 5px black;
        }
        th{
            font-weight: bolder;
            font-size: x-large;
            color: black;
            padding: 10px;
        }

        td{
            font-weight: bolde;
            font-size: large;
            color: orangered;
            padding: 10px;
        }

        caption{
            margin: 15px;
            color: orange;
            font-size: large;
        }

        h1{
            color: brown;
        }
    </style>
</head>

<body>

    <script>
        selecting = []
        user = localStorage.getItem('data')
        console.log(user);
        if (user == 'Admin' || user=='SaJiTh')
            console.log("Hellow Admin ");
        else
            window.location.href = 'login.php';
    </script>
        <center>

        <h1>All Users Order Details</h1>
    <?php
    include 'db.php';
    $a = array();
    $Q = "SELECT * FROM user";
    $list = mysqli_query($db, $Q);

    if (mysqli_num_rows($list) != 0) {
        while ($data = mysqli_fetch_assoc($list)) {
            array_push($a, "$data[name]");
        }
    } else {
        echo "";
    }
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "save";
    $Details = mysqli_connect($servername, $username, $password, $dbname);
    if (!$db) {
        die("Connection failed: " . mysqli_connect_error());
    }

    foreach ($a as $r) {

        $Q = "SELECT * FROM $r";
        $Dsp = mysqli_query($Details, $Q);
        echo "<table border='5'> <tr> <th> Item </th>  <th> Quantity </th> </tr> <caption> $r Order Details </caption>";
        if (mysqli_num_rows($Dsp) > 0){
            while ($data = mysqli_fetch_assoc($Dsp)) {
                echo ("<tr> <td> $data[item] </td> <td> $data[qty] </td> </tr>");
            }
            echo "</table>";
        }
    }

    mysqli_close($Details);
    mysqli_close($db);
    ?>
        </center>
</body>

</html>