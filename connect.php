<?php
$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'steam');
if($con)
 { 
    echo "Connected";
}
else
{ 
    echo "failed";
  
}
