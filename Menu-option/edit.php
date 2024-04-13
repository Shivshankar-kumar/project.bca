<html>
<head>
    <title>Update Data</title>
    <link rel="stylesheet" href="\project.bca\Menu-option\css\style.css">
    <?php 
include 'header.php';
?>
</head>
<body>
<div id="main-content">
    <h2>Update Record</h2>
    <?php 
    // to build connection with database
    include '../connection.php';
    
    //get student id from URL bar
    $stu_id=$_GET['id'];

    //fetch data from tables
    $sql="SELECT * FROM student2 WHERE sid= {$stu_id} ";
    
    $result=mysqli_query($conn,$sql) or die("Query failed".mysqli_connect_error());
    
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
    ?>
    <form class="post-form" action="/project.bca/Database/UpdateData.php" name="myform" method="post">
      <div class="form-group">
          <label>Name</label>
          <input type="hidden" name="sid" value="<?php echo $row['sid']; ?>">
          <input type="text" name="name" value="<?php echo $row['Name']; ?>" maxlength="40" required>
      </div>

      <div class="form-group">
          <label>Email</label>
          <input type="text" name="email" value="<?php echo $row['Email']; ?>" maxlength="30" required>
      </div>

      <div class="form-group">
          <label>Mobile</label>
          <input type="text" name="mobile" value="<?php echo $row['Mobile']; ?>" maxlength="10" required>
      </div>
      <div class="form-group">
        <label>Course</label>
<?php
        $query="SELECT * FROM studentclass";
        $result1=mysqli_query($conn,$query);
        if(mysqli_num_rows($result1) > 0){

            echo '<Select name="course">';
            while($row1=mysqli_fetch_assoc($result1)){

                //condition for selecting choosen course
                if($row['Course']==$row1['cid']){
                    $select= "selected";
                }else{
                    $select= "";
                }
                echo "<option {$select} value={$row1['cid']}>{$row1['coursename']}</option>";
            }
            echo '</Select>';
        }
        ?>
      </div>
      <div class="form-group">
          <label>Password</label>
          <input type="text" name="password" value="<?php echo $row['Password']; ?>" maxlength="30" required>
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