<?php
include 'connect.php';
$c = 0;

if(isset($_POST['done'])){

  $rank =  $_POST['Account_rank'];

 if(isset($_POST['category'])){
    $c = $_POST['category'];
    echo $c;
}

if($c == '1'){

      $q = "DELETE FROM `dota2` WHERE `dota2`.`rank` = '$rank'";
      $query = mysqli_query($con,$q);
}
if($c == '2'){
      $q = "DELETE FROM `csgo` WHERE `csgo`.`rank` = '$rank'";
      $query = mysqli_query($con,$q);
}  

if($c == '3'){
      $q = "DELETE FROM `fifa` WHERE `fifa`.`rank` = '$rank'";
      $query = mysqli_query($con,$q);
} 

if($c == '4'){
      $q = "DELETE FROM `pubg` WHERE `pubg`.`rank` = '$rank'";
      $query = mysqli_query($con,$q);
} 

if($c == '5'){
      $q = "DELETE FROM `r6` WHERE `r6`.`rank` = '$rank'";
      $query = mysqli_query($con,$q);
} 

if($c == '6'){
      $q = "DELETE FROM `bf5` WHERE `bf5`.`rank` = '$rank'";
      $query = mysqli_query($con,$q);
} 
  header("location: delete.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Delete Account</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link  rel="stylesheet" type="text/css" href="css/style1.css">
  <link  rel="stylesheet" type="text/css" href="css/style2.css">

  <link  rel="stylesheet" type="text/css" href="bootstrap.css">

 <style>
        .success {
            color: green;
            font-style: italic;
            font-weight: bold;
        }
        .fail {
            color: red;
            font-style: italic;
            font-weight: bold;
        }
    </style>
</head>
<body>


<div class="content">

   <div class="container-fluid" style="background-color: #222222" >
        <div class="row" style="background-color: #222222">
                <h1 class="text-primary" style="font-size: 50px">
                   <i class="fa fa-cubes"></i><strong>Delete Account</strong>
                </h1>
            
  <nav class="navbar navbar-inverse" style = "z-index: 1000 !important">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"><i class = "fa fa-dashboard"></i> DashBoard</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li ><a href="delete.php"> <i class = "fa fa-trash"></i> Delete Account</a></li>
       
        <li><a href="add.php"> <i class = "fa fa-plus"></i> Add Account</a></li>
        <li><a href="#"> <i class = "fa fa-usd"></i> Payments</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right" style ="margin-right: 10px">
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> <i class = "fa fa-user" ></i>
        Profile <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#"><i class = "fa fa-suitcase" ></i> Edit Profile</a></li>
          <li><a href="Forget Password.html"><i class = "fa fa-key" ></i> Change Password</a></li>
          <li><a href="#"><i class = "fa fa-sign-in" ></i>  Logout</a></li>
        </ul>
      </li>
    
    </ul>
   
    </div>
  </div>
</nav>
            
    </div>
  </div>
</div>


<form role="form" method="post">

<div class = "jumbotron">
<table id="acc">
  <tr>
    <th >Delete Vendor</th>
    
    
  </tr>
  <tr>
    <td></td>
  </tr>
 
  <tr>
    <td> <select name=category>
     <optgroup label="Game Categories">
        <option value="1">Dota 2</option>
        <option value="2">Counter Strike : GO</option>
        <option value="3">Fifa</option>
        <option value="4">Player Unknown's</option>
        <option value="5">Rainbow Six Seige</option>
        <option value="6">Battlefield V</option>
        
      </optgroup>
    </select></td>
    <td width="364"><div id="" style="color:#FF0000 "></div>
  </tr>
   <tr>
    <td><input required  min="0" minlength="1" maxlength="15" class="form-control"  name=Account_rank type="text" placeholder="Enter account Title/Rank" id="Account_rank" onblur="AccountName()"></td>
    <td width="364"><div id="ar" style="color:#FF0000 "></div>
  </tr>
  
  
 
 
</table>
<button type="submit" class="btn btn-success" name="done"  >Save</button>
<button type="reset" value ="Clear" class="btn ">Cancel</button>

</div>
</form>



</body>
</html>