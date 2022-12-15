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
                <!--- USER LOGIN ---> 
                <h2>Log ind</h2>
                <div class="secondary-whitespace-horizontal"></div>
                <p>Log ind for at bestille en frisørtid</p>
                <form method="post" action="../backend/backend_user_login.php" class="user_form">
                    <input class="user_section-input" value="" placeholder="Email" type="text" name="userMail" required></input><br><br>
                    <input class="user_section-input" value="" placeholder="Adgangskode" type="password" name="userPassword" required></input><br><br>
                    <div class="btn-center">
                        <button class="primary-btn btn-center-margin" type="submit">
                            <span class="button-leftpart-primary">
                                Log ind
                            </span>
                            <span class="button-rightpart-primary">
                                <iconify-icon class="button-content-right" icon="material-symbols:arrow-right-alt-rounded"></iconify-icon>
                            </span>
                        </button>
                    </div>
                </form>
                <!--- ADD USER --->
                <p>Har du ikke en bruger?</p>
                <div class="secondary-whitespace-horizontal"></div>
                <form action="add_user.php" class="btn-center">
                    <button class="secondary-btn">
                        <span class="button-leftpart-secondary">
                            Opret bruger
                        </span>
                        <span class="button-rightpart-secondary">
                            <iconify-icon class="button-content-right" icon="material-symbols:arrow-right-alt-rounded"></iconify-icon>
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