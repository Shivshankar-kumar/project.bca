<html>
    <head>
        <title>View Data</title>
        <link rel="stylesheet" href="\project.bca\Menu-option\css\style.css">
        <?php include 'fdashboard.php'; ?>
</head>
<body>
    <?php 
    
    //database connectivity
    $conn=mysqli_connect("localhost", "root", "", "BCASTUDENT") or die("Connection Error! ".mysqli_connect_error());
    //query for JOIN two table
    $sql=" SELECT s.sid, s.Name, s.Email, s.Mobile, sc.coursename, s.Password 
    FROM student2 s INNER JOIN studentclass sc
   ON s.Course = sc.cid; ";

    $result=mysqli_query($conn, $sql);
    if(!$result){
        die("Query Unsuccessful!");
    }
    ?>
<div id="main-content">
    <h2>All Records</h2>

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
        <th>Password</th>
        <th>Action</th>
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
               <td>
                <a href='addMarks.php?id= <?php echo $row['sid']; ?>'>Add Marks</a>
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