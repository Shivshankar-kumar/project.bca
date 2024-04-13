<html>
    <head>
        <title>Feedback List</title>
        <link rel="stylesheet" href="\project.bca\Menu-option\css\style.css">
        <?php include 'header.php'; ?>
</head>
<body>
    <?php 
    
    //database connectivity 
    include '../connection.php';
    $sql="SELECT *FROM feedback";
    $result=mysqli_query($conn, $sql);
    if(!$result){
        die("Query Unsuccessful!");
    }
    ?>
<div id="main-content">
    <h2>Feedback List</h2>
    <?php
        //to traverse on table in the form of associative array
if(mysqli_num_rows($result)>0)
{
    ?>
    <table cellpadding="1px">
        <thead>
        <th>Sl no.</th>
        <th>Name</th>
        <th>Mobile</th>
        <th>Email</th>
        <th>Message</th>
        <th>Date/Time</th>
        </thead>
        <tbody>
            <?php 
            while($row=mysqli_fetch_assoc($result)){
            ?>
            <tr>
                <td class="tbl"><?php echo $row['id'] ?></td>
                <td class="tbl"><?php echo $row['Name'] ?></td>
                <td class="tbl"><?php echo $row['Mobile'] ?></td>
                <td class="tbl"><?php echo $row['Email'] ?></td>
                <td class="tbl"><?php echo $row['Message'] ?></td>
                <td class="tbl"><?php echo $row['InsertedDateTime'] ?></td>
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