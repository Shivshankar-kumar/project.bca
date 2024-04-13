<?php
//to take for update data from edit form
$s_id=$_POST['sid'];
$s_name=$_POST['name'];
$s_email=$_POST['email'];
$s_mobile=$_POST['mobile'];
$s_course=$_POST['course'];
$s_password=$_POST['password'];
//to connect with database
$conn=mysqli_connect("localhost", "root", "", "BCASTUDENT") or die("Connect Failed..!".mysqli_connect_error());

//Query for Update records
$sql="UPDATE student2 SET Name= '{$s_name}', Email= '{$s_email}', Mobile= '{$s_mobile}', Course= '{$s_course}', Password= '{$s_password}' WHERE sid= {$s_id} ";
mysqli_query($conn,$sql) or die("Query failed".mysqli_error());

//code for redirect this page on home
header ("Location: http://localhost/project.bca/Menu-option/viewData.php");

//close the connection
mysqli_close($conn);
?>