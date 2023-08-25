<?php
    include('DatabaseConnect.php');

    if(isset($_POST['emp_id']) && isset($_POST['emp_name']) && isset($_POST['emp_age'])) {
        $emp_id = $_POST['emp_id'];
        $emp_name = $_POST['emp_name'];
        $emp_age = $_POST['emp_age'];

        $sql = "INSERT INTO employee VALUES ('$emp_id', '$emp_name', '$emp_age')";

        if ($connection->query($sql)){
            echo "Insertion Successfull<br>";
        } else {
            echo "Insertion Unsuccessfull<br>";
        }
    }
?>