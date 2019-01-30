<?php 
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
                
            header("location: index.html");

            }
            else 
            {
               echo "Wrong Email or Password combination";
            }
        //header("location: Login.php");
    }
   //header("location: Login.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css">
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
            <a class="nav-link" href="Registration.html">Registration</a>
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
            <a class="nav-link" href="Contact%20Us.html">Contact</a>
        </li>
    </ul>

</nav>


<div class="container">
    <h1 class="text-center my-4"> <i class="fas fa-users fa-md"></i>
        <span class="d-none d-sm-inline"> Customer </span> Login
    </h1>
    <form method="post">
        <div class="row my-3">
            <div class="m-md-auto m-sm-auto col-sm-4 col-lg-2">
                <label for="email" class="float-md-right d-none d-sm-inline"> <span class="d-sm-none d-md-inline"> Email </span> Address :</label>
            </div>
            <div class="col-sm-8 col-lg-10">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="far fa-envelope"></i></div>
                    </div>
                    <input type="text" class="form-control" id="email" name="mail" onblur="checkEmail()" placeholder="Enter Your Email Address" >
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
                    <input type="text" class="form-control" id="password" name="password" placeholder="Enter Your Password" >
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-lg-2"></div>
        <div class="row my-3">
            <div class="col-sm-8  col-lg-4">
                <button type="submit" class="btn btn-primary btn-block" name="done" value="login"><i class="fas fa-unlock-alt"></i> Login </button>
            </div>
            <div class="col-sm-8 col-lg-4">
                <button type="button" class="btn btn-primary btn-block"><i class="fas fa-lock"></i> Forget Password </button>
            </div>
        </div>
    </form>
</div>


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


</body>
<script>
    function checkEmail(){
    //saeed.iqbal@gmail.com or saeed_86@ucp.edu.pk or saeed.iqbal.k8@ucp.edu.pk
        var reM1 = /^\w([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        var m = document.getElementById('em').value;
        if(reM1.test(m) || reM2.test(m))
        {
            document.getElementById('eres').innerHTML="VALID EMAIL";
        }
        else
        {
            document.getElementById('eres').innerHTML="INVALID EMAIL";
        }
    }
</script>
</html>