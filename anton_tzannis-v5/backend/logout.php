<?php 
    session_start();
    session_destroy();
    header('location: ../pages/user_login.php');
?>