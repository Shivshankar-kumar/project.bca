<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty Dashboard</title>
    <link rel="stylesheet" href="\project.bca\faculty\style.css">
</head>

<!-- this php code is written for session if, user wants to access without login then this will redirect to login page -->
<?php 
    //Establish a connection between php code and database
    $conn=mysqli_connect("localhost", "root", "", "BCASTUDENT") or die("Connection failed".mysqli_connect_error());
    error_reporting(0);
    $flt_profile=$_SESSION['user_name'];

    if($flt_profile == true){

    }else{
        header('Location: http://localhost/project.bca/faculty/facultyloginform.php');
    }
    ?>
<body>
    <?php include 'fdashboard.php'; ?>
        <main class="content">
            <h1>Welcome to Faculty Module</h1>
            <p>You can fetch the information of all student.</p>
       </main>
    </div>
</body>
</html>
