/* --------------------------------- MENU -------------------------------- */
// MENU - DESKTOP
$(document).ready(function () {
  $(".open_menu").click(function () {
    $(".sub_nav").slideToggle();
  });
});

// MENU - MOBILE
function onClickMenu() {
  document.getElementById("menu").classList.toggle("change");

  document.querySelector(".nav_list").classList.toggle("change");
}

// SET ACTIVE MENU ITEM TO COLOR RED
for (var i = 0; i < document.links.length; i++) {
  if (document.links[i].href == document.URL) {
    document.links[i].className = "active";
  }
}

/* -------------------------- INDEX CTA SECTION -------------------------- */
// FACEBOOK
document.getElementById("cta-facebook-section").addEventListener("mouseover", function () {
  (document.getElementById("cta-facebook-btn").style.height = "250"),
    (document.getElementById("cta-facebook-info").style.display = "block"),
    (document.getElementById("cta-facebook-info-btn").style.display = "block");
});
document.getElementById("cta-facebook-section").addEventListener("mouseout", function () {
  (document.getElementById("cta-facebook-btn").style.height = "50"),
    (document.getElementById("cta-facebook-info").style.display = "none"),
    (document.getElementById("cta-facebook-info-btn").style.display = "none");
});

// PRODUCTS
document.getElementById("cta-products-section").addEventListener("mouseover", function () {
  (document.getElementById("cta-products-btn").style.height = "250"),
    (document.getElementById("cta-products-info").style.display = "block"),
    (document.getElementById("cta-products-info-btn").style.display = "block");
});
document.getElementById("cta-products-section").addEventListener("mouseout", function () {
  (document.getElementById("cta-products-btn").style.height = "50"),
    (document.getElementById("cta-products-info").style.display = "none"),
    (document.getElementById("cta-products-info-btn").style.display = "none");
});

// OFFER
document.getElementById("cta-offer-section").addEventListener("mouseover", function () {
  (document.getElementById("cta-offer-btn").style.height = "250"),
    (document.getElementById("cta-offer-info").style.display = "block"),
    (document.getElementById("cta-offer-info-btn").style.display = "block");
});
document.getElementById("cta-offer-section").addEventListener("mouseout", function () {
  (document.getElementById("cta-offer-btn").style.height = "50"),
    (document.getElementById("cta-offer-info").style.display = "none"),
    (document.getElementById("cta-offer-info-btn").style.display = "none");
});

/* ------------------------------- BOOKING ------------------------------- */
// SHOW/HIDE BOKS
function displayFunction(id) {
  var displayBox = document.getElementById(id);
  if (displayBox.style.display === "block") {
    displayBox.style.display = "none";
  } else {
    displayBox.style.display = "block";
  }
}

// ROTATING ARROW
function arrowFunction(id) {
  var arrow = document.getElementById(id);
  if (arrow.style.transform === "rotate(90deg)") {
    arrow.style.transform = "rotate(0deg)";
  } else {
    arrow.style.transform = "rotate(90deg)";
  }
}
