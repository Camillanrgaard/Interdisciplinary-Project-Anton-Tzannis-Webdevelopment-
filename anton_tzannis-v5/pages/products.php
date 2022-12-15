<?php include("../partials/head.php"); ?>
<!DOCTYPE html>
<html lang="da">
<head>
    <title>Anton Tzannis | Produkter</title>
</head>
<body>
    <header>
         <?php include_once("../partials/header.php"); ?>
    </header>
    <main>
        <h1 class="goldtext text-padding">Produkter</h1>
        <p class="center">Nedenfor ser du, hvilke produkter Anton Tzannis forhandler i butikken.</p>
        <div class="primary-whitespace-horizontal"></div>
        <div class="page">
            <div class="flex">
                <!--- AMERICAN CREW --->
                <div class="cta-section cta-section-products product-americancrew" id="americancrew-section"> 
                    <div class="cta-section-btn" id="americancrew-btn">
                        <h4 class="product-header uppercase">American Crew</h4>
                        <p id="americancrew-info">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>                          
                        <div id="americancrew-info-btn">   
                            <form target="_blank" action="https://www.antontzannis.dk/antontzannis/assets/crew.pdf">
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
                <!--- NINE YARDS --->
                <div class="cta-section cta-section-products product-nineyards" id="nineyards-section"> 
                    <div class="cta-section-btn" id="nineyards-btn">
                        <h4 class="product-header uppercase">Nine Yards</h4>
                        <p id="nineyards-info">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>                          
                        <div id="nineyards-info-btn">
                            <form target="_blank" action="https://www.antontzannis.dk/antontzannis/assets/NineYards_SalonBrochure.pdf">
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
            <div class="flex">
                <!--- EKSPERIENCE --->
                <div class="cta-section cta-section-products product-eksperience" id="eksperience-section"> 
                    <div class="cta-section-btn" id="eksperience-btn">
                        <h4 class="product-header uppercase">Eksperience</h4>
                        <p id="eksperience-info">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>                          
                        <div id="eksperience-info-btn">    
                            <form target="_blank" action="https://www.antontzannis.dk/antontzannis/assets/EKS-CONSUMER-BROSCHUR_DK-tryckny.pdf">
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
                <!--- STYLE MASTERS --->
                <div class="cta-section cta-section-products product-stylemasters" id="stylemasters-section"> 
                    <div class="cta-section-btn" id="stylemasters-btn">
                        <h4 class="product-header uppercase">Style Masters</h4>
                        <p id="stylemasters-info">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>                          
                        <div id="stylemasters-info-btn">
                            <form target="_blank" action="https://www.antontzannis.dk/antontzannis/assets/SM-Brochure-DK1.pdf">
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
        </div>
    </main>
    <footer>
        <?php include_once("../partials/footer.php"); ?>
    </footer>
</body>
</html>
<!--- LINK TIL IKONER I FOOTER --->
<script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>