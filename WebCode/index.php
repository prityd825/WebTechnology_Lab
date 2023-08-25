
<?php include "bdconn.php"; ?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student form</title>
    <link rel="stylesheet" href="styles.css">
    
    
</head>
<body>
    <div class="form">
        <h1>Student Form</h1>
        <form action="submit.php" method="POST">
             <label for="fname">First Name: </label>
             <input type="text" id="fname" name="fname"> <br><br>
             <label for="lname">Last Name: </label>
             <input type="text" id="lname" name="lname"><br><br>
             <label for="email">Email address: </label>
             <input type="text" id="email" name="email"><br><br>
             <label for="department">Department: </label>
             <input type="text" id="department" name="department"><br><br>
             <label for="id">Student ID: </label>
             <input type="text" id="id" name="id"><br><br>
             <label for="gender">Gender: </label>
        <input type="radio" id="male" name="gender" value = "male">
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label><br><br>

             <label for="nationality">Nationality: </label>
             <select name="nationality" id="nationality">
                <option value="bangladeshi">Bangladeshi</option>
                <option value="indian">Indian</option>
                <option value="others">Others</option>
             </select><br><br>

             <label for="comment">Comment: </label>
             <textarea name="comment" id="comment" cols="30" rows="10"></textarea><br><br>
             
             <input type="submit" value="Submit">
             <input type="button" value="clear" id="clearButton">

        </form>
        <br> <br>
       
        
     <table class="table_container" border="1">
        <tr>
            <td>First Name</td>
            <td>Last Name</td>
            <td>Email</td>
            <td>Department</td>
            <td>Student Id</td>
            <td>Gender</td>
            <td>Nationality</td>
            <td>Comment</td>
        </tr>
        <tr>
        <?php 

        $query="SELECT* FROM `information`";
        $result = mysqli_query($connection,$query);
        while($rows = mysqli_fetch_assoc($result)){
            ?>
            <tr>
                <td><?php echo $rows['fname'];?></td>
                <td><?php echo $rows['lname'];?></td>
                <td><?php echo $rows['email'];?></td>
                <td><?php echo $rows['department'];?></td>
                <td><?php echo $rows['id'];?></td>
                <td><?php echo $rows['gender'];?></td>
                <td><?php echo $rows['nationality'];?></td>
                <td><?php echo $rows['message'];?></td>
            </tr>
            <?php
        }
        ?>
        </tr>
        </table>
    




    </div>


</body>

</html>
