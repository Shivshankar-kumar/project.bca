<html>
    <head>
        <title>Online Student Information</title>
        <link rel="stylesheet" href="\project.bca\Menu-option\css\style.css">
    <?php include 'header.php' ?>
</head>
<body>
    <?php 
    
    //database connectivity
    include '../connection.php';
    //query for JOIN two table
    $sql=" SELECT s.sid, s.Name, s.Email, s.Mobile, sc.coursename, s.Password, s.InsertedDateTime 
    FROM signup s INNER JOIN studentclass sc
   ON s.Course = sc.cid; ";

    $result=mysqli_query($conn, $sql);
    if(!$result){
        die("Query Unsuccessful!");
    }
    ?>
<div id="main-content">
    <h2>Online Registered Students Information</h2>

    <?php
        //to traverse on table in the form of associative array
if(mysqli_num_rows($result)>0)
{
    ?>
    <table>
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Mobile</th>
        <th>Course</th>
        <th>Password</th>
        <th>Date/Time</th>
        </thead>
        <tbody>
            <?php 
            while($row=mysqli_fetch_assoc($result)){
            ?>
            <tr>
                <td><?php echo $row['sid'] ?></td>
                <td><?php echo $row['Name'] ?></td>
                <td><?php echo $row['Email'] ?></td>
                <td><?php echo $row['Mobile'] ?></td>
                <td><?php echo $row['coursename'] ?></td>
                <td><?php echo $row['Password'] ?></td>
                <td><?php echo $row['InsertedDateTime'] ?></td>
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