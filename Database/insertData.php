<html>
    <head>
    <title>Data Inserted</title>
</head>
<body>
<?php


//connect database
$conn=mysqli_connect("localhost", "root", "","BCASTUDENT") or die("Connection failed!".mysqli_connect_error());

//takes input data from textbox
$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$course=$_POST['course'];
$password=$_POST['password'];
//Query for database
$sql="INSERT INTO student2 (Name, Email, Mobile, Course, Password) VALUES('$name', '$email', '$mobile', '$course','$password');";
mysqli_query($conn,$sql) or die("Query failed".mysqli_connect_error());

//close the connection
mysqli_close($conn);
//Query for redirect this page on home page
header ("Location: http://localhost/project.bca/Menu-option/viewData.php");
    ?>
</body>
</html>