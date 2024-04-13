document.addEventListener("DOMContentLoaded", function() {
    var menuItems = document.querySelectorAll("#menu li a");
  
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