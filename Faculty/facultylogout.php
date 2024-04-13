<?php 
session_start();
if(session_destroy()){
    header('Location: http://localhost/project.bca/faculty/facultyloginform.php');
    exit();
}
?>