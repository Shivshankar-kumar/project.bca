<?php
$name = $_POST['name'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$message = $_POST['message'];

// Connection
$conn = mysqli_connect("localhost", "root", "", "BCASTUDENT") or die("Connection failed" . mysqli_connect_error());

// Query
$sql = "INSERT INTO feedback (Name, Mobile, Email, Message) VALUES ('$name', '$mobile', '$email', '$message')";
$result = mysqli_query($conn, $sql);

if ($result) {
    // Successful insertion, show a success message and redirect
    echo '<script>alert("Feedback submitted successfully!");</script>';
    echo '<script>window.location.href = "\contact.php";</script>';
} else {
    // Query failed, show an error message
    echo '<script>alert("Error: ' . mysqli_error($conn) . '");</script>';
}

// Close connection
mysqli_close($conn);
?>
