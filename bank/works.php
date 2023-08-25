<?php
include 'db.php';

$person_name = $_POST["person_name"];
$company_name = $_POST["company_name"];
$salary= $_POST["salary"];

$query ="INSERT INTO `works` (`person_name`, `company_name`, `salary`) VALUES('$person_name','$company_name','$salary')";
$result= mysqli_query($connection,$query);
//header('location: index.php');

?>