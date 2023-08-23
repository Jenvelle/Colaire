const formOpenBtn = document.querySelector("#form-open"),
  home = document.querySelector(".home"),
  formContainer = document.querySelector(".form_container"),
  formCloseBtn = document.querySelector(".form_close"),
  signupBtn = document.querySelector("#signup"),
  loginBtn = document.querySelector("#login"),
  pwShowHide = document.querySelectorAll(".pw_hide");

if(formOpenBtn){
  formOpenBtn.addEventListener("click", () => home.classList.add("show"));
  formCloseBtn.addEventListener("click", () => home.classList.remove("show"));
}



pwShowHide.forEach((icon) => {
  icon.addEventListener("click", () => {
    let getPwInput = icon.parentElement.querySelector("input");
    if (getPwInput.type === "password") {
      getPwInput.type = "text";
      icon.classList.replace("uil-eye-slash", "uil-eye");
    } else {
      getPwInput.type = "password";
      icon.classList.replace("uil-eye", "uil-eye-slash");
    }
  });
});

signupBtn.addEventListener("click", (e) => {
  e.preventDefault();
  formContainer.classList.add("active");
});
loginBtn.addEventListener("click", (e) => {
  e.preventDefault();
  formContainer.classList.remove("active");
});

'use strict';

// modal variables
const modal = document.querySelector('[data-modal]');
const modalCloseBtn = document.querySelector('[data-modal-close]');
const modalCloseOverlay = document.querySelector('[data-modal-overlay]');

// modal function
const modalCloseFunc = function () { modal.classList.add('closed') }

// modal eventListener
modalCloseOverlay.addEventListener('click', modalCloseFunc);
modalCloseBtn.addEventListener('click', modalCloseFunc);






// notification toast variables
const notificationToast = document.querySelector('[data-toast]');
const toastCloseBtn = document.querySelector('[data-toast-close]');

// notification toast eventListener
toastCloseBtn.addEventListener('click', function () {
  notificationToast.classList.add('closed');
});





// mobile menu variables
const mobileMenuOpenBtn = document.querySelectorAll('[data-mobile-menu-open-btn]');
const mobileMenu = document.querySelectorAll('[data-mobile-menu]');
const mobileMenuCloseBtn = document.querySelectorAll('[data-mobile-menu-close-btn]');
const overlay = document.querySelector('[data-overlay]');

for (let i = 0; i < mobileMenuOpenBtn.length; i++) {

  // mobile menu function
  const mobileMenuCloseFunc = function () {
    mobileMenu[i].classList.remove('active');
    overlay.classList.remove('active');
  }

  mobileMenuOpenBtn[i].addEventListener('click', function () {
    mobileMenu[i].classList.add('active');
    overlay.classList.add('active');
  });

  mobileMenuCloseBtn[i].addEventListener('click', mobileMenuCloseFunc);
  overlay.addEventListener('click', mobileMenuCloseFunc);

}


// accordion variables
const accordionBtn = document.querySelectorAll('[data-accordion-btn]');
const accordion = document.querySelectorAll('[data-accordion]');

for (let i = 0; i < accordionBtn.length; i++) {

  accordionBtn[i].addEventListener('click', function () {

    const clickedBtn = this.nextElementSibling.classList.contains('active');

    for (let i = 0; i < accordion.length; i++) {

      if (clickedBtn) break;

      if (accordion[i].classList.contains('active')) {

        accordion[i].classList.remove('active');
        accordionBtn[i].classList.remove('active');

      }

    }

    this.nextElementSibling.classList.toggle('active');
    this.classList.toggle('active');

  });

}
const profileButton = document.querySelector("#profile-button");
const userMenu = document.querySelector("#dropdown-user-menu");

// Function to toggle the user menu
function toggleUserMenu() {
  userMenu.classList.toggle("show-user-menu");
}

// Event listener for the profile button click
profileButton.addEventListener("click", (event) => {
  event.stopPropagation();
  toggleUserMenu();
});

// Event listener to close the user menu when clicking outside of it
document.addEventListener("click", (event) => {
  if (!userMenu.contains(event.target) && event.target !== profileButton) {
    userMenu.classList.remove("show-user-menu");
  }
});

function addNumber(idName,productId,status,priceId, quantityId, unitPriceId){
  let quantity=parseInt($("#"+idName).text());
  if(status==1){
    $.ajax({
      url:"http://localhost:8000/add-cart-qty/"+productId,
      success:function(){
        quantity++;
        $("#"+idName).text(quantity);
        computePrice(priceId, quantityId, unitPriceId);
      }
    })
  }
  else{
    quantity++;
    $("#"+idName).text(quantity);
  }
  }
  

function subtractNumber(idName,productId,status,priceId, quantityId, unitPriceId){
  let quantity=parseInt($("#"+idName).text());
  if(status==1){
    if(quantity!=1){
      $.ajax({
        url:"http://localhost:8000/sub-cart-qty/"+productId,
        success:function(){
          quantity--;
          $("#"+idName).text(quantity);
          computePrice(priceId, quantityId, unitPriceId);
        }
      })
    }
    else{
      quantity=1;
      $("#"+idName).text(quantity);
    }
  }
  else{
    if(quantity!=1){
      quantity--;
      $("#"+idName).text(quantity);
    }
    else{
      quantity=1;
      $("#"+idName).text(quantity);
    }
  }
}

function computePrice(priceId, quantityId, unitPriceId){
  let quantity=$("#"+quantityId).text();
  let unitPrice=parseFloat($("#"+unitPriceId).val());
  let totalPrice= unitPrice * quantity;
  $("#"+priceId).text("$"+totalPrice+".00");
}

function removeCartItem(idName, productId){
  $.ajax({
    url:"http://localhost:8000/del-cart-item/"+productId,
    success:function(data){
      $("#"+idName).remove();
      viewCartCounterQuantity();
      console.log(data);
    }
  })
  
}

function viewCartCounterQuantity(){
  $.ajax({
    url:"http://localhost:8000/cart-qty",
    success: function(quantity){
      $("#cartCount").text(quantity);
    },
  })
}
