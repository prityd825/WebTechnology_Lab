<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "lab";
$connection = new mysqli($hostname, $username, $password,$dbname);

if(!$connection){
    echo "Connection Failed";
} else 
{
    echo "Connection Okay";
}

?> 