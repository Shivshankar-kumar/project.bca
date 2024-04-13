<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign Up Page</title>
    <link rel="stylesheet" href="\project.bca\indexsyle.css">
    <script>
        // Function to show popup message for 5 seconds
        function showPopupMessage(message) {
            var popup = document.createElement('div');
            popup.className = 'popup';
            popup.textContent = message;
            document.body.appendChild(popup);

            setTimeout(function() {
                document.body.removeChild(popup);
            }, 2000); // 5 seconds
        }
    </script>
    <style>
        .popup {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #ffffff;
            border: 1px solid #000000;
            padding: 20px;
            z-index: 9999;
        }
    </style>
<?php include 'nav.php'; ?>
</head>
<body>
    <div class="signup-box">
        <h2>Sign Up</h2>
        <form action="\project.bca\Savesignup.php" method="post" name="myform" onsubmit="showPopupMessage('Signup successful!');">
            <input type="text" name="name" placeholder="Type your name" value="" maxlength="40" required>
            <input type="email" name="email" placeholder="Email" value="" maxlength="30" required>
            <input type="text" name="mobile" placeholder="Mobile" value="" maxlength="10" required>
            <label><span style="color:red;">*</span> Course</label>
            
            <select name="course" required>
                
                <?php
                //to connect with database
            $conn=mysqli_connect("localhost", "root", "", "BCASTUDENT") or die("Connection Error! ".mysqli_connect_error());

            //Query to retreive Course name from studentclass

            $sql="SELECT * FROM studentclass";

            $result=mysqli_query($conn,$sql);
            ?>
            <option selected disabled>Select Course</option>
            <?php
            while($row=mysqli_fetch_assoc($result)){
            ?>
                <option value="<?php echo $row['cid']; ?>"><?php echo $row['coursename']; ?></option>
                <?php } ?>
            </select>
            <input type="password" name="password" placeholder="Create password" required>
            <button type="submit">Sign Up</button>
        </form>
    </div><br><br><br><br>
    <?php include 'footer.php'; ?>
</body>
</html>