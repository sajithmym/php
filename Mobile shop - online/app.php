<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Mobile Shop</title>
    <link rel="icon" href="i.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./jay jay.css">
    <style>
        body {
            background-color: whitesmoke;
        }

        img {
            width: 220px !important;
            height: 200px !important;
        }

        h1 {
            text-align: center;
            font-weight: bolder;
            color: rgba(155, 50, 31, 1);
            margin: 15px;
        }

        #j {
            border: none;
            background-color: inherit;
        }

        p {
            color: darkcyan;
        }

        .container {
            box-shadow: 0 0 3px whitesmoke;
            background-color: whitesmoke;
            border-radius: 20px;
        }

        .col-md-3 {
            background-color: rgba(156, 105, 85, 0.09) !important;
            border: 1px solid gray;
            border-radius: 10px;
            overflow: hidden;
            margin: 10px;
            padding: 20px;
        }

        .col-md-3:hover {
            box-shadow: 0 0 30px whitesmoke;
            border-radius: 20px;
            background-color: lightgray !important;
        }

        .show {
            background-color: rgba(60, 95, 95, 0.08);
            font-size: x-large;
            font-weight: bolder;
        }

        i {
            color: black;
            padding-top: 7px;
            padding-left: 20px;
        }

        h3 {
            color: cornflowerblue;
            text-align: center;
            font-size: small;
        }

        .pop {
            margin-left: 40%;
            height: 170px;
            align-items: center;
            width: fit-content;
            background-color: rgb(4, 4, 164, 0.3);
            padding: 20px;
            border-radius: 20px;
        }

        @media screen and (max-width: 768px) {
            .pop {
                margin-left: 20%;
                ;
            }
        }

        .pop input {
            display: flex;
            margin: 10px;
            border-radius: 10px;
            transition: all 1s;
        }

        .pop input[type='submit'],
        .pop input[type='button'] {
            background-color: lightsteelblue;
            text-align: center;
            float: right;
            font-size: larger;
        }

        .pop input[type='submit']:hover,
        .pop input[type='button']:hover {
            background-color: orangered;
        }

        .fa-solid {
            color: black;
            margin-left: 5px;
        }

        .fa-solid:hover {
            color: red;
        }

        th {
            font-size: larger;
            color: red;
            margin-top: 10px;
        }

        td {
            font-size: large;
            color: darkcyan;
            margin-top: 10px;
            font-weight: bolder;
        }

        a {
            text-decoration: none;
        }

        .dis {
            text-align: center;
        }

        #ko {
            color: gray;
        }
    </style>
</head>

