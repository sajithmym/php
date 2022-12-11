<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Wish</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>

        body{
            background-color: rgba(0,0,0,0.8);
        }

        img {
            width: 100% !important;
            height: 100% !important;
        }

        h1 {
            text-align: center;
            color: orangered;
        }

        .container {
            border: 1px solid gray;
            box-shadow: 0 0 10px whitesmoke;
            background-color: black;
        }

        .col-md-3{
            border: 1px solid gray;
            border-radius: 10px;
            overflow: hidden;
            margin: 30px;
        }

        .col-md-3:hover{
            box-shadow: 0 0 30px whitesmoke;
            border-radius: 20px;

        }

    </style>
</head>

<body>
    <h1>My Super Heros...</h1>
    <div class="container">
        <div class="row justify-content-center">
            <?php
            $saj = new mysqli('localhost', 'root', '', 'sajith');
            if (mysqli_connect_errno()) {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
                exit();
            }

            $Q = "SELECT pic FROM image";
            $list = mysqli_query($saj, $Q);

            if (mysqli_num_rows($list) > 0) {
                while ($data = mysqli_fetch_assoc($list)) {
                    echo "<div class='col-md-3 text-center'> 
                <img src=$data[pic] class='img-fluid'>
             </div>
             ";
                }
            } else {
                echo "zero resault found";
            }
            mysqli_close($saj);
            ?>
        </div>
    </div>
    <h1>Developed By sajithmym</h1>
</body>

</html>