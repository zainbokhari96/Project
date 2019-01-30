<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstraplogin.css">
        <link rel="stylesheet" href="css/style.css">   
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css"
          rel="stylesheet"  type='text/css'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bangers|Old+Standard+TT">
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

<?php include_once ("includes/nav.php");
 ?>


    <form method="post">
      
  <?php include('errors.php')?>

  <div class="limiter">
    <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
      <div class="wrap-login100">
        <form class="login100-form validate-form">
          <span class="login100-form-logo">
            <i class="zmdi zmdi-plus"></i>
          </span>

          <span class="login100-form-title p-b-34 p-t-27">
            Sign up
          </span>

          <div class="wrap-input100 validate-input">
            <input class="input100" type="text" name="fname" placeholder="First Name">
            <span class="focus-input100" data-placeholder="&#xf207;"></span>
          </div>

          <div class="wrap-input100 validate-input">
            <input class="input100" type="text" name="lname" placeholder="Last Name">
            <span class="focus-input100" data-placeholder="&#xf207;"></span>
          </div>

          <div class="wrap-input100 validate-input">
            <input class="input100" type="password" name="Password_1" placeholder=" Password">
            <span class="focus-input100" data-placeholder="&#xf191;"></span>
          </div>

           <div class="wrap-input100 validate-input">
            <input class="input100" type="password" name="Password_2" placeholder="Confirm Password">
            <span class="focus-input100" data-placeholder="&#xf191;"></span>
          </div>

           <div class="wrap-input100 validate-input">
            <input class="input100" type="text" name="email" placeholder="Email">
            <span class="focus-input100" data-placeholder="&#xf207;"></span>
          </div>

          
          <label>Enter Your Date of Birth:   <input type="date" name="day"></label><br>
            <div style="text-align: center;">
            <span style="padding-right: 75px"><input  type="radio" name="gender" value="male"> <span>Male</span></span>
             <span style="padding-left: 75px"><input type="radio" name="gender" value="female"> <span>Female</span></span>
            </div>

          <div class="container-login100-form-btn p-t-27">
            <button type="submit" class="login100-form-btn" name="signup" value="signup">
            Sign up!
            </button>
          </div>


          
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