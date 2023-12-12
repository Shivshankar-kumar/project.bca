<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Marks</title>
    <link rel="stylesheet" href="\project.bca\Student\css\style.css">
</head>
<body>
    <?php 
    include 'dashboard.php';
    $conn=mysqli_connect("localhost", "root", "", "BCASTUDENT") or die("Connection failed".mysqli_connect_error());
    //get student id from URL bar
    $stu_id=$_GET['id'];
    $sql="SELECT *FROM studentmarks WHERE sid= {$stu_id}";
    $result=mysqli_query($conn,$sql);
    if(!$result){
        die("Query failed");
    }
    if(mysqli_num_rows($result)>0){
    ?>
        <table>
        <tr class="row-1"><th colspan="7">5th Sem IInd Sessional Marksheet</th></tr>
        <tr class="row-2">
        <th>ID</th>
        <th>Java</th>
        <th>Web Designing</th>
        <th>Cloud Computing</th>
        <th>OOD</th>
        <th>Lab-(551)</th>
        <th>Lab-(552)</th>
    </tr>
    <?php
    while($row=mysqli_fetch_assoc($result))
    { ?>
    <tr>
        <td><?php echo $row['sid'] ?></td>
        <td><?php echo $row['java'] ?></td>
        <td><?php echo $row['webdevelopment'] ?></td>
        <td><?php echo $row['cloudcomputing'] ?></td>
        <td><?php echo $row['ood'] ?></td>
        <td><?php echo $row['lab1'] ?></td>
        <td><?php echo $row['lab2'] ?></td>
    </tr>
    <tr class="bottom-row"><td colspan="7"><a href="/project.bca/Student/dashboard.php">BACK</a></td></tr>
    <?php 
    }
    }
    ?>
    </table>
</body>
</html>