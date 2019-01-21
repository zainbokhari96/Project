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

<?php include_once ("includes/nav.php"); ?>

<div class="container">
    <h1 class="text-center my-4"> <i class="fas fa-users fa-md"></i>
        <span class="d-none d-sm-inline"> Customer </span> Login
    </h1>
    <form>
        <div class="row my-3">
            <div class="m-md-auto m-sm-auto col-sm-4 col-lg-2">
                <label for="email" class="float-md-right d-none d-sm-inline"> <span class="d-sm-none d-md-inline"> Email </span> Address :</label>
            </div>
            <div class="col-sm-8 col-lg-10">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="far fa-envelope"></i></div>
                    </div>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Enter Your Email Address" required pattern="[-0-9a-zA-Z.+_]+@[-0-9a-zA-Z.+_]+.[a-zA-Z]{2,4}" >
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
                    <input type="text" class="form-control" id="password" name="password" placeholder="Enter Your Password" required>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-lg-2"></div>
        <div class="row my-3">
            <div class="col-sm-8  col-lg-4">
                <button type="submit" class="btn btn-primary btn-block"><i class="fas fa-unlock-alt"></i> Login </button>
            </div>
            <div class="col-sm-8 col-lg-4">
                <button type="button" class="btn btn-primary btn-block"><i class="fas fa-lock"></i> Forget Password </button>
            </div>
        </div>
    </form>
</div>


<?php   include_once("includes/footer.php");  ?>



</body>
</html>
