<?php include('menu.php'); ?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Customer Details - Booking</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'><link rel="stylesheet" href="./styleCustomer.css">

</head>
<body>

<body>
        <div class="bg-image"></div>
        <div class="container">
            <div class="left">
                <div class="yellow">
                    <h1>Customer Details</h1>
                    <p clas="tag">Fill the required details inorder to get your tickets.</p>
                    <h2>Easy Booking</h2>
                </div>
            </div>
            <div class="right">
                <div class="right-e">
                    <form method="POST" action="cusDetailsForm.php">
                        <div class="input-box">
                            <label>NIC Number</label>
                            <input type="text" name="nic" id="nic" required>
                        </div> <br>
                        <div class="input-box">
                            <label>Full Name</label>
                            <input type="text" name="uname" id="uname" required>
                        </div>
                        <div class="input-box">
                            <label>E-mail</label>
                            <input type="email" name="email" id="email" required>
                        </div>
                        <div class="input-box">
                            <label>Contact Number</label>
                            <span>
                            <input type="text" name="contact" id="pass" required>
                        </div>
                        <div class="input-box"> 
                            <label>Address</label>
                            <span><input type="text" name="add" id="cpass" required>
                        </div>

                        <div class="input-box">
                            <label>Select Date</label>
                            <input type="date" name="date" id="date" required>
                        </div>

                       
                        
                        <div class="input-box">
                            <label>Origin</label>
                            <span>
                                <select name="origin" id="origin" required>
                                    <option value="Colombo" selected>Colombo</option>
                                    <option value="Jaffna">Jaffna</option>
                                    <option value="Trincomalee">Trincomalee</option>
                                    <option value="Ampara">Ampara</option>
                                    <option value="Kataragama">Kataragama</option>
                                    <option value="Ratnapura">Ratnapura</option>
                                    <option value="Embilipitiya">Embilipitiya</option>
                                    <option value="Awissawella">Awissawella</option>
                                    <option value="Bandarawela">Bandarawela</option>
                                    <option value="Mahiyanganaya">Mahiyanganaya</option>
                                    <option value="Kalmunai">Kalmunai</option>
                                    <option value="Akkaraipattu">Akkaraipattu</option>
                                    <option value="Maharagama">Maharagama</option>
                                    <option value="Dambulla">Dambulla</option>
                                    <option value="Gampola">Gampola</option>
                                    <option value="Mannar">Mannar</option>
                                    <option value="Matara">Matara</option>
                                    <option value="Kurunegala">Kurunegala</option>
                                    <option value="Kalpitiya">Kalpitiya</option>
                                    <option value="Matale">Matale</option>
                                    <option value="Kandy">Kandy</option>
                                    <option value="Monaragala">Monaragala</option>
                                    <option value="Hakamana">Hakamana</option>
                                    <option value="Negombo">Negombo</option>
                                    <option value="Kaduruwela">Kaduruwela</option>
                                    <option value="Nuwareliya">Nuwareliya</option>
                                    <option value="Kuliyapitiya">Kuliyapitiya</option>
                                    <option value="Gampaha">Gampaha</option>
                                    <option value="Kegalle">Kegalle</option>
                                    <option value="Horona">Horona</option>
                                    <option value="Medawachiya">Medawachiya</option>
                                    <option value="Vavuniya">Vavuniya</option>
                                    <option value="Nawalapatiya">Nawalapatiya</option>
                                    <option value="Panadura">Panadura</option>
                                    <option value="Hatton">Hatton</option>
                                    <option value="Balangoda">Balangoda</option>
                                    <option value="Badulla">Badulla</option>
                                    <option value="Batticloa">Batticloa</option>
                                    <option value="Galle">Galle</option>
                                    <option value="Anuradhapura">Anuradhapura</option>
                                    <option value="Puttalam">Puttalam</option>
                                    <option value="Hambanthota">Hambanthota</option>
                                    <option value="Peradeniya">Peradeniya</option>
                                    <option value="Mawanella">Mawanella</option>
                                    <option value="Wellawaya">Wellawaya</option>

                                </select>
                            
                        </div>
                     
                        <div class="input-box"> 
                            <label>Destination</label>
                            <span>
                                <select name="destination" id="destination" required>
                                    <option value="Colombo" selected>Colombo</option>
                                    <option value="Jaffna">Jaffna</option>
                                    <option value="Trincomalee">Trincomalee</option>
                                    <option value="Ampara">Ampara</option>
                                    <option value="Kataragama">Kataragama</option>
                                    <option value="Ratnapura">Ratnapura</option>
                                    <option value="Embilipitiya">Embilipitiya</option>
                                    <option value="Awissawella">Awissawella</option>
                                    <option value="Bandarawela">Bandarawela</option>
                                    <option value="Mahiyanganaya">Mahiyanganaya</option>
                                    <option value="Kalmunai">Kalmunai</option>
                                    <option value="Akkaraipattu">Akkaraipattu</option>
                                    <option value="Maharagama">Maharagama</option>
                                    <option value="Dambulla">Dambulla</option>
                                    <option value="Gampola">Gampola</option>
                                    <option value="Mannar">Mannar</option>
                                    <option value="Matara">Matara</option>
                                    <option value="Kurunegala">Kurunegala</option>
                                    <option value="Kalpitiya">Kalpitiya</option>
                                    <option value="Matale">Matale</option>
                                    <option value="Kandy">Kandy</option>
                                    <option value="Monaragala">Monaragala</option>
                                    <option value="Hakamana">Hakamana</option>
                                    <option value="Negombo">Negombo</option>
                                    <option value="Kaduruwela">Kaduruwela</option>
                                    <option value="Nuwareliya">Nuwareliya</option>
                                    <option value="Kuliyapitiya">Kuliyapitiya</option>
                                    <option value="Gampaha">Gampaha</option>
                                    <option value="Kegalle">Kegalle</option>
                                    <option value="Horona">Horona</option>
                                    <option value="Medawachiya">Medawachiya</option>
                                    <option value="Vavuniya">Vavuniya</option>
                                    <option value="Nawalapatiya">Nawalapatiya</option>
                                    <option value="Panadura">Panadura</option>
                                    <option value="Hatton">Hatton</option>
                                    <option value="Balangoda">Balangoda</option>
                                    <option value="Badulla">Badulla</option>
                                    <option value="Batticloa">Batticloa</option>
                                    <option value="Galle">Galle</option>
                                    <option value="Anuradhapura">Anuradhapura</option>
                                    <option value="Puttalam">Puttalam</option>
                                    <option value="Hambanthota">Hambanthota</option>
                                    <option value="Peradeniya">Peradeniya</option>
                                    <option value="Mawanella">Mawanella</option>
                                    <option value="Wellawaya">Wellawaya</option>

                                </select>
                        </div>
                      

                        <div class="tc">
                            <input type="checkbox">
                            <p> By signing up I agree with terms and conditions.</a></p>
                        </div>
                        <div class="buttons">
                             <button type="submit" name="submit">Next</button> 
                        </div>
                        <p>or Go <a href="index.php">Back</a></p>
                    </form>
                </div>

            </div>
        </div>
    </body>

  
