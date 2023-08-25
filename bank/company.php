<?php
include 'db.php';

$company_name = $_POST["company_name"];
$city= $_POST["city"];

$query ="INSERT INTO `company` (`company_name`,`city`) VALUES('$company_name','$city')";
$result= mysqli_query($connection,$query);
//header('location: index.php');

?>