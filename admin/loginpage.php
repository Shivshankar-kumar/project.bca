<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-Page</title>
    <link rel="stylesheet" href="\project.bca\admin\css_sheet\css_on_Loginpage.css">
    <link rel="stylesheet" href="\project.bca\indexsyle.css">
</head>
<body>
    <?php include '../nav.php'; ?>
<div id="container">
        <h1>Login</h1><br>
        <h3>ONLY REGISTERED USER</h2>
        <hr>
        <div id="form-header">
            <a href="\project.bca\Student\studentLoginForm.php"><button>Student | Login</button></a>
        </div>
        <div id="form-header">
            <a href="\project.bca\admin\adminloginform.php"><button>Admin | Login</button></a>
        </div>
            <div id="bottom-paragraph">
                <p>Not a member?<span><a href="\project.bca\signup.php">&nbsp; Sign-up as a Student</a></span></p>
            </div>
    </div>

    <?php include '../footer.php'; ?>
</body>
</html>