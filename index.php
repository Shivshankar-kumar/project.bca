<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student-Faculty Web Portal</title>
    <link rel="stylesheet" href="\project.bca\indexsyle.css">
    <style>
        body{
            margin: 0;
            padding: 0;
        }
        #page-container {
        max-width: 800px;
        margin: 10px auto;
        padding: 20px;
    }
    #sub-container {
        
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
    }
    #intro {
        border: 1px solid #ddd;
        padding: 10px;
        background-color: rgba(255, 255, 255, 0.7);
        flex: 0 0 calc(25% - 20px);
        display: flex;
        flex-direction: column;
        height: 100%;
    }
    #intro img {
        max-width: 100%;
        height: auto;
    }
    </style>
</head>
<body>
<header>
</header>
<?php include 'nav.php'; ?> 
 
<div id="page-container">
        <h2 style="font-weight: 900">What is the steps?</h2>
        <div id="sub-container">
            <div id="intro">
            <img src="\project.bca\image\registered-user.png" alt="registered image">
                <h2>Fresher Student</h2>
                <p>Access our student-faculty web portal by visiting our website. Sign-up with your credentials to explore resources. <a href="\project.bca\signup.php">Sign-up</a></p>
            </div>
            <div id="intro">
                <img src="\project.bca\image\user_photos.png" alt="new user image">
                <h2>Registered Student</h2>
                <p>Registered students can access course materials, Exam forms, and communicate with faculty through our web portal. <a href="\project.bca\Student\studentLoginForm.php">Login</a></p>
            </div>
            <div id="intro">
                <img src="\project.bca\image\admin_img.png" alt="admin image">
                <h2>Administration Section</h2>
                <p>Admins possess the power to add students, faculty, and more to our web portal. They manage user accounts, and course information.</p>
            </div>
        </div>
    </div>

<?php include 'footer.php'; ?>
</body>
</html>
