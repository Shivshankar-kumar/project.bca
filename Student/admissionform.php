<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Admission Form</title>
    <link rel="stylesheet" href="\project.bca\Student\css\admissionform.css">
</head>
<body>
<?php 
    // PHP code to handle form submission and database connection
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Database connection
        $servername = "localhost"; // Change this if your database is hosted on a different server
        $username = "root"; // Your database username
        $password = ""; // Your database password
        $dbname = "BCASTUDENT"; // Your database name

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Collect form data
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $course = $_POST['course'];
        $address = $_POST['address'];
        $gender = $_POST['gender'];
        $dob = $_POST['dob'];

        // Check if the user already exists in the database
        $check_sql = "SELECT * FROM admission_form WHERE Email = '$email' OR Mobile = '$mobile'";
        $result = $conn->query($check_sql);
        if ($result->num_rows > 0) {
            echo '<script type="text/javascript">';
            echo 'alert("User already exists in the database.");';
            echo '</script>';
        } else {
            // Prepare and execute SQL statement to insert data into the database
            $sql = "INSERT INTO admission_form (Name, Email, Mobile, Course, Address, Gender, Dob)
                    VALUES ('$name', '$email', '$mobile', '$course', '$address', '$gender', '$dob')";

            if ($conn->query($sql) === TRUE) {
                echo '<script type="text/javascript">';
                echo 'alert("New record created successfully");';
                echo '</script>';
            } else {
                echo '<script type="text/javascript">';
                echo 'alert("Error: ' . $sql . '\n' . $conn->error . '");';
                echo '</script>';
            }
        }

        // Close database connection
        $conn->close();
    }
?>

<?php 
    include 'dashboard.php';
?>
    <div class="container">
        <h2>Student Admission Form</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter your name" maxlength="40" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" maxlength="30" required>

            <label for="phone">Mobile:</label>
            <input type="tel" id="phone" name="mobile" placeholder="Enter your phone number" maxlength="10" required>

            <label for="course">Course:</label>
            <input type="text" id="course" name="course" placeholder="Enter your course name" maxlength="100" required>

            <label for="address">Address:</label>
            <input type="text" id="address" name="address" placeholder="Enter your address" maxlength="100" required>

            <label for="gender">Gender:</label>
            <select id="gender" name="gender" required>
                <option value="">Select</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>

            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob" required>

            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
