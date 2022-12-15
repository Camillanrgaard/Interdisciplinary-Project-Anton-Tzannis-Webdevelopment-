<?php 
    session_start();
    include("mysql.php");

    $userId = $_SESSION['login'];

   /* CHECK FOR VALUES */
    $firstName = isset($_REQUEST['firstName']) ? $_REQUEST['firstName'] : ""; 
    $lastName = isset($_REQUEST['lastName']) ? $_REQUEST['lastName'] : "";
    $userMail = isset($_REQUEST['userMail']) ? $_REQUEST['userMail'] : ""; 
    $userPhone = isset($_REQUEST['userPhone']) ? $_REQUEST['userPhone'] : "";

    /* FIRSTNAME */
    if ($firstName != ""){
        $newFirstName = "UPDATE antonTzannis_userProfile SET firstName = '$firstName' WHERE id = '$userId' ";
        $newFirstNameToDatabase = $mySQL->query($newFirstName);
    }

    /* LASTNAME */
    if ($lastName != ""){
        $newLastName = "UPDATE antonTzannis_userProfile SET lastName = '$lastName' WHERE id = '$userId' ";
        $newLastName = $mySQL->query($newLastName);
    }

    /* PHONE */
    if ($userPhone != ""){
        $newUserPhone = "UPDATE antonTzannis_userProfile SET userPhone = '$userPhone' WHERE id = '$userId' ";
        $newUserPhoneToDatabase = $mySQL->query($newUserPhone);
    }

    /* UPDATES THE SESSION AND "STAYS" ON USER PROFILE PAGE */
    $sql = "SELECT * FROM antonTzannis_userProfile WHERE id = '$userId' ";
    $response = $mySQL->query($sql);
    $user = $response->fetch_object();
    $_SESSION['user'] = $user;
    
    header('location: ../pages/user_profile.php');
?>