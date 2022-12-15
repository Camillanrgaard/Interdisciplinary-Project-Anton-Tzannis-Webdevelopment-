<?php 
    session_start(); 
    /* Redirect til forsiden, hvis ikke der er logget ind */
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
            <!-- USER SESSION BTN -->
            <?php include_once("../partials/user_session_btn.php"); ?>
            <h1 class="goldtext text-padding">Vælg behandling</h1>
            <!--- TREATMENTS SELECTION --->
            <!--- HAIRCUT --->
            <section class="booking-form" id="bt1" onclick="displayFunction('div1');arrowFunction('arrow1')">
                <div class="booking-treatment-heading">
                    <div class="icon-header">
                        <img class="icon-header-icon" src="../img/klip.svg" alt="haircut">
                        <h2>Klip</h2>
                    </div>
                    <iconify-icon class="icon open-close-arrow" id="arrow1" icon="material-symbols:arrow-back-ios-rounded" flip="horizontal"></iconify-icon>
                </div>
            </section> 
            <div id="div1" class="seeMoreBox">
                <label class="seeMoreBox-flex"> 
                    <input class="booking-checkbox" name="female" type="checkbox">       
                    <span class="booking-flex" for="female">
                        <p class="booking-type">Dame</p>
                        <p class="booking-time">60 min.</p>
                        <p class="booking-price">675,-</p>
                    </span>
                </label> 
                <label class="seeMoreBox-flex">  
                    <input class="booking-checkbox" name="male" type="checkbox">    
                    <span class="booking-flex" for="male">
                        <p class="booking-type">Herre</p>
                        <p class="booking-time">45 min.</p>
                        <p class="booking-price">620,-</p>
                    </span>
                </label>
                <label class="seeMoreBox-flex">   
                    <input class="booking-checkbox" name="child" type="checkbox"> 
                    <span class="booking-flex" for="child">   
                        <p class="booking-type">Barn 0-10 år</p>
                        <p class="booking-time">30 min.</p>                        
                        <p class="booking-price">365,-</p>
                    </span>
                </label>
                <label class="seeMoreBox-flex">   
                    <input class="booking-checkbox" name="teen" type="checkbox">    
                    <span class="booking-flex" for="teen">
                        <p class="booking-type">Barn 11-14 år</p>
                        <p class="booking-time">30 min.</p>
                        <p class="booking-price">500,-</p>
                    </span>
                </label>
                <label class="seeMoreBox-flex">   
                    <input class="booking-checkbox" name="study" type="checkbox">    
                    <span class="booking-flex" for="study">
                        <p class="booking-type">Studierabat på klip</p>
                        <p class="booking-time">Kræver studiekort</p>
                        <p class="booking-price">-10%</p>
                    </span>
                </label>
            </div>
            <div class="primary-whitespace-horizontal"></div>
            <!--- BROWS --->
            <section class="booking-form" id="bt2" onclick="displayFunction('div2');arrowFunction('arrow2')">
                <div class="booking-treatment-heading">
                    <div class="icon-header">
                        <img class="icon-header-icon" src="../img/bryn_og_vipper.svg" alt="haircut">
                        <h2>Bryn & vipper</h2>
                    </div>
                    <iconify-icon class="icon open-close-arrow" id="arrow2" icon="material-symbols:arrow-back-ios-rounded" flip="horizontal"></iconify-icon>
                </div>
            </section>
            <div id="div2" class="seeMoreBox">
                <label class="seeMoreBox-flex">   
                    <input class="booking-checkbox" name="female" type="checkbox">    
                    <span class="booking-flex" for="female">
                        <p class="booking-type">Bryn</p>
                        <p class="booking-time">15 min.</p>
                        <p class="booking-price">145,-</p>
                    </span>
                </label>
                <label class="seeMoreBox-flex">  
                    <input class="booking-checkbox" name="male" type="checkbox">    
                    <span class="booking-flex" for="male">
                        <p class="booking-type">Vipper</p>
                        <p class="booking-time">15 min.</p>
                        <p class="booking-price">190,-</p>
                    </span>
                </label>
                <label class="seeMoreBox-flex">   
                    <input class="booking-checkbox" name="child" type="checkbox"> 
                    <span class="booking-flex" for="child">   
                        <p class="booking-type">Sammen (bryn og vipper)</p>
                        <p class="booking-time">30 min.</p>                        
                        <p class="booking-price">290,-</p>
                    </span>
                </label>
                <label class="seeMoreBox-flex">   
                    <input class="booking-checkbox" name="teen" type="checkbox">    
                    <span class="booking-flex" for="teen">
                        <p class="booking-type">Retning af bryn</p>
                        <p class="booking-time">10 min.</p>
                        <p class="booking-price">fra 105,-</p>
                    </span>
                </label>
            </div>
            <div class="primary-whitespace-horizontal"></div>
            <!--- PERMANENT --->
            <section class="booking-form" id="bt3" onclick="displayFunction('div3');arrowFunction('arrow3')">
                <div class="booking-treatment-heading">
                    <div class="icon-header">
                        <img class="icon-header-icon" src="../img/permanent.svg" alt="haircut">
                        <h2>Permanent</h2>
                    </div>
                    <iconify-icon class="icon open-close-arrow" id="arrow3" icon="material-symbols:arrow-back-ios-rounded" flip="horizontal"></iconify-icon>
                </div>
            </section>
            <div id="div3" class="seeMoreBox">
                <label class="seeMoreBox-flex">   
                    <input class="booking-checkbox" name="solo" type="checkbox">    
                    <span class="booking-flex" for="solo">
                        <p class="booking-type">Solo</p>
                        <p class="booking-time">xx min.</p>
                        <p class="booking-price">1370,-</p>
                    </span>
                </label>
                <label class="seeMoreBox-flex">  
                    <input class="booking-checkbox" name="perm" type="checkbox">    
                    <span class="booking-flex" for="perm">
                        <p class="booking-type">Perm. inkl. klip og føn</p>
                        <p class="booking-time">xx min.</p>
                        <p class="booking-price">2045,-</p>
                    </span>
                </label>
                <label class="seeMoreBox-flex">   
                    <input class="booking-checkbox" name="perm-long" type="checkbox"> 
                    <span class="booking-flex" for="perm-long">   
                        <p class="booking-type">Perm. inkl. klip og føn (langt hår)</p>
                        <p class="booking-time">xx min.</p>                        
                        <p class="booking-price">2115,-</p>
                    </span>
                </label>
                <label class="seeMoreBox-flex">   
                    <input class="booking-checkbox" name="perm-spole" type="checkbox">    
                    <span class="booking-flex" for="perm-spole">
                        <p class="booking-type">Perm. pr. spole</p>
                        <p class="booking-time">xx min.</p>
                        <p class="booking-price">95,-</p>
                    </span>
                </label>
                <label class="seeMoreBox-flex">   
                    <input class="booking-checkbox" name="spiral" type="checkbox">    
                    <span class="booking-flex" for="spiral">
                        <p class="booking-type">Spiral</p>
                        <p class="booking-time">xx min.</p>
                        <p class="booking-price">3090,-</p>
                    </span>
                </label>
            </div>
            <div class="primary-whitespace-horizontal"></div>
            <!--- OTHER TREATMENTS --->
            <section class="booking-form" id="bt4" onclick="displayFunction('div4');arrowFunction('arrow4')">
                <div class="booking-treatment-heading">
                    <div class="icon-header">
                        <img class="icon-header-icon" src="../img/anden_behandling.svg" alt="otherTreatment">
                        <h2>Anden behandling</h2>
                    </div>
                    <iconify-icon class="icon open-close-arrow" id="arrow4" icon="material-symbols:arrow-back-ios-rounded" flip="horizontal"></iconify-icon>
                </div>
            </section>
            <div id="div4" class="seeMoreBox">
                <label class="seeMoreBox-flex">   
                    <input class="booking-checkbox" name="wash" type="checkbox">    
                    <span class="booking-flex" for="wash">
                        <p class="booking-type">Alm. vask</p>
                        <p class="booking-time">15 min.</p>
                        <p class="booking-price">95,-</p>
                    </span>
                </label>
                <label class="seeMoreBox-flex">  
                    <input class="booking-checkbox" name="hairstyleLong" type="checkbox">    
                    <span class="booking-flex" for="hairstyleLong">
                        <p class="booking-type">Opsætning langt hår</p>
                        <p class="booking-time">60 min.</p>
                        <p class="booking-price">fra 1365,-</p>
                    </span>
                </label>
                <label class="seeMoreBox-flex">   
                    <input class="booking-checkbox" name="hairstyleShort" type="checkbox"> 
                    <span class="booking-flex" for="hairstyleShort">   
                        <p class="booking-type">Opsætning kort hår</p>
                        <p class="booking-time">45 min.</p>                        
                        <p class="booking-price">fra 855,-</p>
                    </span>
                </label>
                <label class="seeMoreBox-flex">   
                    <input class="booking-checkbox" name="olaplexStandAlone" type="checkbox">    
                    <span class="booking-flex" for="olaplexStandAlone">
                        <p class="booking-type">Olaplex (stand alone)</p>
                        <p class="booking-time">-</p>
                        <p class="booking-price">600,-</p>
                    </span>
                </label>
                <label class="seeMoreBox-flex">   
                    <input class="booking-checkbox" name="olaplexCut" type="checkbox">    
                    <span class="booking-flex" for="olaplexCut">
                        <p class="booking-type">Olaplex (ved klip)</p>
                        <p class="booking-time">-</p>
                        <p class="booking-price">490,-</p>
                    </span>
                </label>
                <label class="seeMoreBox-flex">   
                    <input class="booking-checkbox" name="olaplexColor" type="checkbox">    
                    <span class="booking-flex" for="olaplexColor">
                        <p class="booking-type">Olaplex (ved farve)</p>
                        <p class="booking-time">-</p>
                        <p class="booking-price">365,-</p>
                    </span>
                </label>
                <label class="seeMoreBox-flex">   
                    <input class="booking-checkbox" name="cure" type="checkbox">    
                    <span class="booking-flex" for="cure">
                        <p class="booking-type">Kur</p>
                        <p class="booking-time">-</p>
                        <p class="booking-price">155,-</p>
                    </span>
                </label>
            </div>
            <div class="primary-whitespace-horizontal"></div>
            <!--- COLOR --->
            <section class="booking-form" id="bt5" onclick="displayFunction('div5');arrowFunction('arrow5')">
                <div class="booking-treatment-heading">
                    <div class="icon-header">
                        <img class="icon-header-icon" src="../img/farve.svg" alt="otherTreatment">
                        <h2>Farve</h2>
                    </div>
                    <iconify-icon class="icon open-close-arrow" id="arrow5" icon="material-symbols:arrow-back-ios-rounded" flip="horizontal"></iconify-icon>
                </div>
            </section>
            <div id="div5" class="seeMoreBox">
                <label class="seeMoreBox-flex">   
                    <input class="booking-checkbox" name="female-1-pg" type="checkbox">    
                    <span class="booking-flex" for="female-1-pg">
                        <p class="booking-type">Dame afrens 1 pk. i forb. m. farve</p>
                        <p class="booking-time">xx min.</p>
                        <p class="booking-price">430,-</p>
                    </span>
                </label>
                <label class="seeMoreBox-flex">  
                    <input class="booking-checkbox" name="female-2-pg" type="checkbox">    
                    <span class="booking-flex" for="female-2-pg">
                        <p class="booking-type">Dame afrens 2 pk. (langt/tykt) i forb. m. dame farve</p>
                        <p class="booking-time">xx min.</p>
                        <p class="booking-price">810,-</p>
                    </span>
                </label>
                <label class="seeMoreBox-flex">   
                    <input class="booking-checkbox" name="female-color-wash" type="checkbox"> 
                    <span class="booking-flex" for="female-color-wash">   
                        <p class="booking-type">Dame farve / skyllefarve</p>
                        <p class="booking-time">xx min.</p>                        
                        <p class="booking-price">360,-</p>
                    </span>
                </label>
                <label class="seeMoreBox-flex">   
                    <input class="booking-checkbox" name="female-color-and-reflex" type="checkbox">    
                    <span class="booking-flex" for="female-color-and-reflex">
                        <p class="booking-type">Tillæg dame farve + reflex pr. stk.</p>
                        <p class="booking-time">xx min.</p>
                        <p class="booking-price">120,-</p>
                    </span>
                </label>
                <label class="seeMoreBox-flex">   
                    <input class="booking-checkbox" name="female-long-hair" type="checkbox">    
                    <span class="booking-flex" for="female-long-hair">
                        <p class="booking-type">Dame farve tillæg langt hår</p>
                        <p class="booking-time">xx min.</p>
                        <p class="booking-price">165,-</p>
                    </span>
                </label>
                <label class="seeMoreBox-flex">   
                    <input class="booking-checkbox" name="male-color" type="checkbox">    
                    <span class="booking-flex" for="male-color">
                        <p class="booking-type">Herre farve</p>
                        <p class="booking-time">xx min.</p>
                        <p class="booking-price">475,-</p>
                    </span>
                </label>
                <label class="seeMoreBox-flex">   
                    <input class="booking-checkbox" name="male-color-hat" type="checkbox">    
                    <span class="booking-flex" for="male-color-hat">
                        <p class="booking-type">Herre reflex m. hætte</p>
                        <p class="booking-time">xx min.</p>
                        <p class="booking-price">565,-</p>
                    </span>
                </label>
                <label class="seeMoreBox-flex">   
                    <input class="booking-checkbox" name="female-reflex-short" type="checkbox">    
                    <span class="booking-flex" for="female-reflex-short">
                        <p class="booking-type">Dame reflex m. staniol, kort</p>
                        <p class="booking-time">xx min.</p>
                        <p class="booking-price">840,-</p>
                    </span>
                </label>
                <label class="seeMoreBox-flex">   
                    <input class="booking-checkbox" name="female-reflex-medium" type="checkbox">    
                    <span class="booking-flex" for="female-reflex-medium">
                        <p class="booking-type">Dame reflex m. staniol, mellem</p>
                        <p class="booking-time">xx min.</p>
                        <p class="booking-price">965,-</p>
                    </span>
                </label>
                <label class="seeMoreBox-flex">   
                    <input class="booking-checkbox" name="female-reflex-long" type="checkbox">    
                    <span class="booking-flex" for="female-reflex-long">
                        <p class="booking-type">Dame reflex m. staniol, langt</p>
                        <p class="booking-time">xx min.</p>
                        <p class="booking-price">1120,-</p>
                    </span>
                </label>
                <label class="seeMoreBox-flex">   
                    <input class="booking-checkbox" name="female-reflex-hat" type="checkbox">    
                    <span class="booking-flex" for="female-reflex-hat">
                        <p class="booking-type">Dame reflex m. hætte</p>
                        <p class="booking-time">xx min.</p>
                        <p class="booking-price">685,-</p>
                    </span>
                </label>
                <label class="seeMoreBox-flex">   
                    <input class="booking-checkbox" name="female-reflex-top" type="checkbox">    
                    <span class="booking-flex" for="female-reflex-top">
                        <p class="booking-type">Dame reflex m. top</p>
                        <p class="booking-time">xx min.</p>
                        <p class="booking-price">595,-</p>
                    </span>
                </label>
                <label class="seeMoreBox-flex">   
                    <input class="booking-checkbox" name="female-reflex-stk" type="checkbox">    
                    <span class="booking-flex" for="female-reflex-stk">
                        <p class="booking-type">Dame reflexer pr. stk.</p>
                        <p class="booking-time">xx min.</p>
                        <p class="booking-price">155,-</p>
                    </span>
                </label>
            </div>
            <div class="primary-whitespace-horizontal"></div>
            <!--- "NEXT" BTN --->
            <form action="../pages/calendar.php" class="btn-center">
                <button class="primary-btn">
                    <span class="button-leftpart-primary">
                        Videre
                    </span>
                    <span class="button-rightpart-primary">
                        <iconify-icon class="button-content-right" icon="material-symbols:arrow-right-alt-rounded"></iconify-icon>
                    </span>
                </button>
            </form>
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