</body>
</html>

<?php 
    // establish database connection
    $conn = mysqli_connect("localhost", "root", "", "easy_booking");

    if(isset($_POST['submit']))
    {
        $nic=mysqli_real_escape_string($conn, $_POST['nic']);
        $uname=mysqli_real_escape_string($conn, $_POST['uname']);
        $email=mysqli_real_escape_string($conn, $_POST['email']);
        $cont=mysqli_real_escape_string($conn, $_POST['contact']);
        $add=mysqli_real_escape_string($conn, $_POST['add']);

        $date=date('Y-m-d', strtotime($_POST['date']));
        $origin=mysqli_real_escape_string($conn, $_POST['origin']);
        $destination=mysqli_real_escape_string($conn, $_POST['destination']);

        //sql for store
        $sql="INSERT INTO customer VALUES('$nic','$uname','$email','$add','$cont','$origin','$destination','$date')";

        //execute sql
        $res=mysqli_query($conn,$sql) or die(mysqli_error($conn));
        echo $res;

        if($res==true)
        {   //redirect
            // header('location:'.'http://localhost/project/busTable.php');
            echo `<script>
            window.location.href = 'busTable.php';
            </script>`;

        }
        else
        {
            //redirect
            echo `<script>
            window.location.href = 'customerdetails.php';
            </script>`;
            // header('location:'.'http://localhost/project/customerdetails.php');
        }
    }

    // close database connection
    mysqli_close($conn);
?>
