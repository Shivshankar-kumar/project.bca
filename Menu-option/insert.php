<html>
    <head>
    <title>Add New Records</title>
    <link rel="stylesheet" href="\project.bca\Menu-option\css\style.css">
        <?php include 'header.php' ?> 
</head>
<body>
<div id="main-content">
    <h2>Add New Records</h2>
    <form class="post-form" name="myform" method="post" id="saveData">
    <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" value="" maxlength="40" required>
    </div>

    <div class="form-group">
        <label>Mobile</label>
        <input type="text" name="mobile" value="" maxlength="10" required>
    </div>

    <div class="form-group">
        <label>Age</label>
        <input type="text" name="age" value="" maxlength="3" required>
    </div>

    <div class="form-group">
        <label>Address</label>
        <input type="text" name="address" value="" maxlength="100" required>
    </div>
    <div class="form-group">
        <label>Course</label>
        
        <select name="course" required>
            
            <?php
            //to connect with database
        $conn=mysqli_connect("localhost", "root", "", "BCASTUDENT") or die("Connection Error! ".mysqli_connect_error());

        //Query to retreive Course name from studentclass

        $sql="SELECT * FROM studentclass";

        $result=mysqli_query($conn,$sql);
        ?>
        <option selected disabled>Select Course</option>
        <?php
        while($row=mysqli_fetch_assoc($result)){
        ?>
            <option value="<?php echo $row['cid']; ?>"><?php echo $row['coursename']; ?></option>
            <?php } ?>
        </select>
        </div>
    <input class="submit" type="submit" value="SAVE" name="submitData">
    </form>
    <!-- Javascript for buttton -->
    <script type="text/javascript" src="/project.bca/Database/javascript/eventonbutton.js"></script>
</div>
</body>
</html>