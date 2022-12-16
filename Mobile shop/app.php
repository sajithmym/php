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
            background-color: rgba(0, 0, 0, 0.8);
        }

        img {
            width: 220px !important;
            height: 200px !important;
        }

        h1 {
            text-align: center;
            color: rgba(155, 50, 31, 1);
            margin: 15px;
            text-decoration: underline;
        }

        #j {
            border: none;
            background-color: inherit;
        }

        p {
            color: darkcyan;
        }

        .container {
            border: 1px solid gray;
            box-shadow: 0 0 10px whitesmoke;
            background-color: rgba(10, 10, 10, 0.25);
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
            color: rgba(220, 133, 20, 0.731);
            padding-top: 7px;
            padding-left: 20px;
        }

        h3 {
            color: rgba(0, 0, 0, 0);
            text-align: center;
        }

        h3:hover {
            color: cornflowerblue
        }

        .pop {
            height: 170px;
            align-items: center;
            margin: 1% 40%;
            background-color: rgb(4, 4, 164, 0.3);
            padding: 20px;
            border-radius: 20px;
        }

        .pop input {
            display: flex;
            margin: 10px;
            border-radius: 10px;
            transition: all 1s;
        }

        .pop input[type='submit'],
        .pop input[type='button'] {
            background-color: rgb(80, 54, 54);
            float: right;
            font-size: larger;
        }

        .pop input[type='submit']:hover,
        .pop input[type='button']:hover {
            background-color: orangered;
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
            color: yellowgreen;
            margin-top: 10px;
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
        user = localStorage.getItem('data')
        if (!user || user=='')
            window.location.href = 'login.php';
    </script>

    <p id='out' onclick="lo()">Logout</p>
    <div id="show_user"></div>
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
                try {
                    $Q = "INSERT INTO `list` (`id`, `link`, `name`) VALUES ('$num', '\"$_POST[linkadd]\" ', '$_POST[nameadd]');";
                    $list = mysqli_query($saj, $Q);
                    echo "$_POST[nameadd] phone Added Successfully...";
                } catch (Exception $e) {
                    echo "error : " . $e->getMessage();
                }
            }
        }
        if (isset($_POST['view'])) {
            echo "_View_";
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
    <h1>Smart Mobile shop Online Store</h1>
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
    </center>
    <h3>Developed By Sajithmym</h3>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <script src="./app.js"></script>

</body>

</html>