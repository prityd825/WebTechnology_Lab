<?php
    include('DatabaseConnect.php');

    if(isset($_POST['ed_emp_id']) && isset($_POST['ed_dept_id'])) {
        $ed_emp_id = $_POST['ed_emp_id'];
        $ed_dept_id = $_POST['ed_dept_id'];

        $sql = "INSERT INTO employee_department VALUES ('$ed_emp_id', '$ed_dept_id')";

        if ($connection->query($sql)){
            echo "Insertion Successfull<br>";
        } else {
            echo "Insertion Unsuccessfull<br>";
        }
    }
?>