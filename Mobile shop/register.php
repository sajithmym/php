<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="author" content="Kannagara Hostel Boys" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <meta name="description" content="Uok Web_programming Assignment" />
  <title>Smart Mobile Regiter</title>
  <link rel="icon" href="i.ico" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />
  <link rel="stylesheet" href="./jay jay.css" />
</head>

<body>
  <section class="h-100">
    <div class="container h-100">
      <div class="row justify-content-sm-center h-100">
      <p style="color:lightgreen;font-size:larger;text-align:center" id="msg"></p>
        <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
          <div class="card shadow-lg">
            <div class="card-body p-5">
              <h1 class="fs-4 card-title fw-bold mb-4">Register</h1>
              <form method="POST" class="needs-validation" novalidate="" autocomplete="off">
                <div class="mb-3">
                  <label class="mb-2 text-muted" for="name">Name</label>
                  <input id="name" type="text" class="form-control" name="name" value="" required autofocus />
                  <div class="invalid-feedback">Name is required</div>
                </div>

                <div class="mb-3">
                  <label class="mb-2 text-muted" for="email">E-Mail Address</label>
                  <input id="email" type="email" class="form-control" name="email" value="" required />
                  <div class="invalid-feedback">Email is invalid</div>
                </div>

                <div class="mb-3">
                  <label class="mb-2 text-muted" for="password">Password</label>
                  <input id="password" type="password" class="form-control" name="password" required />
                  <div class="invalid-feedback">Password is required</div>
                </div>

                <p class="form-text text-muted mb-3">
                  By registering you agree with our terms and condition.
                </p>

                <div class="align-items-center d-flex">
                  
                  <button type="submit" name="k" class="btn btn-primary ms-auto">
                    Register
                  </button>
                </div>
              </form>
            </div>
            <div class="card-footer py-3 border-0">
              <div class="text-center">
                Already have an account?
                <b onclick="golog()">Login</b>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div id="php">
    <?php
    if (isset($_POST['k'])) {
      include 'db.php';
      $user_list = array();
      $Q = "SELECT * FROM user";
      $list = mysqli_query($db, $Q);

      if (mysqli_num_rows($list) > 0) {
        while ($data = mysqli_fetch_assoc($list)) {
          array_push($user_list, "$data[email]");
        }
        $num = count($user_list);
      } else {
        echo "zero resault found";
        $num = 0;
      }
      $name = $_POST['name'];
      $address = $_POST['email'];
      $pass = $_POST['password'];
      echo "<script>console.log('$_POST[email]')</script>";
      $Q = "INSERT INTO `user` (`id`, `name`, `email`, `pass`) VALUES ('$num','$name','$address','$pass');";
      $list = mysqli_query($db, $Q);
      mysqli_close($db);
      echo "<script>
      document.getElementById('msg').innerHTML = 'User Created Successfully <br> Pleace Wait...'
      setTimeout(() =>window.location.href = 'login.php',2000);
      </script>";
    }
    ?>
  </div>
  <script src="js/login.js"></script>
  <script src="./Logic.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</body>

</html>