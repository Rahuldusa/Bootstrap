<?php
include 'connect.php';
  
extract($_POST);

if(isset($_POST['namesend']) && isset($_POST['emailsend']) 
&& isset($_POST['mobilesend']) && isset($_POST['placesend'])){

     $sql="INSERT INTO `crud` (`id`, `name`, `email`, `mobile`, `place`) VALUES (NULL,'$namesend','$emailsend','$mobilesend','$placesend')";
    $result=mysqli_query($con,$sql);
    
}



?>