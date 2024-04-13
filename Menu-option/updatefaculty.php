<?php
//to take for update data from edit form
$f_id=$_POST['id'];
$fuser_name=$_POST['username'];
$f_password=$_POST['password'];
//to connect with database
$conn=mysqli_connect("localhost", "root", "", "BCASTUDENT") or die("Connect Failed..!".mysqli_connect_error());

//Query for Update records
$sql="UPDATE facultyusername SET username= '{$fuser_name}', Password= '{$f_password}' WHERE fid= {$f_id} ";
mysqli_query($conn,$sql) or die("Query failed".mysqli_error());

//code for redirect this page on home
header ("Location: http://localhost/project.bca/Menu-option/facultylist.php");

//close the connection
mysqli_close($conn);
?>