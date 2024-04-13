<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complain Form</title>
    <link rel="stylesheet" href="\project.bca\Student\css\admissionform.css">
</head>
<body>
<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Establish database connection
    include '../connection.php';

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare SQL statement
    $stmt = $conn->prepare("INSERT INTO complain_box (Name, Mobile, Email, Course, Message) VALUES (?, ?, ?, ?, ?)");

    // Bind parameters
    $stmt->bind_param("sssss", $name, $mobile, $email, $course, $message);

    // Set parameters and execute
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $course = $_POST['course'];
    $message = $_POST['message'];

    // Execute the statement
    if ($stmt->execute()) {

        echo "<script>
        alert('Complaint submitted successfully!');
        window.location.href = 'http://localhost/project.bca/Student/dashboard.php';
    </script>";
    exit;
        echo "";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement
    $stmt->close();

    // Close connection
    $conn->close();
}
?>
<?php 
    include 'dashboard.php';
    ?>
    <div class="container">
        <h2>Fill Your Query</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter your name" maxlength="40" required>

            <label for="phone">Mobile:</label>
            <input type="text" id="phone" name="mobile" placeholder="Enter your phone number" maxlength="10" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" maxlength="40" required>

            <label for="course">Course:</label>
            <input type="text" id="course" name="course" placeholder="Enter your course name" maxlength="40" required>

            <label for="message">Message: <span>Character should be less than 100.</span></label>
            <textarea id="message" name="message" placeholder="Your Message" maxlength="100" cols="30" rows="10" required></textarea>
            
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
