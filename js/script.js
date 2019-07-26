var minus = document.getElementById('minus');
var plus = document.getElementById('plus');
var input = document.getElementById('quantity');
var style = document.getElementById('top-color');
var size = document.getElementById('top-size');
var productStyle = document.getElementById('product-image');
var productPrice = document.getElementById('product-text');





////////////////////////////////////////
// STYLE SELECTOR FORM
style.addEventListener('click', function() {

  // select style and image changes after selection
  if (style.value === "light-blue") {
    productStyle.src = 'img/image1.jpeg';
    productPrice.innerHTML = '29.99';
  } else if (style.value === "pink") {
    productStyle.src = 'img/image2.jpeg';
    productPrice.innerHTML = '39.99';
  } else if (style.value === "black") {
    productStyle.src = 'img/image3.jpeg';
  } else if (style.value === "blue") {
    productStyle.src = 'img/image4.jpeg';
  }
});





//////////////////////////////////
// SUBTRACTION BUTTON FORM (-)
minus.addEventListener('click', function() {

  // decrease input by one when clicked // cannot go below 1
  input.value = input.value - 1;
  if (input.value <= 0) {
    alert('Cannot have a value of 0');
    input.value = 1;
  }
});





//////////////////////////////////
// ADDITION BUTTON FORM (+)
plus.addEventListener('click', function() {

  // increase input by one when clicked
  input.value++;
  console.log(input.value);
});





////////////////////////////////////
// FORM SUBMIT BUTTON

var submit = document.getElementById('submit');
var price = productPrice.innerHTML;
// function constructor for cart menu
var shoppingCart, addNewItem, html;
var totalBudget = 0;
var updateQuantity = 0;

// prevents page from reloading
submit.addEventListener('click', function(e) {
  e.preventDefault();


  // collect data and get the field input
  var Cart = function(quantity, style, size, price) {
    this.quantity = quantity.value;
    this.style = style.value;
    this.size = size.value;
    this.price = parseFloat(price);
  };

  shoppingCart = {
    allItems: [],
    totalItems: 0
  };

  addNewItem = new Cart(quantity, style, size, price);
  console.log(shoppingCart.allItems);

  shoppingCart.allItems.push(addNewItem);

  // send to cartMenu
  html = '<div class="cart-quantity" id="cart-quantity">%quantity%<br><a href="#" id="cart-remove">Remove</a></div><div class="cart-description" id="cart-description"><p class="style">style - %style%</p><p class="size">size - %size%</p><p class="price">$%price%</p></div>';

  /// replace placeholder
  element = '.wrapper-cart-2';

  newHtml = html.replace('%quantity%', quantity.value);
  newHtml = newHtml.replace('%style%', style.value);
  newHtml = newHtml.replace('%size%', size.value);
  newHtml = newHtml.replace('%price%', price);

  // update cart // insert into DOM
  document.querySelector(element).insertAdjacentHTML('beforeend', newHtml);

  // update total budget & quantity

  totalBudget += parseFloat(price);
  updateQuantity += parseFloat(quantity.value);
  document.querySelector('.cart-total').innerText = 'TOTAL - $' + totalBudget;
  document.querySelector('.cart-notification').innerHTML = updateQuantity;


});





/////////////////////////////////////
// CART MENU
var cart = document.getElementById('cart');

// open cart on click
cart.addEventListener('click', function() {
  if ('click') {
    document.querySelector('.cart-menu').style.visibility = 'visible';
  }
});

// close cart on click
document.querySelector('.cart-title').addEventListener('click', function() {
  if ('click') {
    document.querySelector('.cart-menu').style.visibility = 'hidden';
  }

  // remove button to clear field
  var fields, fieldsArr;
  fields = document.querySelectorAll('.cart-quantity', '.cart-description');
  fieldsArr = Array.prototype.slice.call(fields);


});









/////////////////////////////////
// GOOGLE MAPS

// Initialize and add the map
function initMap() {
  // The location of Uluru
  var uluru = {
    lat: 39.1310605,
    lng: -84.6106736
  };
  // The map, centered at Uluru
  var map = new google.maps.Map(
    document.getElementById('map'), {
      zoom: 4,
      center: uluru
    });
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({
    position: uluru,
    map: map
  });
}
