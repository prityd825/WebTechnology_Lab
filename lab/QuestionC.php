<?php
    include('DatabaseConnect.php');

    $sql = "UPDATE employee 
    set employee.Employee_age = 50 
    where employee.Employee_age > 
   (SELECT avg(Employee_age) FROM employee);";

    $result = $connection->query(($sql));
    
    echo "Successfull";
?>