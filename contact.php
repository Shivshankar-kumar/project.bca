<!DOCTYPE html>
<html lang="en">
<head>
    <title>Student Faculty Web Portal</title>
    <link rel="stylesheet" href="\project.bca\indexsyle.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
</head>
<body>
<?php include 'nav.php'; ?>
<div class="box1">
<div id="intro">
            <img src="\project.bca\image\founder.png" alt="founder image">
                <h2>About me</h2>
                <p>I am a passionate and motivated full-stack web developer with a solid foundation in both front-end and back-end technologies.<a href="\project.bca\signup.php">Sign-up</a></p>
            </div>
<div id="contact">
        <div id="container">
            <div class="row">
                <div class="contact-left">
                    <h1 class="sub-title">Contact Me</h1>
                    <p> <i class="fa-solid fa-paper-plane"></i><a href="mailto:shivshankerkumar079@gmail.com">shivshankerkumar079@gmail.com</a></p>
                    <p> <i class="fa-solid fa-phone"></i> 7808871214</p>
                    <div class="social-icon">
                        <a href="https://www.facebook.com/profile.php?id=100027455753286&mibextid=ZbWKwL"><i class="fa-brands fa-square-facebook"></i></a>
                        <a href="https://www.instagram.com/shivshankar_kumar_singh?igsh=MWIyNmRncTExa2E2bg=="><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://x.com/Shivshankar002?t=ReRJYKBXQyZKhFdkR0ya3g&s=09"><i class="fa-brands fa-twitter"></i></a>
                        <a href="https://www.linkedin.com/in/shivshankar-kumar-singh?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><i class="fa-brands fa-linkedin"></i></a>
                        <a href="https://github.com/Shivshankar-kumar"><i class="fa-brands fa-github"></i></a>
                    </div>
                    <a href="my CV.pdf" download class="btn btn2">Download CV</a>
                </div>
                <div class="contact-right">
                    <form name="feedback" action="\project.bca\feedbackdb.php" method="post">
                        <br>
                        <h3><b><caption>Fill Feedback form</caption></b></h3>
                        <label>Name: <span style="color: red">*</span></label>
                        <input type="text" name="name" placeholder="Your Name" maxlength="40" required>

                        <label>Mobile: <span style="color: red">*</span></label>
                        <input type="text" name="mobile" placeholder="+91 " maxlength="10" required>

                        <label>Email: <span style="color: red">*</span></label>
                        <input type="email" name="email" placeholder="Your Email" maxlength="40" required>

                        <label>Message: <span style="color: red">*</span> <span>Character should not more than 100.</span></label>
                        <textarea name="message" rows="3" placeholder="Write Your Messsage." maxlength="100" required></textarea>
                        
                        <button type="submit" class="btn btn2">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        </div>
</div>
        <?php include 'footer.php'; ?>
</body>
</html>