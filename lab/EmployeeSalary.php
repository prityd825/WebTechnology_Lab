<?php
    include('DatabaseConnect.php');

    if(isset($_POST['es_emp_id']) && isset($_POST['es_sal_scale'])) {
        $es_emp_id = $_POST['es_emp_id'];
        $es_sal_scale = $_POST['es_sal_scale'];

        $sql = "INSERT INTO employee_salary VALUES ('$es_emp_id', '$es_sal_scale')";

        if ($connection->query($sql)){
            echo "Insertion Successfull<br>";
        } else {
            echo "Insertion Unsuccessfull<br>";
        }
    }
?>