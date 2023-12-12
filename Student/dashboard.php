<?php 
//session start to fetch username from login form
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student | Dashboard</title>
    <link rel="stylesheet" href="\project.bca\Student\css\style.css">
</head>

<?php 
    //Establish a connection between php code and database
    $conn=mysqli_connect("localhost", "root", "", "BCASTUDENT") or die("Connection failed".mysqli_connect_error());
    error_reporting(0);
    $std_profile=$_SESSION['user_name'];
    $student_id=$_SESSION['studentId'];
    if($std_profile == true){}
    else{
        header('Location: http://localhost/project.bca/Student/studentLoginForm.php');
    }
?>
<body>
<div id="navigation">
<?php 
    ?>
    <ul><li><a href='/project.bca/Student/studentMarks.php?id=<?php echo "$student_id" ; ?>'>View Marks</a></li></ul>
    <ul><li><a href="Studentlogout.php">Logout</a></li></ul>
</div>
<div class="header">
<div id="dept"><p>Bachelor Of Computer Apllication</p></div>
<div id="right-corner">
<?php echo "<p>"."Welcome ".$_SESSION['user_name']."</p>"; ?>        
</div> 
</div>
</body>
</html>