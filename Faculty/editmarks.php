<html>
<head>
    <title>Edit Student Marks</title>
    <link rel="stylesheet" href="\project.bca\Menu-option\css\style.css">
    <?php include 'fdashboard.php'; ?>
    <style>
      #main-content .post-form{
        margin-left: 0;
      }
      #main-content h2{
    text-align: left;
}
    </style>
</head>
<body>
<div id="main-content">
    <h2>Edit Student Marks</h2>
    <?php 
    // to build connection with database
    include '../connection.php';
    //get student id from URL bar
    $student_id=$_GET['id'];

    //fetch data from tables
    $sql="SELECT * FROM studentmarks WHERE sid= {$student_id} ";
    
    $result=mysqli_query($conn,$sql) or die("Query failed".mysqli_connect_error());
    
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
    ?>
    <form class="post-form" action="\project.bca\faculty\editmarksdb.php" name="myform" method="post">
      <div class="form-group">
          <label>Student Id</label>
          <input type="text" name="sid" value="<?php echo $row['sid']; ?>" maxlength="2" autocomplete="off" required>
        </div>
        <div class="form-group">
        <label>Java Programming</label>
          <input type="text" name="java" value="<?php echo $row['java']; ?>" maxlength="2" autocomplete="off" required>
      </div>
      <div class="form-group">
          <label>Web Designing</label>
          <input type="text" name="web" value="<?php echo $row['webdevelopment']; ?>" maxlength="2" autocomplete="off" required>
      </div>
      <div class="form-group">
          <label>Cloud Computing</label>
          <input type="text" name="cloud" value="<?php echo $row['cloudcomputing']; ?>" maxlength="2" autocomplete="off" required>
      </div>
      <div class="form-group">
          <label>Object Oriented</label>
          <input type="text" name="ood" value="<?php echo $row['ood']; ?>"maxlength="2" autocomplete="off" required>
      </div>
      <div class="form-group">
        <label>Lab(Java-551)</label>
        <input type="text" name="lab1" value="<?php echo $row['lab1'];?>" maxlength="2" autocomplete="off" required>
      </div>
      <div class="form-group">
        <label>Lab(Web-552)</label>
        <input type="text" name="lab2" value="<?php echo $row['lab2'];?>" maxlength="2" autocomplete="off" required>
      </div>
      <input class="submit" type="submit" value="Update">
    </form>
    <?php
    } 
}
//close the connection
 mysqli_close($conn);
    ?>
</div>
</div>
</body>
</html>