<html>
    <head>
    <title>Data Inserted</title>
</head>
<body>
<?php


//connect database
$conn=mysqli_connect("localhost", "root", "","BCASTUDENT") or die("Connection failed!".mysqli_connect_error());

//takes input data from textbox
echo $name=$_POST['name'];
echo $mobile=$_POST['mobile'];
echo $age=$_POST['age'];
echo $address=$_POST['address'];
echo $course=$_POST['course'];
//Query for database
$sql="INSERT INTO student (Name, Mobile, Age, Address, Course) VALUES('$name', '$mobile', '$age', '$address','$course');";
mysqli_query($conn,$sql) or die("Query failed".mysqli_connect_error());

//close the connection
mysqli_close($conn);
//Query for redirect this page on home page
header ("Location: http://localhost/project.bca/Menu-option/viewData.php");
    ?>
</body>
</html>