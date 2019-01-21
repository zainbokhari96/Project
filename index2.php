<?php 
  include('server/server.php'); 
?>

<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta name="description" content="We sell Steam gaming accounts all over Pakistan">
    <meta name="author" content="Steam Accounts Pakistan">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Steam Accounts Pakistan</title>

    <link
            href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css"
            rel="stylesheet"  type='text/css'>
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

  <div class="topnav" id="myTopnav" style = "z-index:999;">
    <a href="index.php" >Home</a>
    <a href="About.html">About</a>
    <a href="Contact Us.html">Contact</a>
    <a href="#">Terms</a>
    <a href="checkout.php">Checkout</a>
    <a href="#" class="icon" onclick="myFunction1()">
      <i class="fa fa-bars"></i>
    </a>
  </div>



<div class="container-fluid ct-u-triangleBottomLeft ct-pageHeader ct-pageHeader--motive ct-pageHeader--hasDescription ct-u-padding10>
    <div class="col-xl-12" style="padding-top:65px;">
        <div class="row">
            <div class="col-md-8 ">
                <h1 class="text-lowercase ct-fw-600 ct-u-colorWhite" style="font-size: 80px">
                    Welcome<sup><i class="fa fa-home"></i></sup>
                </h1>
            </div>
            <div class="col-md-4">
                        <span class="ct-u-size20 ct-u-colorWhite">
                            We have all of your favorite games here with us. Join us and get Steam accounts for an amazingly cheap rate.
                        </span>
            </div>
        </div>
    </div>


</div>
</div>

<h2 class="ct-fw-600 class=col-xl-12">
    <span class="text-lowercase">That's the spirit!</span><br>
    <small class="ct-u-colorMotive ct-fw-300"> Now you can buy the acccounts below</small>
</h2>


<div class = "container">
<div class="row">
  <div class = "col-md-4">
    <h1>Recent transformation</h1>
    <p style="text-align: center">With so many differentiated sellers in the community, we underwent on a reciprocated decision to start a marketplace merely on a standalone website that will aid the consumers and the venders, bringing them unruffled on a sole platform.</p>
  </div>

    <div class = "col-md-4">
       <h1 style="margin-left: 120px">Mission</h1>
       <p style="text-align: center">Our mission is to keep our clients contented with our products and support system. We’ve undertaken responsibilities to curlicue the marketplace for the ever-growing demand.</p>
    </div>

      <div class = "col-md-4">
         <h1 style="margin-left: 140px">Vision</h1>
         <p style="text-align: center">Our vision of what our company will become in the future is to have settled bond with our customers so robust that they will view us more as indispensable cohorts. We will constantly seek out and work with the community we represent to deliver the most innovative and exciting services possible.</p>
      </div>

</div>
</div>


<!-- JumboTron Account list -->

<div class="container-fluid">
  <div class="jumbotron">
    <div class = "row" >
     <div class = "col-md-12">
        <h2> <strong> We've got stocks </strong></h2>
      </div>

</div>
<div class="container-fluid">
    <div class = "row" style="margin-top: 40px">
        <div class = "col-md-4">
          <p style = "margin-left: 75px"> Counter-Strike Global Offensive </p>
          <img class="img-responsive" src = "images/csgo.jpg">
             <div><br></div>
          <a href="checkout.php"><button type="button" style="font: bold 14px Arial; margin-left: 75px; padding:5px" >buy now for $5.0</button></a>
          
        </div>
           <div class = "col-md-4">
             <p style = "margin-left: 75px"> Dota 2 (Rank Locked)</p>
             <img  class="img-responsive" src = "images/Dota_2.jpg" >
             <div><br></div>
              <a href="checkout.php"><button type="button" style="font: bold 14px Arial; margin-left: 75px; padding: 5px" >buy now for $4.20</button></a>

           </div>
              <div class = "col-md-4">
                 <p style = "margin-left: 75px"> Player Unknown's Battlegrounds </p>
                 <img class="img-responsive" src = "images/pubg.jpg" >
                 <div><br></div>
              <a href="checkout.php"><button type="button" style="font: bold 14px Arial; margin-left: 75px; padding: 5px" >buy now for $6.20</button></a>
              </div>
    </div>
</div>

<div class="container-fluid">
    <div class = "row" style="margin-top: 20px">
        <div class = "col-md-4">
          <p style = "margin-left: 75px"> Battlefield V </p>
          <img  class="img-responsive" src = "images/bfv.jpg" >
         <div><br></div>
          <a href="checkout.php"><button type="button" style="font: bold 14px Arial; margin-left: 75px; padding:5px" >buy now for $2.20</button></a>

        </div>
           <div class = "col-md-4">
             <p style = "margin-left: 75px"> Fifa 19 </p>
             <img  class="img-responsive" src = "images/Fifa.jpg" >
            <div><br></div>
          <a href="checkout.php"><button type="button" style="font: bold 14px Arial; margin-left: 75px; padding:5px" >buy now for $4.20</button></a>
           </div>
              <div class = "col-md-4">
                 <p style = "margin-left: 75px"> Tom Clancy's Rainbow Six Seige </p>
                 <img class="img-responsive" src = "images/6.jpg" >
                 <div><br></div>
          <a href="checkout.php"><button type="button" style="font: bold 14px Arial; margin-left: 75px; padding:5px" >buy now for $6.20</button></a>
              </div>
    </div>
</div>
</div>
<!-- Jummbotron account list -->



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



<script>

    function myFunction1() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}

window.onscroll = function() {myFunction()};

var myTopnav = document.getElementById("myTopnav");
var sticky = myTopnav.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    myTopnav.classList.add("sticky")
  } else {
    myTopnav.classList.remove("sticky");
  }
}

</script>






</body>
</html>