<body>
    <script>
        selecting = []
        user = localStorage.getItem('data')
        if (!user || user == '')
            window.location.href = 'login.php';
    </script>

    <p id='out' onclick="lo()">Logout</p>
    <div id='show_user' name='su'></div>
    <div id="access"></div>
    <div class="method">
        <?php
        $saj = new mysqli('localhost', 'root', '', 'phone');
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            exit();
        }

        if (isset($_GET['id_item'])) {
            $q = "DELETE FROM list WHERE `list`.`id` = $_GET[id_item]";
            $delete = mysqli_query($saj, $q);
            echo "<script> 
            us = localStorage.getItem('data')
            window.location.href = 'app.php?user='+us
            </script>";
        }

        if (isset($_POST['okay'])) {
            echo "<script>console.log('Add pressed $_POST[nameadd]')</script>";
            if ($_POST['nameadd'] == '' || $_POST['linkadd'] == '')
                echo "<script>alert('Input Field is Empty');</script>";
            else {
                $Item_List = array();
                $Q = "SELECT * FROM list";
                $list = mysqli_query($saj, $Q);

                if (mysqli_num_rows($list) > 0) {
                    while ($data = mysqli_fetch_assoc($list)) {
                        array_push($Item_List, "$data[name]");
                    }
                    $num = count($Item_List);
                } else {
                    echo "zero resault found";
                    $num = 0;
                }

                if ((in_array("$_POST[nameadd]", $Item_List))) {
                    echo "Error Found ->  Duplicate entry '$_POST[nameadd]' For Phone Name Try with Another Name";
                } else {
                    try {
                        $Q = "INSERT INTO `list` ( `link`, `name`) VALUES ( '\"$_POST[linkadd]\" ', '$_POST[nameadd]');";
                        $list = mysqli_query($saj, $Q);
                        echo "$_POST[nameadd] phone Added Successfully...";
                    } catch (Exception $e) {
                        echo '';
                    }
                }
            }
        }
        if (isset($_POST['view'])) {
            echo "<script> window.location.href = 'view.php' </script>";
        }

        if (isset($_POST['del'])) {
            $Item_List = array();
            $Q = "SELECT * FROM list";
            $id_item = array();
            $list = mysqli_query($saj, $Q);

            if (mysqli_num_rows($list) > 0) {
                while ($data = mysqli_fetch_assoc($list)) {
                    array_push($Item_List, "$data[name]");
                    array_push($id_item, "$data[id]");
                }
            } else {
                echo "zero resault found";
            }

            echo "<div id='delteing'><center>
            <table>
                <tr> <Th> Mobile Name </Th> <Th></Th></tr>";
            for ($i = 0; $i != count($Item_List); $i++) {
                echo "<tr> <td> $Item_List[$i] </td>  <td>
                <a href='app.php?id_item=$id_item[$i]'
                <i class='fa-solid fa-delete-left'></i> </a>
                </td></tr>";
            }
            echo "</table>
             </center> </div>";
        }
        mysqli_close($saj);
        ?>
    </div>
    <h1>UOK MOBILE SHOP ONLINE STORE</h1>
    <div class="container">
        <div class="row justify-content-center">
            <?php
            $saj = new mysqli('localhost', 'root', '', 'phone');
            if (mysqli_connect_errno()) {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
                exit();
            }

            $Q = "SELECT * FROM list";
            $list = mysqli_query($saj, $Q);

            if (mysqli_num_rows($list) > 0) {
                while ($data = mysqli_fetch_assoc($list)) {
                    echo "<div class='col-md-3 text-center'> 
                    <p> Order Id is $data[id] </p>
                <img src=$data[link] class='img-fluid'>
                <p>  $data[name] </p>
                <button onclick='add(this)' class='btn btn-dark'> Add To Card </button>
             </div>";
                }
            } else {
                echo "zero resault found";
            }
            mysqli_close($saj);
            ?>
        </div>
    </div>

    <h1 style="margin-top: 20px;">Add to Card Items</h1>

    <center>
        <table>
            <div class="container" id="item"></div>
        </table>

        <input id='useronly' type="button" value="Place Order" class="btn btn-success" style="margin: 15pt;" onclick="order()">
    </center>
    <h3>- Design & Developed By Team Cyber boys -</h3>

    <input type="button" class="btn btn-dark" value="-----" style='width:100%'>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <script src="./app.js"></script>
    <div style="display:none;">
        <?php
        if (isset($_GET['user']))
            try {
                $servername = "bc6nefuf5btd70hpssix-mysql.services.clever-cloud.com";
                $username = "ubmwzieimi0ctsnu";
                $password = "XTl5zLC83Mkt2WVxBpUE";
                $dbname = "bc6nefuf5btd70hpssix";

                $db = mysqli_connect($servername, $username, $password, $dbname);
                if (!$db) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                $item = array();
                $qty = array();
                $Q = "SELECT * FROM $_GET[user]";
                $list = mysqli_query($db, $Q);

                if (mysqli_num_rows($list) > 0) {
                    while ($data = mysqli_fetch_assoc($list))
                        echo "<script> initialadd('$data[item]',$data[qty]) </script>";
                    echo "initialadd($data[item],$data[qty])";
                }
            } catch (Exception $e) {
                echo "";
            }
        mysqli_close($db);
        ?>
    </div>

</body>

</html>