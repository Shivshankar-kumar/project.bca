<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student | Complain Box</title>
    
    <link rel="stylesheet" href="\project.bca\Menu-option\css\style.css">
    <?php include 'fdashboard.php'; ?>
</head>
<body>
<?php 
    
    //database connectivity
    $conn=mysqli_connect("localhost", "root", "", "BCASTUDENT") or die("Connection Error! ".mysqli_connect_error());
    //query for JOIN two table
    $sql="SELECT *FROM complain_box";

    $result=mysqli_query($conn, $sql);
    if(!$result){
        die("Query Unsuccessful!");
    }
    ?>
<div id="main-content">
    <h2>Complain List of Student</h2>

    <?php
        //to traverse on table in the form of associative array
if(mysqli_num_rows($result)>0)
{
    ?>
    <table cellpadding="1px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Mobile</th>
        <th>Course</th>
        <th>Message</th>
        <th>Date/Time</th>
        <th>Action</th>
        </thead>
        <tbody>
            <?php 
            while($row=mysqli_fetch_assoc($result)){
            ?>
            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['Name'] ?></td>
                <td><?php echo $row['Email'] ?></td>
                <td><?php echo $row['Mobile'] ?></td>
                <td><?php echo $row['Course'] ?></td>
                <td><?php echo $row['Message'] ?></td>
                <td><?php echo $row['InsertedDateTime'] ?></td>
               <td>
                <a href="#">Respond</a>
                </td>
            </tr>
            <?php }
            ?>
        </tbody>
    </table>
</form>
<?php
//close connection
mysqli_close($conn);
}
?>
</div>
</body>
</html>