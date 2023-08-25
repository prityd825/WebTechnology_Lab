<!DOCTYPE html>
<html>
<head>
    <title>Form Example</title>
    <style>
        /* Add some basic styling */
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
        <h2>Form Example</h2>
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
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>


    <?php
// Establish a connection to the MySQL database
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$address = $_POST['address'];
$interests = implode(", ", $_POST['interests']);
$gender = $_POST['gender'];
$comment = $_POST['comment'];
$country = $_POST['country'];

// Prepare and execute SQL query
$sql = "INSERT INTO users (first_name, last_name, email, address, interests, gender, comment, country) VALUES ('$first_name', '$last_name', '$email', '$address', '$interests', '$gender', '$comment', '$country')";

if ($conn->query($sql) === TRUE) {
    echo "Form submitted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

</body>
</html>
