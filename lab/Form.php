<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab Exam</title>
</head>
<body>
    <form action="Department.php" method="post">
        Department ID : <input type="text" name="dept_id"> <br>
        Department Name : <input type="text" name="dept_name"> <br>
        Submit Department Data <input type="submit" value="Submit"><br><br>
    </form>

    <form action="Employee.php" method="post">
        Employee ID : <input type="text" name="emp_id"> <br>
        Employee Name : <input type="text" name="emp_name"> <br>
        Employee Age : <input type="text" name="emp_age"> <br>
        Submit Employee Data <input type="submit" value="Submit"><br><br>
    </form>    

    <form action="EmployeeDepartment.php" method="post">
        Employee ID : <input type="text" name="ed_emp_id"> <br>
        Department ID : <input type="text" name="ed_dept_id"> <br>
        Submit Employee Data <input type="submit" value="Submit"><br><br>
    </form>    

    <form action="Salary.php" method="post">
        Salary_Scale : <input type="text" name="sal_scale"> <br>
        Salary Amount : <input type="text" name="sal_amount"> <br>
        Submit Employee Data <input type="submit" value="Submit"><br><br>
    </form>  
        
    <form action="EmployeeSalary.php" method="post">
        Employee ID : <input type="text" name="es_emp_id"> <br>
        Salary_Scale : <input type="text" name="es_sal_scale"> <br>
        Submit Employee Data <input type="submit" value="Submit"><br><br>
    </form>  

    <form action="QuestionA.php" method="post">
        QuestionA <input type="submit" value="Submit"><br><br>
    </form>

    <form action="QuestionB.php" method="post">
        QuestionB <input type="submit" value="Submit"><br><br>
    </form>

    <form action="QuestionC.php" method="post">
        QuestionC <input type="submit" value="Submit"><br><br>
    </form>
</body>
</html>