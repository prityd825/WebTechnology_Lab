<?php
include "dbcon.php";
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$address = $_POST['address'];
$interests = implode(", ", $_POST['interests']);
$gender = $_POST['gender'];
$comment = $_POST['comment'];
$country = $_POST['country'];

$query = "INSERT INTO `form` (`first_name`, `last_name`, `email`, `address`, `interests[]`, `gender`, `comment`, `country`) VALUES ('$first_name', '$last_name', '$email', '$address', '$interests', '$gender', '$comment', '$country')";
$result = mysqli_query($connection, $query);
header('location:index.php');
?>