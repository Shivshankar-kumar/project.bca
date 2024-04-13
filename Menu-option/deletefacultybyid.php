<?php
//to take for update data from edit form
$f_id=$_POST['id'];
//to connect with database
include '../connection.php';
//Query for delete records
$sql="DELETE FROM facultyusername WHERE fid = {$f_id} ";
mysqli_query($conn,$sql) or die("Query failed".mysqli_error());

//code for redirect this page on home
header ("Location: http://localhost/project.bca/Menu-option/facultylist.php");

//close the connection
mysqli_close($conn);
?>