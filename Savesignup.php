<?php
// Connect to database
include 'connection.php';
// Reconnect to MySQL
if (!mysqli_ping($conn)) {
    die("Connection lost, please try again.");
}

// Takes input data from textbox
$sname = $_POST['name'];
$semail = $_POST['email'];
$smobile = $_POST['mobile'];
$scourse = $_POST['course'];
$spassword = $_POST['password'];

// Check if the user already exists in the database
$check_sql = "SELECT * FROM signup WHERE Email = ? OR Mobile = ?";
$stmt_check = mysqli_prepare($conn, $check_sql);
mysqli_stmt_bind_param($stmt_check, "ss", $semail, $smobile);
mysqli_stmt_execute($stmt_check);
$result_check = mysqli_stmt_get_result($stmt_check);

// If the user already exists, display an error message
if (mysqli_num_rows($result_check) > 0) {
    echo "<script>
        alert('User already exists. Please go to on login page.');
        window.location.href = 'http://localhost/project.bca/signup.php';
    </script>";
    exit;
}

// Prepare an insert statement
$sql = "INSERT INTO signup(Name, Email, Mobile, Course, Password) VALUES (?, ?, ?, ?, ?)";
$stmt = mysqli_prepare($conn, $sql);

// Bind parameters and execute the statement
mysqli_stmt_bind_param($stmt, "sssis", $sname, $semail, $smobile, $scourse, $spassword);
mysqli_stmt_execute($stmt);

// Check for errors
if (mysqli_stmt_error($stmt)) {
    die("Query failed: " . mysqli_stmt_error($stmt));
}

// Close the statement and connection
mysqli_stmt_close($stmt);
mysqli_close($conn);

// Popup message and redirect
echo "<script>
    alert('Sign up successful! Redirecting to login page...');
    window.location.href = 'http://localhost/project.bca/admin/loginpage.php';
</script>";
?>