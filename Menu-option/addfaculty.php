<?php
include '../connection.php';
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// If form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve data from form
    $username = $_POST['username'];

    $password = $_POST['password'];

    // SQL to insert data into facultyusername table
    $sql = "INSERT INTO facultyusername (username, password) VALUES ('$username', '$password')";

    if ($conn->query($sql) === TRUE) {
        header("Location: http://localhost/project.bca/Menu-option/facultylist.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    // Close connection
    $conn->close();
}
?>

<html>
<head>
    <title>Add New Faculty</title>
    <link rel="stylesheet" href="\project.bca\Menu-option\css\style.css">
    <?php include 'header.php'; ?>
</head>
<body>
<div id="main-content">
    <h2>Add New Faculty</h2>

    <form class="post-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" maxlength="30" required>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="text" name="password" maxlength="15" autocomplete="off" required>
        </div>
        <input class="submit" type="submit" value="ADD">
    </form>
</div>
</body>
</html>