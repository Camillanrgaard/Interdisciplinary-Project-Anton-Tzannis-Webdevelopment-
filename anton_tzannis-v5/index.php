<?php include("partials/head.php"); ?>
<!DOCTYPE html>
<html lang="da">
<head>
    <title>Anton Tzannis | Bedste Frisør i Aarhus</title>
</head>
<body>
    <header>
         <?php include_once("partials/header.php"); ?>
    </header>
    <main>
    <!--- BIG HERO --->
        <div class="hero">
            <div class="hero_left"></div>
            <div class="hero_right"></div>
            <div class="hero-text" class="center">
                <h1 class="hero-h1">Anton Tzannis | Bedste frisør i Aarhus</h1>
                <div class="secondary-whitespace-horizontal"></div>
                <form action="../pages/booking.php" class="hero-btn">
                    <button class="primary-btn">
                        <span class="button-leftpart-primary">
                            Book tid online
                        </span>
                        <span class="button-rightpart-primary">
                            <iconify-icon class="button-content-right" icon="material-symbols:arrow-right-alt-rounded"></iconify-icon>
                        </span>
                    </button>
                </form>
            </div>
        </div>
        <!--- SALON SECTION --->
        <div class="page">
            <div class="primary-whitespace-horizontal"></div>
            <div class="flex">
                <div class="salon-text">
                    <h2 class="text-padding-small">Frisøren med det røde gulv</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
                <img class="salon-img" src="../img/salon-floor-anton-tzannis.webp" alt="salon anton tzannis red floor">
            </div>
            <div class="primary-whitespace-horizontal"></div>
        </div>
        <!--- OPENING HOURS SECTION --->
        <div class="opening-hours-section opening-hours-section-left">
            <div class="opening-hours-section opening-hours-section-right">
                <div class="opening-hours-section-inside">   
                    <h2>Åbningstider</h2>
                    <div class="opening-hours-container">
                        <div class="monday">
                            <p class="opening-hours-days">Mandag</p>
                            <p>09.00 - 17.30</p>
                        </div>                            
                        <div class="tuesday">
                            <p class="opening-hours-days">Tirsdag</p>
                            <p>12.00 - 17.30</p>
                        </div>
                        <div class="wednesday">
                            <p class="opening-hours-days">Onsdag</p>
                            <p>09.00 - 17.30</p>
                        </div>
                        <div class="thursday">
                            <p class="opening-hours-days">Torsdag</p>
                            <p>12.00 - 18.00</p>
                        </div>
                        <div class="friday">
                            <p class="opening-hours-days">Fredag</p>
                            <p>09.00 - 18.00</p>
                        </div>
                        <div class="saturday">
                            <p class="opening-hours-days">Lørdag</p>
                            <p>08.00 - 13.00</p>
                        </div>
                        <div class="sunday">
                            <p class="opening-hours-days">Søndag</p>
                            <p>Lukket</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--- CTA BTN SECTION --->
        <div class="page">
            <div class="primary-whitespace-horizontal"></div>
            <div class="flex  cta-flex">
                <!--- FACEBOOK CTA --->
                <div class="cta-section cta-section-products cta-section-facebook" id="cta-facebook-section"> 
                    <div class="cta-section-btn" id="cta-facebook-btn">
                        <h4 class="product-header uppercase">Følg os på Facebook</h4>
                        <p id="cta-facebook-info"></p>                          
                        <div id="cta-facebook-info-btn">
                            <form action="https://www.facebook.com/AntonTzannis" target="_blank">
                                <button class="primary-btn">
                                    <span class="button-leftpart-primary">
                                        Gå til Facebook
                                    </span>
                                    <span class="button-rightpart-primary">
                                        <iconify-icon class="button-content-right" icon="material-symbols:arrow-right-alt-rounded"></iconify-icon>
                                    </span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="primary-whitespace-horizontal"></div>
                <!--- PRODUCTS CTA --->
                <div class="cta-section cta-section-products cta-section-seeProducts" id="cta-products-section"> 
                    <div class="cta-section-btn" id="cta-products-btn">
                        <h4 class="product-header uppercase">Se produkter</h4>
                        <p id="cta-products-info"></p>                          
                        <div id="cta-products-info-btn">
                            <form action="../pages/products.php">
                                <button class="primary-btn">
                                    <span class="button-leftpart-primary">
                                        Læs mere
                                    </span>
                                    <span class="button-rightpart-primary">
                                        <iconify-icon class="button-content-right" icon="material-symbols:arrow-right-alt-rounded"></iconify-icon>
                                    </span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="primary-whitespace-horizontal"></div>
                <!--- OFFER CTA --->
                <div class="cta-section cta-section-products cta-section-offer" id="cta-offer-section"> 
                    <div class="cta-section-btn" id="cta-offer-btn">
                        <h4 class="product-header uppercase">Vi giver studierabat</h4>
                        <p id="cta-offer-info"></p>                          
                        <div id="cta-offer-info-btn">
                            <form action="../pages/pricing.php">
                                <button class="primary-btn">
                                    <span class="button-leftpart-primary">
                                        Læs mere
                                    </span>
                                    <span class="button-rightpart-primary">
                                        <iconify-icon class="button-content-right" icon="material-symbols:arrow-right-alt-rounded"></iconify-icon>
                                    </span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="primary-whitespace-horizontal"></div>
        </div>
    </main>
    <!--- FOOTER --->
    <footer>
        <?php include_once("partials/footer.php"); ?>
    </footer>
</body>
</html>
<!--- LINK TIL IKONER I FOOTER --->
<script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>