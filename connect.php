<?php
 $server = "localhost:3308";
 $user = "root";
 $password = "";
 $db = "database";
 

$con = mysqli_connect($server,$user,$password,$db);

if(!$con) {
    die("Connection Failed:".mysqli_connect_error());
}

?>