<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Total Faculty</title>
    <link rel="stylesheet" href="\project.bca\Menu-option\css\style.css">
        <?php include 'header.php'; ?>
</head>
<body>
    <?php 
    
    //database connectivity 
    include '../connection.php';
    $sql="SELECT *FROM facultyusername";
    $result=mysqli_query($conn, $sql);
    if(!$result){
        die("Query Unsuccessful!");
    }
    ?>
<div id="main-content">
    <h2>Faculty List</h2>
    <?php
        //to traverse on table in the form of associative array
if(mysqli_num_rows($result)>0)
{
    ?>
    <table cellpadding="1px">
        <thead>
            <th>Sl no.</th>
        <th>UserName</th>
        <th>Password</th>
        <th>Action</th>
        </thead>
        <tbody>
            <?php 
            while($row=mysqli_fetch_assoc($result)){
            ?>
            <tr>
                <td><?php echo $row['fid'] ?></td>
                <td><?php echo $row['username'] ?></td>
                <td><?php echo $row['password'] ?></td>


                <td>
                <a href='editfaculty.php?id= <?php echo $row['fid']; ?>'>Edit</a>
                <a href='deletefaculty.php?id= <?php echo $row['fid']; ?>'>Delete</a>
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
<body>
</html>