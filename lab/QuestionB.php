<?php
    include('DatabaseConnect.php');

    $sql = "SELECT Employee_name 
    FROM employee, salary, employee_salary 
    WHERE salary.Salary_Scale ='BB'
    and employee.Employee_ID = employee_salary.Employee_ID 
    and salary.Salary_Scale = employee_salary.Salary_Scale";

    $result = $connection->query(($sql));
    
    while($row = $result->fetch_assoc()) {
        echo $row['Employee_name']."<br>";
    }
?>