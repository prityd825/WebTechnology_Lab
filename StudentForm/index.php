
<!DOCTYPE html>
<?php
include "dbcon.php";
?>
<html>
<head>
    <title>Student Form</title>
    <style>
        
        body {
            background-color: #f2f2f2;
        }

        .form-container {
            width: 400px;
            margin: auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
        }

        .form-group {
            margin-bottom: 10px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
        }

        .form-group input[type="text"],
        .form-group textarea,
        .form-group select {
            width: 100%;
            padding: 5px;
        }

        .form-group input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
        }

        .form-group input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Student Form</h2>
        <form action="process-form.php" method="post">
            <div class="form-group">
                <label for="first_name">First Name:</label>
                <input type="text" name="first_name" id="first_name" required>
            </div>

            <div class="form-group">
                <label for="last_name">Last Name:</label>
                <input type="text" name="last_name" id="last_name" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required>
            </div>

            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" name="address" id="address" required>
            </div>

            <div class="form-group">
                <label for="interests">Interests:</label>
                <input type="checkbox" name="interests[]" value="reading"> Reading
                <input type="checkbox" name="interests[]" value="gaming"> Gaming
                <input type="checkbox" name="interests[]" value="traveling"> Traveling
            </div>

            <div class="form-group">
                <label for="gender">Gender:</label>
                <input type="radio" name="gender" value="male" required> Male
                <input type="radio" name="gender" value="female"> Female
            </div>

            <div class="form-group">
                <label for="comment">Comment:</label>
                <textarea name="comment" id="comment" required></textarea>
            </div>

            <div class="form-group">
                <label for="country">Country:</label>
                <select name="country" id="country" required>
                    <option value="">Select a country</option>
                    <option value="USA">USA</option>
                    <option value="UK">UK</option>
                    <option value="Canada">Canada</option>
                    <option value="Australia">Australia</option>
                </select>
            </div>

            <div class="form-group">
                <input type="submit" action ="input" value="Submit">
            </div>
        </form>
    </div>
    </br> </br>
    <table class = "table container" border=1 align = "Center">
        <tr>
       <td>First_Name</td>
       <td>Last_Name</td>
       <td>Email</td>
       <td>Address</td>
       <td>Interest</td>
       <td>Gender</td>
       <td>Comment</td>
       <td>Country</td>
    </tr>

    <tr>
        <?php
          $query = "SELECT * FROM `form`";
          $result = mysqli_query($connection,$query);
          while($rows = mysqli_fetch_assoc($result)){
            ?>
            <tr>
            <td> <?php echo $rows['first_name']; ?></td>
            <td> <?php echo $rows['last_name']; ?></td>

            <td> <?php echo $rows['email']; ?></td>
            <td> <?php echo $rows['address']; ?></td>
            <td> <?php echo $rows['interests[]']; ?></td>
            <td> <?php echo $rows['gender']; ?></td>
            <td> <?php echo $rows['comment']; ?></td>
            <td> <?php echo $rows['country']; ?></td>

           <?php 
          }
        ?>

    </tr>

        </table>

</body>
</html>
