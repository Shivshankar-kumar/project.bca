<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="\project.bca\Student\css\style.css">
    
    <script src="\project.bca\Database\javascript\activelink.js" type="text/javascript"></script>
    </head>
    
    <!-- this php code is written for session if, user wants to access without login then this will redirect to login page -->
    <?php 
    //Establish a connection between php code and database
    $conn=mysqli_connect("localhost", "root", "", "BCASTUDENT") or die("Connection failed".mysqli_connect_error());
    error_reporting(0);
    $admin_profile=$_SESSION['user_name'];

    if($admin_profile == true){

    }else{
        header('Location: http://localhost/project.bca/admin/loginpage.php');
    }
    ?>
    <body>
<div id="navigation" class="nav-aside">
    <ul id="menu"><li><a href="\project.bca\Menu-option\onlineregisteredstudent.php">Online Registered Student</a></li></ul>
    
    <ul id="menu"><li><a href="\project.bca\Menu-option\insert.php">Add Student</a></li></ul>
    <ul id="menu"><li><a href="\project.bca\Menu-option\update.php">Update Detail</a></li></ul>
    <ul id="menu"><li><a href="\project.bca\Menu-option\delete_By_Id.php">Delete Record</a></li></ul>
    <ul id="menu"><li><a href="\project.bca\Menu-option\viewData.php">View Record</a></li></ul>
    <ul id="menu"><li><a href="\project.bca\Menu-option\viewMarks.php">View Marks</a></li></ul>
    <ul id="menu"><li><a href="\project.bca\Menu-option\facultylist.php">Faculty List</a></li></ul>
    
    <ul id="menu"><li><a href="\project.bca\Menu-option\addfaculty.php">Add Faculty</a></li></ul>

    <ul id="menu"><li><a href="\project.bca\Menu-option\feedbacklist.php">Feedback List</a></li></ul>
    <ul id="menu"><li><a href="\project.bca\admin\adminlogout.php">Logout</a></li></ul>
</div>
<div class="header">
    <div id="dept"><p>Department Of Computer Application</p></div>
    <p>Admin Module</p>
        <div id="right-corner">
        <?php echo "<p>"."Welcome ".$_SESSION['user_name']."</p>"; ?>
</div>
</div>
</body>
</html>