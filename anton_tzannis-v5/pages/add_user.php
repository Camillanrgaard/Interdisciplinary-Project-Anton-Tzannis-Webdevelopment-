<?php include("../partials/head.php"); ?>
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
            <h1 class="goldtext text-padding">Book tid</h1>
            <div class="user_section">
                <!--- ADD USER --->
                <h2>Opret bruger</h2>
                <form method="post" action="../backend/backend_add_user.php" enctype="multipart/form-data" class="user_form">
                    <input class="user_section-input" value="" placeholder="Email" type="text" name="userMail" required></input><br><br>
                    <input class="user_section-input" value="" placeholder="Adgangskode" type="password" name="userPassword" required></input><br><br>
                    <input class="user_section-input" value="" placeholder="Fornavn" type="text" name="firstName" required></input><br><br>
                    <input class="user_section-input" value="" placeholder="Efternavn" type="text" name="lastName" required></input><br><br>
                    <input class="user_section-input" value="" placeholder="Telefonnr." type="number" name="userPhone" required></input><br><br>
                    <button class="primary-btn btn-center-margin" type="submit">
                        <span class="button-leftpart-primary">
                            Opret bruger
                        </span>
                        <span class="button-rightpart-primary">
                            <iconify-icon class="button-content-right" icon="material-symbols:arrow-right-alt-rounded"></iconify-icon>
                        </span>
                    </button>
                </form>
                <!--- DATA REGULATION --->
                <h5>Ved at oprette dig som bruger hos Anton Tzannis bekræfter du automatisk vores <a target="_blank" href="dataforordning.php">dataforordning</a></h5>
                <div class="secondary-whitespace-horizontal"></div>
                <!--- GO BACK TO LOGIN --->
                <form action="user_login.php" class="btn-center">
                    <button class="secondary-btn back-btn-profile">
                        <span class="leftpart-button-back">
                            <iconify-icon icon="material-symbols:arrow-right-alt-rounded" flip="horizontal"></iconify-icon>
                        </span>
                        <span class="rightpart-button-back">
                            Tilbage
                        </span>
                    </button>
                </form>
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