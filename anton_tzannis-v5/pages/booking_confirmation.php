<?php 
    include("../partials/head.php"); 
    include '../classes/Calendar.php';
?>
<!DOCTYPE html>
<html lang="da">
    <head>
        <title>Anton Tzannis | Bekræft booking</title>
    </head>
    <body>
        <header>
            <?php include_once("../partials/header.php"); ?>
        </header>
        <main>
            <div class="page"> 
            <!--- USER SESSION BTN --->
            <?php include_once("../partials/user_session_btn.php"); ?>
            <h1 class="goldtext text-padding">Bekræft booking</h1>
            <!--- CALENDAR SECTION --->
            <div class="user_section">
                <h2>Du har valgt</h2>
                <div class="user_form conf-table">
                    <table>
                        <tr class="tableRowFlex">
                            <td>Dato</td>
                            <td>Tidspunkt</td> 
                            <td>Behandling<br><br></td>
                            <td>Pris</td>
                        </tr>
                    </table>
                    <table>
                        <tr class="prices tableRowFlex">
                            <td>XX/XX/XXXX</td>
                            <td>Kl. XX.XX</td>
                            <td>XXXX (XX min)<br><br></td>
                            <td>XXXX,-</td>
                        </tr>
                    </table>
                </div>
                <h5>Måtte du blive forhindret i at møde op, så skal der meldes afbud senest 24 timer før behandlingen, ellers vil der blive opkrævet 50% af behandlingens pris.</h5>
            </div>
            <div class="primary-whitespace-horizontal"></div>
            <!--- BACK BTN --->
            <div class="btn-center flex-center">
                <form action="../pages/calendar.php">
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
                <!--- "CONFIRM" BTN --->
                <form action="../pages/booking_confirmation.php">
                    <button class="primary-btn">
                        <span class="button-leftpart-primary">
                            Bekræft
                        </span>
                        <span class="button-rightpart-primary">
                            <iconify-icon class="button-content-right" icon="material-symbols:arrow-right-alt-rounded"></iconify-icon>
                        </span>
                    </button>
                </form>
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