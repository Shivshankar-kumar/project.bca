<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>student | Login</title>
    <link rel="stylesheet" href="\project.bca\admin\css_sheet\css_on_Student-lgn-page-and-admin-lgn-page.css">
    <link rel="stylesheet" href="\project.bca\indexsyle.css">
</head>
<?php include '../nav.php'; ?>
<body>
    <form name="login-form" action="" method="post">
    <div id="container">
        <h1>Welcome Student</h1>
        <div id="form-header">
            <h4>Email</h4>
            <input type="text" name="Username" class="input-box" id="username" placeholder="Eg. example@gmail.com" required>
        </div>
        <div id="form-header">
            <h4>Password</h4>
            <input type="password" name="Password" class="input-box" id="password" placeholder="password" required>
            <p>Forgot password?</p>
        </div>
        <div class="submit-btn">
            <input type="submit" name="login-btn" value="login" id="btn">
        </div>
        <div class="bottom-paragraph">
            <p>Not a member?<span><a href="\project.bca\signup.php">&nbsp; Sign-up</a></span></p>
        </div>
    </div>
    </form>
    <?php 
    // Establish a connection between php code and database
    $conn=mysqli_connect("localhost", "root", "", "BCASTUDENT") or die("Connection failed".mysqli_connect_error());
    
    if(isset($_POST['login-btn'])){
        $user = $_POST['Username'];
        $pwd = $_POST['Password'];

        // Connection table Singnup
        $sql = "SELECT * FROM signup WHERE Email='$user' AND Password='$pwd'";
        $result = mysqli_query($conn, $sql) or die("Query failed!!");

        // Connection Table student2
        $sql1 = "SELECT * FROM student2 WHERE Email='$user' AND Password='$pwd'";
        $result1 = mysqli_query($conn, $sql1) or die("Query failed!!");
        
        // To extract student name from database and store into row1 variable
        $row1 = mysqli_fetch_assoc($result1);

        // To extract student name from database and store into row variable
        $row = mysqli_fetch_assoc($result);

        if(mysqli_num_rows($result)){
            $_SESSION['user_name'] = $row['Name'];
            $_SESSION['studentId'] = $row['sid'];
            header('Location: http://localhost/project.bca/Student/dashboard.php');
            exit();
        } elseif(mysqli_num_rows($result1)){
            $_SESSION['user_name1'] = $row1['Name'];
            $_SESSION['studentId1'] = $row1['sid'];
            header('Location: http://localhost/project.bca/Student/dashboard.php');
            exit();
        } else {
            echo '<script type="text/javascript">';
            echo 'alert("Invalid Username or Password");';
            echo '</script>';
        }
    }
    ?>

    <?php include '../footer.php' ?>
</body>
</html>
