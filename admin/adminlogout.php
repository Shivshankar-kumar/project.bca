<?php 
session_start();
if(session_destroy()){
    header('Location: http://localhost/project.bca/admin/loginpage.php');
    exit();
}
?>