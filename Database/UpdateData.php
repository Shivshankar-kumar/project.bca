<?php
//to take for update data from edit form
$s_id=$_POST['sid'];
$s_name=$_POST['name'];
$s_mobile=$_POST['mobile'];
$s_age=$_POST['age'];
$s_address=$_POST['address'];
$s_course=$_POST['course'];

//to connect with database
$conn=mysqli_connect("localhost", "root", "", "BCASTUDENT") or die("Connect Failed..!".mysqli_connect_error());

//Query for Update records
$sql="UPDATE student SET Name= '{$s_name}', Mobile= '{$s_mobile}', Age= '{$s_age}', Address= '{$s_address}', Course= '{$s_course}' WHERE sid= {$s_id} ";
mysqli_query($conn,$sql) or die("Query failed".mysqli_error());

//code for redirect this page on home
header ("Location: http://localhost/project.bca/Menu-option/viewData.php");

//close the connection
mysqli_close($conn);
?>