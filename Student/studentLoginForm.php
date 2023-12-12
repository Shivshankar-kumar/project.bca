<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>student | Login</title>
    <link rel="stylesheet" href="\project.bca\Faculty\css_sheet\css_on_Student-lgn-page-and-faculty-lgn-page.css">
    </head>
<body>
    <form name="login-form" action="" method="post">
    <div id="container">
        <h1>Welcome Student</h1>
        <div id="form-header">
            <h4>Mobile</h4>
            <input type="text" name="Username" class="input-box" id="username" placeholder="+91" autocomplete="off" required>
        </div>
        <div id="form-header">
            <h4>Enrollment No</h4>
            <input type="password" name="Password" class="input-box" id="password" placeholder="type your password" autocomplete="off" required>
            <p>Forgot password?</p>
        </div>
        <div class="submit-btn">
            <input type="submit" name="login-btn" value="login" id="btn">
            </div>
            <div class="bottom-paragraph">
                <p>Not a member?<span><a href="#">&nbsp; Sign-up</a></span></p>
            </div>
    </div>
    </form>
    <?php 
    //Establish a connection between php code and database
$conn=mysqli_connect("localhost", "root", "", "BCASTUDENT") or die("Connection failed".mysqli_connect_error());
    if(isset($_POST['login-btn'])){
        $user=$_POST['Username'];
        $pwd=$_POST['Password'];
        $sql="SELECT * FROM student WHERE Mobile='$user' AND sid='$pwd'";
       // $sql="SELECT * FROM studentusername WHERE username='$user' AND password='$pwd'";
        $result=mysqli_query($conn,$sql) or die("Query failed!!");

        //to extract student name from database and store into ro variable
        $row=mysqli_fetch_assoc($result);
        if(mysqli_num_rows($result)){
            $_SESSION['user_name']=$row['Name'];
            $_SESSION['studentId']=$row['sid'];
            header('Location: http://localhost/project.bca/Student/dashboard.php');
            exit();
        }
        else{
            echo '<script type="text/javascript">';
            echo 'alert("Invalid Username or Password");';
            echo '</script>';
        }
    }
    ?>
</body>
</html>