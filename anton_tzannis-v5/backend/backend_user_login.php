<?php 
    session_start();
    include("mysql.php");

    $userMail = isset($_REQUEST['userMail']) ? $_REQUEST['userMail'] : ""; 
    $userPassword = isset($_REQUEST['userPassword']) ? $_REQUEST['userPassword'] : "";

    //LIMIT 1 FOR SAFETY
    $sql = "SELECT id, userPassword FROM antonTzannis_userLogin WHERE userMail = '$userMail' LIMIT 1";
    $response = $mySQL->query($sql);

    $user = $response->fetch_object();

    /* LOGIN */
    if($user == NULL) {
        // IF EMAIL IS WRONG - "STAY" ON USER LOGIN PAGE
        header('location: ../pages/user_login.php?error=wronglogin');
        exit;
    } else {
        $verify = password_verify($userPassword, $user->userPassword); //verify af password

        if($verify == true) {
            // IF USERNAME AND PASSWORD IS CORRECT - REDICRECT TO USER PROFILE PAGE AND SAVE DATA FOR LOGGED IN USER IN THE SESSION
            $_SESSION['login'] = $user->id;
            
            $sql = "SELECT * FROM antonTzannis_userProfile WHERE id = '$user->id' ";
            $response = $mySQL->query($sql);
            $user = $response->fetch_object();
            $_SESSION['user'] = $user;

            header('location: ../pages/booking.php');
            exit;
        } else {
            // IF PASSWORD IS WRONG - "STAY" ON USER LOGIN PAGE
            header('location: ../pages/user_login.php?error=wronglogin');
            exit;
        }
    }
?>