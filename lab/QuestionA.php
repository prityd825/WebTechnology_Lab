<?php
    include('DatabaseConnect.php');

    $sql = "SELECT department.Department_name FROM department
    inner join employee_department on department.Department_ID = employee_department.Department_ID
    inner join employee_salary on employee_department.Employee_ID = employee_salary.Employee_ID
    inner join salary on employee_salary.Salary_Scale = salary.Salary_Scale
    WHERE Salary_Amount > 10000";

    $result = $connection->query(($sql));
    
    while($row = $result->fetch_assoc()) {
        echo $row['Department_name']."<br>";
    }
?>