<?php session_start(); 
    /* REDIRECT TO USER LOGIN PAGE IF USER IS NOT LOGGED IN */
    if(!isset($_SESSION['login'])){
        header('location: ../pages/user_login.php');
        exit;
    }
    include('../backend/mysql.php');
    include('../partials/head.php'); 
?>
<!DOCTYPE html>
<html lang="da">
<head>
    <title>Anton Tzannis | Book tid</title>
</head>
<body>
    <header>
        <?php include_once("../partials/header.php"); ?>
    </header>
    <main>
        <div class="page">
            <!--- USER SESSION BTN --->
            <?php include_once("../partials/user_session_btn.php"); ?>
            <h1 class="goldtext text-padding">Din brugerprofil</h1>
            <!--- INSERT NAME FROM PROFILE --->
            <?php
                $userId = $_SESSION['login'];

                $showUserProfile = "SELECT * FROM antonTzannis_userProfile WHERE id = '$userId' ";
                $showUserAntonTzannisProfile = $mySQL->query($showUserProfile);
                    
                while($row = $showUserAntonTzannisProfile->fetch_object("User")) :?>
                    <p class="center">
                        Velkommen <?= $row->UserNameCard();?><br>
                        Her kan du redigere dine oplysninger og administrere dine bookinger
                    </p>
            
            <?php endwhile; ?>
                        
            <?php
                class User {
                    public function UserNameCard(){
                        return $this->firstName . " " . $this->lastName;
                    }
                }
            ?>
            <div class="primary-whitespace-horizontal"></div>         
            <div class="user_profile_flex">
                <!--- UPDATE BOOKINGS --->
                <div class="user_section user_profile_flex-item">                  
                    <h2>Administrer bookinger</h2>
                    <br>
                    <form action="../pages/booking.php" class="btn-center">
                        <button class="primary-btn" type="submit">
                            <span class="button-leftpart-primary">
                                Book en tid
                            </span>
                            <span class="button-rightpart-primary">
                                <iconify-icon class="button-content-right" icon="material-symbols:arrow-right-alt-rounded"></iconify-icon>
                            </span>
                        </button>
                    </form>
                </div>
                <div class="user_profile-flex-gap"></div>
                <!--- UPDATE PROFILE --->
                <div class="user_section user_profile_flex-item">                  
                    <h2>Rediger bruger</h2>
                    <form method="post" action="../backend/backend_user_profile.php" enctype="multipart/form-data" class="user_form">
                        <input class="user_section-input" value="<?php echo $_SESSION['user']->firstName; ?>" placeholder="Fornavn" type="text" name="firstName" required></input><br><br>
                        <input class="user_section-input" value="<?php echo $_SESSION['user']->lastName; ?>" placeholder="Efternavn" type="text" name="lastName" required></input><br><br>
                        <input class="user_section-input" value="<?php echo $_SESSION['user']->userPhone; ?>" placeholder="Telefonnr." type="number" name="userPhone" required></input><br><br>                
                        <div class="btn-center">
                            <button class="primary-btn" type="submit">
                                <span class="button-leftpart-primary">
                                    Bekræft
                                </span>
                                <span class="button-rightpart-primary">
                                    <iconify-icon class="button-content-right" icon="material-symbols:arrow-right-alt-rounded"></iconify-icon>
                                </span>
                            </button>
                        </div>
                    </form>
                    <!--- DELETE PROFILE --->
                    <h5>Ønsker du at slette din bruger?</h5>
                    <div class="secondary-whitespace-horizontal"></div>
                    <form action="#" class="btn-center">
                        <button class="secondary-btn">
                            <span class="button-leftpart-secondary">
                                Slet bruger
                            </span>
                            <span class="button-rightpart-secondary">
                                <iconify-icon class="button-content-right" icon="material-symbols:arrow-right-alt-rounded"></iconify-icon>
                            </span>
                        </button>
                    </form>
                </div>
            </div>
            <div class="primary-whitespace-horizontal"></div>
        </div>
    </main>
    <footer>
        <?php include_once("../partials/footer.php"); ?>
    </footer>
</body>
</html>
<!--- LINK TIL IKONER I FOOTER --->
<script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>