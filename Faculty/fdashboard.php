<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty Dashboard</title>
    <style>
        .header{
    background: #262626;
    min-height: 10vh;
    margin-top: 0;
    color: #fff;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    display: flex;
    justify-content: space-between; 
    align-items:center;
    padding-inline: 10px;
}
    #right-corner{
        display: flex;
        align-items:center;
    }
    #right-corner p{
        font-style: italic;
        font-family: cursive;
    }
    #dept{
        display: flex;
        color: #fff;
    }
    #main-content table{
    margin-top: 0;
    width: 80vw;
    background-color: #555;
    margin-left: 0;
}
    </style>
    <link rel="stylesheet" href="\project.bca\faculty\style.css">
    <script src="\project.bca\Database\javascript\activelink.js" type="text/javascript"></script>
</head>

<!-- this php code is written for session if, user wants to access without login then this will redirect to login page -->
<?php 
    //Establish a connection between php code and database
    include '../connection.php';
    error_reporting(0);
    $flt_profile=$_SESSION['user_name'];

    if($flt_profile == true){

    }else{
        header('Location: http://localhost/project.bca/faculty/facultyloginform.php');
    }
    ?>
<body>
<div class="header">
    <div id="dept"><p>Department Of Computer Application</p>
</div>
<p>Faculty Module</p>
        <div id="right-corner">
        <?php echo "<p>"."Welcome ".$_SESSION['user_name']."</p>"; ?>
</div>
</div>
    <div class="container">
        <aside class="sidebar">
            <ul id="menu">
                <li><a href="\project.bca\faculty\facultyindex.php">Dashboard</a></li>
                <li><a href="\project.bca\faculty\viewdata.php">Students List</a></li>
                <li><a href="#">Courses</a></li>
                <li><a href="\project.bca\faculty\viewmarks.php">Marks Table</a></li>
                <li><a href="\project.bca\faculty\complainbox.php">Complain Box</a></li>
                <li><a href="\project.bca\faculty\facultylogout.php">Logout</a></li>
        </aside>
</ul>
</body>
</html>