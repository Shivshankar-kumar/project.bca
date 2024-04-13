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
    
    <script src="\project.bca\Database\javascript\activelink.js" type="text/javascript"></script>
</head>

<?php 
    //Establish a connection between php code and database
    $conn=mysqli_connect("localhost", "root", "", "BCASTUDENT") or die("Connection failed".mysqli_connect_error());
    error_reporting(0);
    // Access from Student Login form where table name is signup
    $std_profile=$_SESSION['user_name'];
    $student_id=$_SESSION['studentId'];

    // Access from Student Login form where table name is signup
    $std_profile1=$_SESSION['user_name1'];
    $student_id1=$_SESSION['studentId1'];

    if($std_profile == true || $std_profile1 == true){}
    else{
        header('Location: http://localhost/project.bca/Student/studentLoginForm.php');
    }
?>
<body>
<div id="navigation" class="nav-aside">
<?php 
    ?>
    <?php
    if($student_id ==true){
        ?>
    <ul id="menu"><li><a href='/project.bca/Student/studentMarks.php?id=<?php echo "$student_id" ; ?>'>View Marks</a></li></ul>
    <?php }
    ?>
    <?php
     if($student_id1 ==true){
        ?>
    <ul id="menu"><li><a href='/project.bca/Student/studentMarks.php?id=<?php echo "$student_id1" ; ?>'>View Marks</a></li></ul>
    <?php }
    ?>

    <ul id="menu"><li><a href="\project.bca\Student\admissionform.php">Admission Form</a></li></ul>
    <ul id="menu"><li><a href="\project.bca\Student\BCA ALL Sem Subject.doc.pdf" download>Download Syllabus</a></li></ul>
    <ul id="menu"><li><a href="\project.bca\Student\complain.php">Complaint</a></li></ul>
    <ul id="menu"><li><a href="Studentlogout.php">Logout</a></li></ul>
</div>
<div class="header">
<div id="dept"><p>Department of Computer Apllication</p></div>
<p>Student Module</p>
<div id="right-corner">
<?php
    if($std_profile ==true){
 echo "<p>"."Welcome ".$_SESSION['user_name']."</p>";
    }
    if($std_profile1 ==true){
        echo "<p>"."Welcome ".$_SESSION['user_name1']."</p>";
           } 
    ?>      
</div> 
</div>
</body>
</html>