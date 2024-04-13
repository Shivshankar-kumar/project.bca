<html>
    <head>
        <title>Marks Detail</title>
        <link rel="stylesheet" href="\project.bca\Menu-option\css\style.css">
        <?php include 'header.php' ?>
</head>
<body>
    <?php 
    
    //database connectivity 
    include '../connection.php';
    $sql="SELECT *FROM studentmarks";
    $result=mysqli_query($conn, $sql);
    if(!$result){
        die("Query Unsuccessful!");
    }
    ?>
<div id="main-content">
    <h2>Marks Detail</h2>
    <?php
        //to traverse on table in the form of associative array
if(mysqli_num_rows($result)>0)
{
    ?>
    <table cellpadding="7px">
        <thead>
        <th>Student Id</th>
        <th>501-(A)</th>
        <th>504-S-B</th>
        <th>503-(A)</th>
        <th>502-B</th>
        <th>Lab-551</th>
        <th>Lab-551</th>
        <th>Action</th>
        </thead>
        <tbody>
            <?php 
            while($row=mysqli_fetch_assoc($result)){
            ?>
            <tr>
                <td class="tbl"><?php echo $row['sid'] ?></td>
                <td class="tbl"><?php echo $row['java'] ?></td>
                <td class="tbl"><?php echo $row['webdevelopment'] ?></td>
                <td class="tbl"><?php echo $row['cloudcomputing'] ?></td>
                <td class="tbl"><?php echo $row['ood'] ?></td>
                <td class="tbl"><?php echo $row['lab1'] ?></td>
                <td class="tbl"><?php echo $row['lab2'] ?></td>
                <td class="tbl">
                <a href='\project.bca\Menu-option\editMarks.php?id= <?php echo $row['sid']; ?>'>Edit</a>
                <a href="#">Delete</a>
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