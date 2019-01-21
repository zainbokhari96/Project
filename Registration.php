<?php

require_once "server/db_connection.php";

if(isset($_POST['insert_registration'])){
    $fname = $_POST['first_name'];
    $lname =$_POST['Last_name'];
    $gen =$_POST['gender'];
    $user_dob = $_POST['dateofbirth'];
    $mail = $_POST['email'];
    $pass =$_POST['password'];
    $con_pass = $_POST['confirmpassword'];

    $q = "insert into registration (first_name,last_name,gender,dob,email,password,confrim_password)
    values ('$fname','$lname','$gen','$user_dob','$mail','$pass','$con_pass')";
    $r = mysqli_query($con,$q);
    if(!$r){
        echo "NOT EXECUTE";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css"
          rel="stylesheet"  type='text/css'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bangers|Old+Standard+TT">

</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark">
    <a class="navbar-brand" href="#">Steam Accounts Pakistan</a>
    <!-- Links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="index.html">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="Registration.php">Registration</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="Login.html">Login</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="Forget%20Password.html">Forget Password</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="about.html">About</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="Contact_Us.php">Contact</a>
        </li>
    </ul>

</nav>


    <div class="container">
        <h1 class="text-center my-4"> <i class="fas fa-users fa-md"></i>
         Registration <span class="d-none d-sm-inline"> Panel </span>
        </h1>
        <form action="Registration.php" method="post">
            <div class="row">
                    <div class="m-md-auto m-sm-auto col-sm-4 col-lg-2">
                        <label for="first_name" class="float-md-right d-none d-sm-inline">
                        <span class="d-sm-none d-md-inline">
                            First </span> Name :
                        </label>
                    </div>
                    <div class="col-sm-8 col-lg-4">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-file-signature"></i></div>
                            </div>
                            <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter First Name" >
                        </div>
                    </div>

                    <div class="m-md-auto m-sm-auto col-sm-4 col-lg-2">
                        <label for="Last_name" class="float-md-right d-none d-sm-inline">
                        <span class="d-sm-none d-md-inline">
                            Last </span> Name :
                        </label>
                    </div>
                    <div class="col-sm-8 col-lg-4">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-file-signature"></i></div>
                            </div>
                            <input type="text" class="form-control" id="Last_name" name="Last_name" placeholder="Enter Last Name" >
                        </div>
            </div>
            </div>
            <div class="row my-3">
                <div class="m-md-auto m-sm-auto col-sm-4 col-lg-2">
                    <label for="gender" class="float-md-right d-none d-sm-inline"> <span class="d-sm-none d-md-inline"> Gender </span> Type :</label>
                </div>
                <div class="col-sm-8 col-lg-4">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-male"></i></div>
                        </div>
                        <select class="form-control" id="gender" name="gender">
                            <option>Select Gender</option>
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </div>
                </div>
                <div class="m-md-auto m-sm-auto col-sm-4 col-lg-2">
                    <label for="dateofbirth" class="float-md-right d-none d-sm-inline">
                        <span class="d-sm-none d-md-inline">
                            Date Of </span> Birth :
                    </label>
                </div>
                <div class="col-sm-8 col-lg-4">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                        </div>
                        <input type="date" class="form-control" id="dateofbirth" name="dateofbirth" placeholder="Enter Date Of Birth" >
                    </div>
                </div>
            </div>
                <div class="row my-3">
                    <div class="m-md-auto m-sm-auto col-sm-4 col-lg-2">
                        <label for="email" class="float-md-right d-none d-sm-inline"> <span class="d-sm-none d-md-inline"> Email </span> Address :</label>
                    </div>
                    <div class="col-sm-8 col-lg-10">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="far fa-envelope"></i></div>
                            </div>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Enter Your Email Address" required pattern="[-0-9a-zA-Z.+_]+@[-0-9a-zA-Z.+_]+.[a-zA-Z]{2,4}">
                        </div>
                    </div>
                </div>
            <div class="row my-3">
                <div class="m-md-auto m-sm-auto col-sm-4 col-lg-2">
                    <label for="password" class="float-md-right d-none d-sm-inline"> <span class="d-sm-none d-md-inline"> </span> Password :</label>
                </div>
                <div class="col-sm-8 col-lg-10">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-key"></i></div>
                        </div>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter Your Password" required>

                    </div>
                </div>
            </div>
            <div class="row my-3">
                <div class="m-md-auto m-sm-auto col-sm-4 col-lg-2">
                    <label for="confirmpassword" class="float-md-right d-none d-sm-inline"> <span class="d-sm-none d-md-inline">Confirm </span> Password :</label>
                </div>
                <div class="col-sm-8 col-lg-10">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-key"></i></div>
                        </div>
                        <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" placeholder="Enter Confirm Password" required>
                    </div>
                </div>
            </div>
            <div class="row my-3">
                <div class="col-sm-4 col-lg-2"></div>
                <div class="col-sm-8 col-lg-4">
                    <button type="submit" name="insert_registration" style="background-color: darkred" class="btn btn-primary btn-block"><i class="far fa-thumbs-up"></i> Submit </button>
                </div>
            </div>
        </form>
    </div>

<div id="footer">
    <footer class="ct-u-backgroundDarkGray" style="margin-bottom: 40px">

        <div class="ct-footerBottom">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <p>COPYRIGHT © <a href="/">Steam Accounts Pakistan</a> 2018</p>
                    </div>
                    <div class="col-sm-6">
                        <div class="pull-right">
                            <div class="ct-socials">
                                <ul class="Allign-the-elements">
                                    <li>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Pinterest"><i class="fa fa-fw fa-pinterest"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Instagram"><i class="fa fa-fw fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook"><i class="fa fa-fw fa-facebook-square"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter"><i class="fa fa-fw fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="LinkedIn"><i class="fa fa-fw fa-linkedin"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>


</body>
</html>
