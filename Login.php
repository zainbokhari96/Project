<?php 
  if(isset($_SESSION)) 
  { 
        session_destroy(); 
  } 
include('server/server.php');
/*
    session_start();
    //connect to the database
    $con = mysqli_connect('localhost','root','','steam');

    if (isset($_POST['done'])) 
    {
        $username = $_POST['mail'];
        $password = $_POST['password'];
        echo "$username";
        echo "$password";

        $username = stripslashes($username);
        $password = stripslashes($password);
        
        if (empty($username)) 
        {
            echo "Username is required";
        }
        if (empty($password))
        {
            echo "Password is required";
        }

       
            $query = "SELECT * FROM `registration` WHERE email='$username' AND password='$password'";
            $results = mysqli_query($con,$query);
            $count = mysqli_num_rows($results);
           
            if ($count == 1) 
            {
              $_SESSION['username']=$username;
              $_SESSION['success'] = "You are now logged in";
               header("location: index.html");
            }
            else 
            {
               echo "Wrong Email or Password combination";
            }
        //header("location: Login.php");
    }*/
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login </title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/bootstraplogin.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

</head>
<body>
  
<form method="post">
  <?php include('errors.php')?>
  <div class="limiter">
    <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
      <div class="wrap-login100">
        <form class="login100-form validate-form">
          <span class="login100-form-logo">
            <i class="zmdi zmdi-landscape"></i>
          </span>

          <span class="login100-form-title p-b-34 p-t-27">
            Log in
          </span>

          <div class="wrap-input100 validate-input">
            <input class="input100" type="text" name="mail" placeholder="Email">
            <span class="focus-input100" data-placeholder="&#xf207;"></span>
          </div>

          <div class="wrap-input100 validate-input">
            <input class="input100" type="password" name="password" placeholder="Password">
            <span class="focus-input100" data-placeholder="&#xf191;"></span>
          </div>

          <div class="contact100-form-checkbox">
            <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
            <label class="label-checkbox100" for="ckb1">
              Remember me
            </label>
          </div>

          <div class="container-login100-form-btn">
            <button type="submit" class="login100-form-btn" name="done" value="login">
              Login
            </button>
          </div>


          <div class="container-login100-form-btn text-center p-t-90">
            <a class="login100-form-btn " href="registration.html" style="width: 30px; height: 40px; ">
              Sign up!
           
            </a>
            <br>
            <a class="container-login100-form-btn p-t-5" href="ForgetPassword.html">
           
              Forgot Password?
            </a>
            <br>
            
            <a href="index.php" class="p-t-5">
              Go Home
            </a>
          </div>
        </form>
      </div>
    </div>
  </div>
</form> 

  <div id="dropDownSelect1"></div>
  
<!--===============================================================================================-->
  <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/bootstrap/js/popper.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/daterangepicker/moment.min.js"></script>
  <script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
  <script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
  <script src="js/main.js"></script>

</body>
</html>