<?php
    include("mysql.php");

    /* CHECK FOR VALUES */
    $userMail = isset($_REQUEST['userMail']) ? $_REQUEST['userMail'] : ""; 
    $userPassword = isset($_REQUEST['userPassword']) ? $_REQUEST['userPassword'] : "";
    
    $firstName = isset($_REQUEST['firstName']) ? $_REQUEST['firstName'] : ""; 
    $lastName = isset($_REQUEST['lastName']) ? $_REQUEST['lastName'] : "";
    $userPhone = isset($_REQUEST['userPhone']) ? $_REQUEST['userPhone'] : "";
    
   
    /* HASH ENCRYPTING OF PASSWORD FOR SAFETY */
    $passEncrypt = password_hash($userPassword, PASSWORD_DEFAULT);
    
    /* SAVES DATA IN TABELS userProfile AND userLogin THROUGH PROCEDURE AddNewUserLogin */
    $newUserProfile = "CALL antonTzannis_addNewUserLogin ('$userMail', '$passEncrypt', '$firstName', '$lastName', '$userPhone') ";
    $newUserProfileToDatabase = $mySQL->query($newUserProfile);

    header('location: ../pages/user_login.php');  
?>