<?php
$hostname="localhost";
$username="root";
$password="";
$database="Form";
$connection=mysqli_connect($hostname,$username,$password,$database);
if(!$connection){
    echo "Connection failed";
} else {
    echo "connection okay";
}


?>