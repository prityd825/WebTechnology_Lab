<?php
    include('DatabaseConnect.php');

    if(isset($_POST['dept_id']) && isset($_POST['dept_name'])) {
        $dept_id = $_POST['dept_id'];
        $dept_name = $_POST['dept_name'];

        $sql = "INSERT INTO department VALUES ('$dept_id', '$dept_name')";

        if ($connection->query($sql)){
            echo "Insertion Successfull<br>";
        } else {
            echo "Insertion Unsuccessfull<br>";
        }
    }
?>