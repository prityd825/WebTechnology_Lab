<?php
include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank Employee</title>
</head>
<body>
    <div>
       <h3>Employee Information: </h3>
        <form action="employee.php" method="POST">
            <label for="person_name">Person Name: </label>
            <input type="text" id="person_name" name="person_name"><br><br>
            <label for="street">Street: </label>
            <input type="text" id="street" name="street"><br><br>
            <label for="city">City: </label>
            <input type="text" id="city" name="city"><br><br>
            <input type="submit" id="submit" value="submit">
            <br><br>
        </form>
    </div>

    <div>
    <h3>Works Information: </h3>
        <form action="works.php" method="POST">
            <label for="person_name">Person Name: </label>
            <input type="text" id="person_name" name="person_name"><br><br>
            <label for="company_name">Company Name: </label>
            <input type="text" id="company_name" name="company_name"><br><br>
            <label for="salary">Salary: </label>
            <input type="text" id="salary" name="salary"><br><br>
            <input type="submit" id="submit" value="submit">
            <br><br>
        </form>
    </div>


    <div>
    <h3>Company Information: </h3>
        <form action="company.php" method="POST">
            <label for="company_name">Company Name: </label>
            <input type="text" id="company_name" name="company_name"><br><br>
            <label for="city">City: </label>
            <input type="text" id="city" name="city"><br><br>
            <input type="submit" id="submit" value="submit">
            <br><br>
        </form>
    </div>

    <div>
    <h3>Managers Information: </h3>
        <form action="managers.php" method="POST">
            <label for="person_name">Person Name: </label>
            <input type="text" id="person_name" name="person_name"><br><br>
            <label for="manager_name">Manager Name: </label>
            <input type="text" id="manager_name" name="manager_name"><br><br>
            <input type="submit" id="submit" value="submit">
            <br><br>   
        </form>
    </div>

    <div>
        <form action="a.php" method="POST">
            <label for="Question- C(i)">Question- C(i): </label>
            <input type="submit" id= "submit" value="a">
        </form>
    </div>

    <div>
        <form action="b.php" method="POST">
            <label for="Question- C(ii)">Question- C(ii): </label>
            <input type="submit" id= "submit" value="b">
        </form>
    </div>

    <div>
        <form action="c.php" method="POST">
            <label for="Question- C(iii)">Question- C(iii): </label>
            <input type="submit" id= "submit" value="c">
        </form>
    </div>

</body>
</html>