<?php
include 'db.php';

$person_name = $_POST["person_name"];
$street = $_POST["street"];
$city= $_POST["city"];

$query ="INSERT INTO `employee` (`person_name`, `street`, `city`) VALUES('$person_name','$street','$city')";
$result= mysqli_query($connection,$query);
//header('location: index.php');

?>