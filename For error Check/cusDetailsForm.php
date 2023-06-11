<?php 

    if(isset($_POST['submit']))
    {
        $nic=$_POST['nic'];
        $uname=$_POST['uname'];
        $email=$_POST['email'];
        $cont=$_POST['contact'];
        $add=$_POST['add'];
    


        $date=date('y-m-d', strtotime($_POST['date']));
        $origin=$_POST['origin'];
        $destination=$_POST['destination'];

        $localhost="localhost";
        $un="root";
        $pw='';
        $dbname="easy_booking";


        

        $con=mysqli_connect($localhost,$un,$pw,$dbname);
        if(isset($con))
        {
            $query="INSERT INTO customer(nic,full_name,email,addresss,contactNo,origin,destination,datee) VALUES('$nic','$uname','$email','$add','$cont','$origin','$destination','$date');";
            $res=mysqli_query($con,$query);

            // echo "Connec to dDB";
            // echo `<script>
            // window.location.href = 'busTable.php';
            // </script>`;
            echo "<script> window.location.href = 'busTable.php' </script>";
        }
        else{
            echo "Failed to connect";
        }
    }
    else{
        echo "ERROR!!!";
    }


?>

