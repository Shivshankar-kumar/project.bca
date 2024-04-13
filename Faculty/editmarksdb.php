<?php 
session_start();
?>
<?php 
$student_id=$_POST['sid'];
$java=$_POST['java'];
$web=$_POST['web'];
$cloud=$_POST['cloud'];
$ood=$_POST['ood'];
$lab1=$_POST['lab1'];
$lab2=$_POST['lab2'];

include '../connection.php';
$sql="UPDATE studentmarks SET sid='{$student_id}', java='{$java}', webdevelopment='{$web}', cloudcomputing='{$cloud}', ood='{$ood}', lab1='{$lab1}', lab2='{$lab2}' WHERE sid={$student_id}";
mysqli_query($conn, $sql) or die("Query failed".mysqli_connect_error());
//close connection
mysqli_close($conn);
header("Location: http://localhost/project.bca/faculty/viewmarks.php");
?>