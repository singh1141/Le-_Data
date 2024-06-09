<?php
$host="localhost";
$username="root";
$pass="";
$db="lead";

$con=mysqli_connect($host,$username,$pass,$db);

if(!$con){
    echo "failed";
} 


?>