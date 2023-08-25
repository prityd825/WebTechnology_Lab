<?php
include 'bdconn.php';

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$department= $_POST["department"];
$id = $_POST["id"];
$gender = $_POST["gender"];
$nationality = $_POST["nationality"];
$comment= $_POST["comment"];

$query ="INSERT INTO `information` (`fname`, `lname`,`email`,`department`,`id`,`gender`,`nationality`,`message`) VALUES('$fname','$lname','$email','$department','$id','$gender','$nationality','$comment')";
$result= mysqli_query($connection,$query);
header('location: index.php');

?>