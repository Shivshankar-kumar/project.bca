<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete-By-Id</title>
    <link rel="stylesheet" href="\project.bca\Menu-option\css\style.css">
    <?php 
include 'header.php'; ?>
</head>
<body>
<div id="main-content">
    <h2 align="center">Delete Record</h2>
    <form class="post-form" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" maxlength="2" placeholder="search id here" required>
        </div>
        <input class="submit" type="submit" name="showbtn" value="SEARCH" />
    </form>
<?php
if(isset($_POST['showbtn'])){
    //connect database
    $conn1=mysqli_connect("localhost", "root", "","BCASTUDENT") or die("Connection failed!".mysqli_connect_error());
    //to get id from url bar
    $stu_id=$_POST['sid'];
 
//Query for sql
$sql="SELECT * FROM student WHERE sid = {$stu_id} ";

$result=mysqli_query($conn1,$sql) or die("Query failed..!");
if(mysqli_num_rows($result) > 0){
    while($row=mysqli_fetch_assoc($result)){
        ?>
    <form class="post-form" action="/project.bca/Database/DeleteRecords.php" method="post">
        <div class="form-group">
            <label for="">Name</label>
            <input type="hidden" name="sid"  value="<?php echo $row['sid']; ?>" />
            <input type="text" name="name" value="<?php echo $row['Name']; ?>" maxlength="40" />
        </div>
        <div class="form-group">
            <label>Mobile</label>
            <input type="text" name="mobile" value="<?php echo $row['Mobile']; ?>" maxlength="10" />
        </div>
        <div class="form-group">
        <label>Age</label>
        <input type="text" name="age" value="<?php echo $row['Age']; ?>" maxlength="3"/>
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="address" value="<?php echo $row['Address']; ?>" maxlength="100" />
        </div>
        <div class="form-group">
        <?php    
        $sql1="SELECT * FROM studentclass";
        $result1=mysqli_query($conn1, $sql1);
        ?>
        <label>Course</label>
        <?php
        if(mysqli_num_rows($result1) > 0){
            echo '<select name="course">';
            while($row1=mysqli_fetch_assoc($result1)){
                if($row['Course']==$row1['cid']){
                    $select="selected";
                }else{
                    $select="";
                }
                echo "<option {$select} value={$row1['cid']}>{$row1['coursename']}</option>";
            }
            echo "</select>";
        }
        ?>
        </div>
    <input class="submit" type="submit" value="DELETE"  />
    </form>
    <?php }
}
}
?>
</div>
</div>
</body>
</html>
