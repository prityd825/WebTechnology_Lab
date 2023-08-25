<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "lab2";
$connection = new mysqli($hostname, $username, $password,$dbname);

if(!$connection){
    echo "Connection Failed";
    echo "<br>";
}
 else 
{
    echo "Connection Okay\n";
    echo "<br>";
}



?> 