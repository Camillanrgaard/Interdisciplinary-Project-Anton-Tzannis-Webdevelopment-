<?php 
    session_start();
    include("../partials/head.php"); 
    include '../classes/Calendar.php';

    // CHANGE MONTH
    // CHECK IF THE SESSION CONTAINS A monthOffset WITH VALUE OF $monthOffset
    $monthOffset = isset($_SESSION['monthOffset']) ? $_SESSION['monthOffset'] : 0;
    // SAVE TODAY'S DATE AS A PARAMETER $today
    $today = date("Y-m-d");

    // IF TODAY-BTN IS CLICKED GO TO $today
    $action = isset($_GET['action']) ? $_GET['action'] : null;
    if($action == "today"){
        $monthOffset = 0;
    }
    // IF PREVIOUS-BTN IS CLICKED SET $monthOffset TO --
    if($action == "prevMonth"){
        $monthOffset--;
    }
    // IF NEXT-BTN IS CLICKED SET $monthOffset TO ++
    if($action == "nextMonth"){
        $monthOffset++;
    }

    // SAVE THE CHOOSEN MONTH TO THE SESSION
    $_SESSION['monthOffset'] = $monthOffset;
    // SAVE THE $monthOffset AS A PARAMETER $dateShow 
    $dateShow = date("Y-m-d", strtotime($today . " " . $monthOffset . " months"));
    // SEND CHOOSEN MONTH TO THE CALNDER BACKEND WITH THE PARAMETER $dateShow
    $calendar = new Calendar($dateShow); 
?>
<!DOCTYPE html>
<html lang="da">
    <head>
        <title>Anton Tzannis | Kalender</title>
    </head>
    <body>
        <header>
            <?php include_once("../partials/header.php"); ?>
        </header>
        <main>
            <div class="page">
                <!-- USER SESSION BTN -->
                <?php include_once("../partials/user_session_btn.php"); ?>
                <h1 class="goldtext text-padding">Vælg dato og tid</h1>
                <!--- CALENDAR SECTION --->
                <div class="content home">
                    <div class="calendar-arrows">
                        <a href="?action=prevMonth"><iconify-icon class="icon prev-next-month-arrow " icon="material-symbols:arrow-back-ios-rounded"></iconify-icon></a>
                        <a class="todays-date" href="?action=today">
                            <button class="secondary-btn">
                                <span class="button-leftpart-secondary">
                                    Tilbage til i dag
                                </span>
                                <span class="button-rightpart-secondary">
                                    <iconify-icon class="button-content-right" icon="material-symbols:arrow-right-alt-rounded"></iconify-icon>
                                </span>
                            </button>
                        </a> 
                        <a href="?action=nextMonth"><iconify-icon class="icon prev-next-month-arrow prev-next-month-arrow-right" icon="material-symbols:arrow-back-ios-rounded" flip="horizontal"></iconify-icon></a>
                    </div> 
                    <?=$calendar?>
                </div>
                <!--- AVALIBLE HOURS --->
                <div class="avalible-hours">
                    <h3>Ledige tider XX/XX/XXXX</h3>
                </div>
                <div class="primary-whitespace-horizontal"></div>
                <div class="btn-center flex-center">
                    <!--- BACK BTN --->
                    <form action="../pages/booking.php">
                        <button class="secondary-btn back-btn">
                            <span class="leftpart-button-back">
                                <iconify-icon icon="material-symbols:arrow-right-alt-rounded" flip="horizontal"></iconify-icon>
                            </span>
                            <span class="rightpart-button-back">
                                Tilbage
                            </span>
                        </button>
                    </form>
                    <div class="primary-whitespace-vertical"></div>
                    <!--- "NEXT" BTN --->
                    <form action="../pages/booking_confirmation.php">
                        <button class="primary-btn">
                            <span class="button-leftpart-primary">
                                Videre
                            </span>
                            <span class="button-rightpart-primary">
                                <iconify-icon class="button-content-right" icon="material-symbols:arrow-right-alt-rounded"></iconify-icon>
                            </span>
                        </button>
                    </form>
                </div>
            </div>
            <div class="primary-whitespace-horizontal"></div>
        </main>
        <footer>
            <?php include_once("../partials/footer.php"); ?>
        </footer>
    </body>
</html>
<!--- LINK TIL IKONER I FOOTER --->
<script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>