<!DOCTYPE html>
<html lang="en">
<head>
   <title>Nav bar</title>
   <style>

nav {
            background-color: #000080;
            overflow: hidden;
            position: fixed;
            width: 100%;
            top: 0;
        }

        nav a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }
        nav a:hover {
            background-color: #555;
        }
        #menu a.active{
            border: solid 0.5px white;
            border-radius: 4px;
        }
        .main-content {
            padding: 20px;
            flex: 1;
        }

   </style>
</head>
<body> 
<nav id="menu">
    <a href="\project.bca\index.php">Home</a>
    <a href="\project.bca\about.php">About</a>
    <a href="\project.bca\contact.php">Contact</a>
    <a href="https://shivshankar-kumar.github.io/port/" target="_blank">My Portfolio</a>
    <a href="\project.bca\signup.php">Sign Up</a>
    <a href="\project.bca\admin\loginpage.php">Login</a>
    <a href="\project.bca\faculty\facultyloginform.php">Faculty</a>
</nav>


<script>
    document.addEventListener("DOMContentLoaded", function() {
    var menuItems = document.querySelectorAll("#menu a");
  
    // Function to set active menu item based on current URL
    function setActiveMenuItem() {
      var currentUrl = window.location.href;
      menuItems.forEach(function(item) {
        if (item.href === currentUrl) {
          item.classList.add("active");
        } else {
          item.classList.remove("active");
        }
      });
    }
  
    // Set active menu item initially
    setActiveMenuItem();
  
    // Add click event listener to each menu item
    menuItems.forEach(function(item) {
      item.addEventListener("click", function() {
        // Remove active class from all menu items
        menuItems.forEach(function(item) {
          item.classList.remove("active");
        });
  
        // Add active class to the clicked menu item
        this.classList.add("active");
      });
    });
  });
</script>
</body>
</html>
