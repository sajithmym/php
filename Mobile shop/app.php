<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        body {
            background-color: rgba(0, 0, 0, 0.8);
        }

        img {
            width: 200px !important;
            height: 250px !important;
        }

        h1 {
            text-align: center;
            color: orangered;
        }

        #j {
            border: none;
            background-color: inherit;
        }

        p {
            color: lightseagreen;
        }

        .container {
            border: 1px solid gray;
            box-shadow: 0 0 10px whitesmoke;
            background-color: black;
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

        }

        .show {
            background-color: rgba(60, 95, 95, 0.08);
            font-size: x-large;
            font-weight: bolder;
        }

        #dis {
            display: flex;
            justify-content: center;
        }

        i {
            color: rgba(220, 133, 20, 0.731);
            padding-top: 7px;
            padding-left: 20px;
        }

        li {
            list-style-type: none;
            color: azure;
            font-size: larger;
        }

        #dis{
            margin: 10px;
        }

        h3{
            color: rgba(0, 0, 0, 0);
            text-align: center;
        }

        h3:hover{
            color:cornflowerblue
        }
    </style>
</head>

<body>

    <h1>Mobile shop</h1>
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
                <p> Order Id is $data[name] </p>
                <button onclick='add(this)' class='btn btn-dark'> Add To Card </button>
             </div>
             ";
                    // echo $data['id'],' ',$data['link'],' ',$data['name'],'<br>';
                }
            } else {
                echo "zero resault found";
            }
            mysqli_close($saj);
            ?>
        </div>
    </div>

    <h1 style="margin-top: 20px;">Add to Card Items</h1>

    <div class="container" id="item"></div>
    <h3>Developed By Sajithmym</h3>

    <script>
        let Delete = (u) => {
            u.parentElement.remove()
        }

        let add = (i) => {
            let code = `<div id='dis'>
            <li> ${i.parentElement.children[2].innerHTML} </li> <button id='j' onclick="Delete(this)"><i class="fa-solid fa-trash-can"></i></button>
            </div>`
            $('#item').append(code)
            document.getElementById('item').scrollIntoView()
            
        }
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

</body>

</html>