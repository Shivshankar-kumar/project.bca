<?php
//to take for update data from edit form
$s_id=$_POST['sid'];
//to connect with database
$conn=mysqli_connect("localhost", "root", "", "BCASTUDENT") or die("Connect Failed..!".mysqli_connect_error());

//Query for delete records
$sql="DELETE FROM student WHERE sid = {$s_id} ";
mysqli_query($conn,$sql) or die("Query failed".mysqli_error());

//code for redirect this page on home
header ("Location: http://localhost/project.bca/Menu-option/viewData.php");

//close the connection
mysqli_close($conn);
?>