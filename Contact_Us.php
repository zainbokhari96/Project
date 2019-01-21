<?php

require_once "server/db_connection.php";

if(isset($_POST['insert_contact_us'])){
    $name = $_POST['name'];
    $mail = $_POST['email'];
    $phone =$_POST['phone'];
    $sub = $_POST['subject'];
    $msg= $_POST['message'];

    $q = "insert into contact_us (con_name,con_email,con_phone,con_subject,con_messege)
    values ('$name','$mail','$phone','$sub','$msg')";
    $r = mysqli_query($con,$q);
    if(!$r){
        echo "NOT EXECUTE";
    }
}

?>


<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Contact Us</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css"
          rel="stylesheet"  type='text/css'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bangers|Old+Standard+TT">

</head>
<body>

<?php include_once ("includes/nav.php"); ?>


    <div class="jumbotron jumbotron-sm">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h1 class="h1">
                    <small>Feel Free To</small> Contact Us <br> </h1>

                        Email : support@sap.com
                     <br>
                    Phone : 0312-0000000

            </div>
        </div>
    </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
            <div class="top top-sm">
                <form action="Contact_Us.php" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <i class="fas fa-file-signature"></i>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" />
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <i class="far fa-envelope"></i><input type="email" name="email" class="form-control" id="email" placeholder="Enter Email" required pattern="[-0-9a-zA-Z.+_]+@[-0-9a-zA-Z.+_]+.[a-zA-Z]{2,4}">
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <i class="fas fa-phone-square"></i><input type="text" name="phone" class="form-control" id="phone" placeholder="Enter Phone Number :" required pattern="(03\d\d[-]?\s?\d{7})|(\+92[-]?\s?3\d\d[-]?\d{7})|(0092[-]?\s?3\d\d[-]?\s?\d{7})">
                            </div>
                            <div class="form-group">
                                <label for="subject">
                                    Subject</label>
                                <select id="subject" name="subject" class="form-control" required="required">
                                    <option value="na" selected="">Choose One:</option>
                                    <option value="service">General Customer Service</option>
                                    <option value="suggestions">Suggestions</option>
                                    <option value="product">Product Support</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea name="message" id="message" class="form-control" id="message" rows="9" col="25"
                                          placeholder="Message"></textarea>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" name="insert_contact_us" class="btn btn-primary pull-right" >Submit</button>
                        </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
            <div class="col-md-4">
                <h3 align="center"> Location :</h3>
                <div class="mapouter"><div class="gmap_canvas"><iframe width="300" height="200" id="gmap_canvas" src="https://maps.google.com/maps?q=university%20of%20central%20punjab%20lahore&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.pureblack.de">pureblack.de</a></div><style>.mapouter{text-align:right;height:200px;width:300px;}.gmap_canvas {overflow:hidden;background:none!important;height:200px;width:300px;}</style></div>            </div>
            </div>
    </div>
<?php   include_once("includes/footer.php");  ?>



</body>
</html>
