<?php include("../partials/head.php"); ?>
<!DOCTYPE html>
<html lang="da">
<head>
    <title>Anton Tzannis | Kontakt</title>
</head>
<body>
    <header>
         <?php include_once("../partials/header.php"); ?>
    </header>
    <main>
        <div class="hero-contact">
            <div class="hero_left-contact">
                <iframe class="adress-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3142.1051971419192!2d10.205686892099356!3d56.16049524830549!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x464c3f9664d62dd9%3A0x947605e35fcfb27b!2sN%C3%B8rregade%2053%2C%208000%20Aarhus!5e0!3m2!1sda!2sdk!4v1669634132310!5m2!1sda!2sdk" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="hero_right-contact"></div>
            <div class="hero-text-contact-section">
                <div class="icons-contact">
                    <iconify-icon class="icon-contact" icon="material-symbols:phone-enabled" flip="horizontal"></iconify-icon>
                    <h2>Kontakt</h2>
                </div>
                    <a class="hero-text-contact" href="tel:+4586188277">+45 86188277</a>
                    <div class="secondary-whitespace-horizontal"></div>
                    <div class="icons-contact">
                        <iconify-icon class="icon-contact" icon="mdi:map-marker"></iconify-icon>
                        <h2>Adresse</h2>
                    </div>
                <a class="hero-text-contact" target="_blank" href="https://goo.gl/maps/ZbdRa6aoySkK1iWF9">Nørregade 53 <br>8000 Aarhus C</a><br>
                <img class="contact-logo" src="../img/antontzannis_secondary-logo.svg" alt="anton tzannis logo">
            </div>
        </div>
    </main>
    <footer>
        <?php include_once("../partials/footer.php"); ?>
    </footer>
</body>
</html>
<!--- LINK TIL IKONER I FOOTER --->
<script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>