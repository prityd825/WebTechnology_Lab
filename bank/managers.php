<?php
include 'db.php';

$person_name = $_POST["person_name"];
$manager_name = $_POST["manager_name"];

$query ="INSERT INTO `manages` (`person_name`,`manager_name`) VALUES('$person_name','$manager_name')";
$result= mysqli_query($connection,$query);
//header('location: index.php');

?>