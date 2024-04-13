<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Login</title>
    <link rel="stylesheet" href="\project.bca\admin\css_sheet\css_on_Student-lgn-page-and-admin-lgn-page.css">
    <link rel="stylesheet" href="\project.bca\indexsyle.css">
</head>
<body>
    <?php include '../nav.php'?>
    <form name="login-form" action="" method="post">
    <div id="container">
        <h1>Admin Login!</h1>
        <hr>
        <div id="form-header">
            <h4>Username</h4>
            <input type="text" name="username" class="input-box" id="username" placeholder="type your username" required>
        </div>
        <div id="form-header">
            <h4>Password</h4>
            <input type="password" name="password" class="input-box" id="password" placeholder="type your password" required>
        </div>
        <div class="submit-btn">
            <input type="submit" name="submit" value="login" id="btn">
            </div>
    </div>
    </form>


    <?php 
    //Establish a connection between php code and database
    $conn=mysqli_connect("localhost", "root", "", "BCASTUDENT") or die("Connection failed".mysqli_connect_error());

    if(isset($_POST['submit'])){
        $user=$_POST['username'];
        $pwd=$_POST['password'];
        $sql="SELECT * FROM admin WHERE username='$user' AND password='$pwd'";
        $result=mysqli_query($conn,$sql) or die("Query failed!!");
        if(mysqli_num_rows($result)){
            $_SESSION['user_name']=$user;
            header('Location: http://localhost/project.bca\Menu-option\header.php');
            exit();
        }else{
            echo '<script type="text/javascript">';
            echo 'alert("Invalid Username or Password");';
            echo '</script>';
        }
    }
    ?> 
    
    <?php include '../footer.php' ?>
</body>
</html>