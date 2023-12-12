<html>
    <head>
    <title>Student Marks</title>
    <link rel="stylesheet" href="\project.bca\Menu-option\css\style.css">
    <?php include 'header.php' ?> 
</head>
<body>
    <?php //get student id from URL bar
        $stu_id=$_GET['id'];
        ?>
<div id="main-content">
    <form class="post-form" name="myform" method="post" action="\project.bca\Database\addMarksDB.php" id="addmarks">
        <div class="form-group">
        <section>Add Marks of Student</section>
        <label class="id">Student Id</label>
        <input type="text" name="sid" value="<?php echo "$stu_id"; ?>" maxlength="2" class="inp-1" placeholder="Type student id" autocomplete="off" required>
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
