<html>
<head>
    <title>Delete Faculty</title>
    <link rel="stylesheet" href="\project.bca\Menu-option\css\style.css">
    <?php 
include 'header.php';
?>
</head>
<body>
<div id="main-content">
    <h2>Delete Confidential Information</h2>
    <?php 
    // to build connection with database
    $conn=mysqli_connect("localhost", "root", "", "BCASTUDENT") or die("Connection failed");
    
    //get student id from URL bar
    $f_id=$_GET['id'];

    //fetch data from tables
    $sql="SELECT * FROM facultyusername WHERE fid= {$f_id} ";
    
    $result=mysqli_query($conn,$sql) or die("Query failed".mysqli_connect_error());
    
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
    ?>
    <form class="post-form" action="/project.bca/Menu-option/deletefacultybyid.php" name="myform" method="post">
      <div class="form-group">
          <label>Username</label>
          <input type="hidden" name="id" value="<?php echo $row['fid']; ?>"/>
          <input type="text" name="username" value="<?php echo $row['username']; ?>" maxlength="40" disabled>
      </div>
      <div class="form-group">
          <label>Password</label>
          <input type="password" name="password" value="<?php echo $row['password']; ?>" maxlength="15" disabled>
      </div>
      <input class="submit" type="submit" value="Delete">
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