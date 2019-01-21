<?php 
  include('connect.php');
  //session_start();
$c = 0;

if(isset($_POST['insert_pro'])){
    //getting text data from the fields
    $rank = $_POST['pro_title'];
    $qty = intval($_POST['pro_price']);
   

 if(isset($_POST['pro_brand'])){
    $c = $_POST['pro_brand'];
}

if($c == '1'){

      $q = "UPDATE `dota2` SET `Quantity` = Quantity - '$qty' WHERE `dota2`.`rank` = '$rank'";
      $query = mysqli_query($con,$q);
}
if($c == '2'){
     $q = "UPDATE `csgo` SET `quantity` = quantity - '$qty' WHERE `csgo`.`rank` = '$rank'";
      $query = mysqli_query($con,$q);
}  

if($c == '3'){
     $q = "UPDATE `fifa` SET `quantity` = quantity - '$qty' WHERE `fifa`.`rank` = '$rank'";
      $query = mysqli_query($con,$q);
} 

if($c == '4'){
      $q = "UPDATE `pubg` SET `quantity` = quantity - '$qty' WHERE `pubg`.`rank` = '$rank'";
      $query = mysqli_query($con,$q);
} 

if($c == '5'){
      $q = "UPDATE `r6` SET `quantity` = quantity - '$qty' WHERE `r6`.`rank` = '$rank'";
      $query = mysqli_query($con,$q);
} 

if($c == '6'){
     $q = "UPDATE `bf5` SET `quantity` = quantity - '$qty' WHERE `bf5`.`rank` = '$rank'";
      $query = mysqli_query($con,$q);
} 

//$_SESSION['success'] = "You just purchased an account!!";

  header("location: index2.php");
  
}
?> 

<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta name="description" content="We sell Steam gaming accounts all over Pakistan">
    <meta name="author" content="Steam Accounts Pakistan">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Steam Accounts Pakistan</title>

   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bangers|Old+Standard+TT">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link  rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link  rel="stylesheet" type="text/css" href="css/style.css">
   

<body>

  <div>
    <?php if(isset($_SESSION['success'])): ?>
      <div>
        <h3>
          <?php 
            echo $_SESSION['success'];
            unset($_SESSION['success']);
          ?>
        </h3>
      </div>
    <?php endif ?>

    <?php if (isset($_SESSION["mail"])) :?>
      <p>Welcome <strong><?php echo $_SESSION['mail']; ?></strong></p>
      <p><a href="index2.php? logout='1'" style="color: black">Logout</a></p>
    <?php endif ?>
  </div>




<!-- JumboTron Account list -->

<div class="container-fluid">
  <div class="jumbotron">
    <div class = "row" >
     <div class = "text-center my-4 col-md-12 col-sm-6">
        <h2> <strong> Fill the details below to proceed </strong></h2>
      </div>

</div>
<div class="container">
    <h1 class="text-center my-4"><i class="fas fa-plus fa-md"></i> <span class="d-none d-sm-inline"> Add New </span> Product </h1>
    <form action="checkout.php" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto">
                <label for="pro_title" class="float-md-right"> <span class="d-sm-none d-md-inline"> Select </span> Account:</label>
            </div>
            <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-file-signature"></i></div>
                    </div>
                    <select class="form-control" id="pro_title" name="pro_title">
                        <option>Available Accounts</option>
                        <?php
                            $getBrandsQuery = "select id,rank from dota2 union select id,rank from csgo union select id,rank from fifa union select id,rank from pubg union select id,rank from r6 union select id,rank from bf5";
                            $getBrandsResult = mysqli_query($con,$getBrandsQuery);
                            while($row = mysqli_fetch_assoc($getBrandsResult)){
                                $b_id = $row['id'];
                                $b_title = $row['rank'];
                                echo "<option value='$b_title'>$b_title</option>";
                            }
                        ?>
                    </select>
                </div>
            </div>
        </div>
        <div class="row my-3">
            <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto">
                <label for="pro_brand" class="float-md-right"> <span class="d-sm-none d-md-inline"> Game: </span></label>
            </div>
            <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-stamp"></i></div>
                    </div>
                    <select class="form-control" id="pro_brand" name="pro_brand">
                        <option>Select Game</option>
                        <?php
                            $getBrandsQuery = "select * from games";
                            $getBrandsResult = mysqli_query($con,$getBrandsQuery);
                            while($row = mysqli_fetch_assoc($getBrandsResult)){
                                $brand_id = $row['id'];
                                $brand_title = $row['name'];
                                echo "<option value='$brand_id'>$brand_title</option>";
                            }
                        ?>
                    </select>
                </div>
            </div>
            
        </div>
        <div class="row my-3">
            <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto">
                <label for="pro_price" class="float-md-right"> <span class="d-sm-none d-md-inline"> Product </span> Quantity </label>
            </div>
            <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-money-bill"></i></div>
                    </div>
                    <input class="form-control" id="pro_price" name="pro_price" placeholder="Enter Product Quantity">
                </div>
            </div>
        </div>
      
        <div class="row my-3">
            <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto"></div>
            <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4">
                <button type="submit" name="insert_pro" class="btn btn-primary btn-block" style="background-color: #fe4578;
  border-color: #ffffff;"><i class="fas fa-plus"></i> Buy Now! </button>
            </div>
        </div>
    </form>
</div>

</div>
<!-- Jummbotron account list -->

</body>
</html>
