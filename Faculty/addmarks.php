<html>
    <head>
    <title>Student Marks</title>
    <link rel="stylesheet" href="\project.bca\Menu-option\css\style.css">
    <style>
#main-content .post-form{
    margin-left: 0;
}
    </style> 
</head>
<?php include 'fdashboard.php'; ?>
<!-- this php code is written for session if, user wants to access without login then this will redirect to login page -->
<?php 
    //Establish a connection between php code and database
    $conn=mysqli_connect("localhost", "root", "", "BCASTUDENT") or die("Connection failed".mysqli_connect_error());
    error_reporting(0);
    $flt_profile=$_SESSION['user_name'];

    if($flt_profile == true){

    }else{
        header('Location: http://localhost/project.bca/faculty/facultyloginform.php');
    }
    ?>

<body>
    <?php //get student id from URL bar
        $stu_id=$_GET['id'];
        ?>
<div id="main-content">
    <form class="post-form" name="myform" method="post" action="\project.bca\faculty\addmarksdb.php" id="addmarks">
        <div class="form-group">
        <section>Add Marks of Student</section>
        <label class="id">Student Id</label>
        <input type="text" name="sid" value="<?php echo "$stu_id"; ?>" maxlength="2" class="inp-1" required>
        </div>
    <div class="form-group">
        <label>Java Programming</label>
        <input type="text" name="java" value="" maxlength="2" class="input-box" placeholder="subject-1" autocomplete="off" required>
    </div>

    <div class="form-group">
        <label>Wed Designing</label>
        <input type="text" name="web" value="" maxlength="2" class="input-box" placeholder="subject-2" autocomplete="off" required>
    </div>

    <div class="form-group">
        <label>Cloud Computing</label>
        <input type="text" name="cloud" value="" maxlength="2" class="input-box" placeholder="subject-3" autocomplete="off" required>
    </div>

    <div class="form-group">
        <label>Object Oriented</label>
        <input type="text" name="ood" value="" maxlength="2" class="input-box" placeholder="subject-4" autocomplete="off" required>
    </div>
    <div class="form-group">
        <label>Practical Lab-1</label>
        <input type="text" name="lab1" value="" maxlength="2" class="input-box" placeholder="subject-5" autocomplete="off" required>
</div>
<div class="form-group">
        <label>Practical Lab-2</label>
        <input type="text" name="lab2" value="" maxlength="2" class="input-box" placeholder="subject-6" autocomplete="off" required>
</div>
    <input class="submit" type="submit" value="AddMarks" name="submitData">
    </form>
   </div>
</body>
</html>
