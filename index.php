
<?php
if($_POST["message"]) {
    mail("cartermarek@gmail.com", "Inquiry/Question from Form to email message", $_POST["msg"], "From: an@email.address");
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>A Céleste Design</title>

  <!-- FAVICON -->
  <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">

  <!-- ICONS -->
  <link rel="stylesheet" href="css/icon-font.css">

  <!-- FONT -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400&display=swap" rel="stylesheet">

  <!--- CSS --->
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>

  <!-- NAVIGATION -->
  <nav class="nav">
    <div class="nav-bar">
      <ul class="nav-list">
        <li class="nav-items"><a href="#about" class="nav-items-links">About</a></li>
        <li class="nav-items"><a href="#product" class="nav-items-links">Products</a></li>
        <li class="nav-items"><a href="#find-us" class="nav-items-links">Contact</a></li>
        <li class="nav-items"><a href="#" class="nav-items-links" id="cart">Cart</a></li>
        <p class="cart-notification">0</p>
      </ul>
    </div>
  </nav>

  <!-- CART MENU -->

  <section class="cart-menu">

    <div class="wrapper-cart">
      <div class="cart-title">
        CART - Click here to collapse
      </div>
      <div class="wrapper-cart-2">
        <!--
        <div class="cart-quantity" id="cart-quantity">
          0
          <br>
          <a href="#" id="cart-remove">Remove</a>
        </div>
        <div class="cart-description" id="cart-description">
          <p class="style">style - blue pants</p>
          <p class="size">size - large</p>
          <p class="price">$9.99</p>
        </div>
        <div class="cart-quantity">
          0
        </div>
        <div class="cart-description">
          <p class="style">style - blue pants</p>
          <p class="size">size - large</p>
          <p class="price">$9.99</p>
        </div>
          -->
      </div>

    </div>


    <div class="cart-total">
      TOTAL
    </div>
    <div class="paypal button">

    </div>

  </section>


  <!-- HEADER -->
  <header class="header">
    <!-- HEADER BUTTON -->
    <div class="header__button">
      <a href="#about" class="btn btn-gold btn-header-left">About Us</a>
      <a href="#product" class="btn btn-gold btn-header-right">Products</a>
    </div>
  </header>

  <section class="section-about-2">

  </section>

  <!-- ABOUT -->
  <section class="section-about" id="about">
    <div class="heading-primary">
      <h1 class="heading-primary-text">About Us</h1>
      <div class="white-bg-box">
        <h2 class="section-about-text--big">
          A little something about us
        </h2>
        <blockquote class="section-about-text--small">
          <span class="quote">&ldquo;</span>Hello future customer! <span class="paragraph"> A Celeste Design is a scrubs <em>boutique</em> located on the Westside of Cincinnati, OH. It's not your regular scrubs store that you would see in your town
            or local mall.
            I like to call it a boutique. It has its boutique feel and look. I wanted to give my customers a wonderful shopping experience giving its a comfortable feel and stylish look. As the medical field grows, the need for scrubs grow. So if
            you wear Scrubs
            everyday like myself, check us out to see what we have to offer. Happy shopping!!</span><span class="quote">&rdquo;</span><br>
          <cite>
            <strong>- Brandi Price, RN</strong>
          </cite>
        </blockquote>
      </div>
    </div>
    <div class="btn-about">
      <a href="#product" class="btn btn-gold-2">Show now</a>
    </div>
  </section>

  <!-- PRODUCTS -->
  <section class="section-product" id="product">
    <div class="wrapper">
      <div class="product-top">
        <h1 class="heading-primary-text">
          Products
        </h1>
      </div>

      <div class="tops">
        <h2>SETS</h2>
      </div>

      <div class="box">
        <div class="product-one product-form">
          <div class="product-photo-box">
            <img src="img/image1.jpeg" alt="Image 1" class="product-photo" id="product-image">



            <!-- FORM START -->
            <form action="#" class="product-selector">

              <fieldset class="form-box">
                <label for="top-color" class="form_label">Style</label><br>
                <!-- TOP SIZE -->
                <select name="top-color" id="top-color">
                  <option value="light-blue">Light-Blue</option>
                </select><br>
                <!-- TOP COLOR -->
                <label for="top-size" class="form_label">Size</label><br>
                <select name="top-size" id="top-size">
                  <option value="extra-small">Extra Small</option>
                  <option value="small">Small</option>
                  <option value="medium">Medium</option>
                </select><br>

                <label for="quantity" class="form_label">Quantity</label><br>

                <input type="button" value="-" id="minus">
                <input type="text" value="1" name="quantity" id="quantity">
                <input type="button" value="+" id="plus">
                <br>
                <input type="submit" value="Add to Cart" class="btn-cart" id="submit">
              </fieldset>
            </form>
            <div class="product-text product-price" id="product-text">65.00</div>
          </div>
        </div>

        <div class="product-one product-form">
          <div class="product-photo-box">
            <h5 class="product-title">
              Statement by Cherokee
            </h5>
            <img src="img/image2.jpeg" alt="Image 1" class="product-photo" id="product-image">


            <!-- FORM START -->
            <form action="#" class="product-selector">

              <fieldset class="form-box">
                <label for="top-color" class="form_label">Style</label><br>
                <!-- TOP SIZE -->
                <select name="top-color" id="top-color">
                  <option value="pink">Pink</option>
                </select><br>
                <!-- TOP COLOR -->
                <label for="top-size" class="form_label">Size</label><br>
                <select name="top-size" id="top-size">
                  <option value="extra-small">Extra Small</option>
                  <option value="small">Small</option>
                  <option value="medium">Medium</option>
                </select><br>

                <label for="quantity" class="form_label">Quantity</label><br>

                <input type="button" value="-" id="minus">
                <input type="text" value="1" name="quantity" id="quantity">
                <input type="button" value="+" id="plus">
                <br>
                <input type="submit" value="Add to Cart" class="btn-cart" id="submit">
              </fieldset>
            </form>
            <div class="product-text product-price" id="product-text">73.00</div>
          </div>
        </div>

        <div class="product-one product-form">
          <div class="product-photo-box">
            <h5 class="product-title">
              Heart Soul by Cherokee
            </h5>
            <img src="img/image3.jpeg" alt="Image 1" class="product-photo" id="product-image">


            <!-- FORM START -->
            <form action="#" class="product-selector">

              <fieldset class="form-box">
                <label for="top-color" class="form_label">Style</label><br>
                <!-- TOP SIZE -->
                <select name="top-color" id="top-color">
                  <option value="black">Black</option>
                  <option value="navy">Navy</option>
                </select><br>
                <!-- TOP COLOR -->
                <label for="top-size" class="form_label">Size</label><br>
                <select name="top-size" id="top-size">
                  <option value="extra-small">X-Small</option>
                  <option value="small">Small</option>
                  <option value="medium">Medium</option>
                </select><br>

                <label for="quantity" class="form_label">Quantity</label><br>

                <input type="button" value="-" id="minus">
                <input type="text" value="1" name="quantity" id="quantity">
                <input type="button" value="+" id="plus">
                <br>
                <input type="submit" value="Add to Cart" class="btn-cart" id="submit">
              </fieldset>
            </form>
            <div class="product-text product-price" id="product-text">65.00</div>
          </div>
        </div>

        <div class="product-one product-form">
          <div class="product-photo-box">
            <h5 class="product-title">
              Heart Soul by Cherokee
            </h5>
            <img src="img/image4.jpeg" alt="Image 1" class="product-photo" id="product-image">


            <!-- FORM START -->
            <form action="#" class="product-selector">

              <fieldset class="form-box">
                <label for="top-color" class="form_label">Style</label><br>
                <!-- TOP SIZE -->
                <select name="top-color" id="top-color">
                  <option value="blue">Royal Blue</option>
                </select><br>
                <!-- TOP COLOR -->
                <label for="top-size" class="form_label">Size</label><br>
                <select name="top-size" id="top-size">
                  <option value="extra-small">Extra Small</option>
                  <option value="small">Small</option>
                  <option value="medium">Medium</option>
                </select><br>

                <label for="quantity" class="form_label">Quantity</label><br>

                <input type="button" value="-" id="minus">
                <input type="text" value="1" name="quantity" id="quantity">
                <input type="button" value="+" id="plus">
                <br>
                <input type="submit" value="Add to Cart" class="btn-cart" id="submit">
              </fieldset>
            </form>
            <div class="product-text product-price" id="product-text">65.00</div>
          </div>
        </div>

        <div class="product-one product-form">
          <div class="product-photo-box">
            <!--<h5 class="product-title">
              Heart Soul by Cherokee
            </h5>-->
            <img src="img/image5.jpg" alt="Image 1" class="product-photo" id="product-image">


            <!-- FORM START -->
            <form action="#" class="product-selector">

              <fieldset class="form-box">
                <label for="top-color" class="form_label">Style</label><br>
                <!-- TOP SIZE -->
                <select name="top-color" id="top-color">
                  <option value="purple">Purple</option>
                </select><br>
                <!-- TOP COLOR -->
                <label for="top-size" class="form_label">Size</label><br>
                <select name="top-size" id="top-size">
                  <option value="extra-small">Extra Small</option>
                  <option value="small">Small</option>
                  <option value="medium">Medium</option>
                  <option value="large">Large</option>
                  <option value="xx-large">XX-Large</option>
                </select><br>

                <label for="quantity" class="form_label">Quantity</label><br>

                <input type="button" value="-" id="minus">
                <input type="text" value="1" name="quantity" id="quantity">
                <input type="button" value="+" id="plus">
                <br>
                <input type="submit" value="Add to Cart" class="btn-cart" id="submit">
              </fieldset>
            </form>
            <div class="product-text product-price" id="product-text">65.00</div>
          </div>
        </div>

        <!-- <div class="product-four">
          <div class="product-text-box">
            <div class="product-text product-price" id="product-text">29.99</div>
            <ul class="product-item-list">
              <li class="product-item">Comfortable material</li>
              <li class="product-item">Strecthable</li>
              <li class="product-item">Item Details 3</li>
              <li class="product-item">Item Details 4</li>
              <li class="product-item">Item Details 5</li>
            </ul>
          </div>
        </div>
      </div>
-->
      </div>

      <!--
      <div class="bottoms">
        <h2>BOTTOMS</h2>
      </div>

      <div class="box">
        <div class="product-one product-form">
          <div class="product-photo-box">
            <img src="img/image1.jpeg" alt="Image 1" class="product-photo" id="product-image">

            <div class="product-text product-price" id="product-text">29.99</div>

            <!-- FORM START -->
      <!--
            <form action="#" class="product-selector">

              <fieldset class="form-box">
                <label for="top-color" class="form_label">Style</label><br>
                <!-- TOP SIZE -->
      <!--
                <select name="top-color" id="top-color">
                  <option value="light-blue">Light-Blue</option>
                </select><br>
                <!-- TOP COLOR -->
      <!--
                <label for="top-size" class="form_label">Size</label><br>
                <select name="top-size" id="top-size">
                  <option value="extra-small">Extra Small</option>
                  <option value="small">Small</option>
                  <option value="medium">Medium</option>
                  <option value="large">Large</option>
                </select><br>

                <label for="quantity" class="form_label">Quantity</label><br>

                <input type="button" value="-" id="minus">
                <input type="text" value="1" name="quantity" id="quantity">
                <input type="button" value="+" id="plus">
                <br>
                <input type="submit" value="Add to Cart" class="btn-cart" id="submit">
              </fieldset>
            </form>
          </div>
        </div>

        <div class="product-one product-form">
          <div class="product-photo-box">
            <img src="img/image2.jpeg" alt="Image 1" class="product-photo" id="product-image">

            <div class="product-text product-price" id="product-text">29.99</div>

            <!-- FORM START -->
      <!--
            <form action="#" class="product-selector">

              <fieldset class="form-box">
                <label for="top-color" class="form_label">Style</label><br>
                <!-- TOP SIZE
                <!--
                <select name="top-color" id="top-color">
                  <option value="pink">Pink</option>
                </select><br>
                <!-- TOP COLOR -->
      <!--
                <label for="top-size" class="form_label">Size</label><br>
                <select name="top-size" id="top-size">
                  <option value="extra-small">Extra Small</option>
                  <option value="small">Small</option>
                  <option value="medium">Medium</option>
                  <option value="large">Large</option>
                </select><br>

                <label for="quantity" class="form_label">Quantity</label><br>

                <input type="button" value="-" id="minus">
                <input type="text" value="1" name="quantity" id="quantity">
                <input type="button" value="+" id="plus">
                <br>
                <input type="submit" value="Add to Cart" class="btn-cart" id="submit">
              </fieldset>
            </form>
          </div>
        </div>

        <div class="product-one product-form">
          <div class="product-photo-box">
            <img src="img/image3.jpeg" alt="Image 1" class="product-photo" id="product-image">

            <div class="product-text product-price" id="product-text">29.99</div>

            <!-- FORM START -->
      <!--
            <form action="#" class="product-selector">

              <fieldset class="form-box">
                <label for="top-color" class="form_label">Style</label><br>
                <!-- TOP SIZE -->
      <!--
                <select name="top-color" id="top-color">
                  <option value="black">Black</option>
                    <option value="navy">Navy</option>
                </select><br>
                <!-- TOP COLOR -->
      <!--
                <label for="top-size" class="form_label">Size</label><br>
                <select name="top-size" id="top-size">
                  <option value="extra-small">X-Small</option>
                  <option value="small">Small</option>
                  <option value="medium">Medium</option>
                  <option value="large">Large</option>
                  <option value="extra-large">X-Large</option>
                  <option value="XX-large">XX-Large</option>
                </select><br>

                <label for="quantity" class="form_label">Quantity</label><br>

                <input type="button" value="-" id="minus">
                <input type="text" value="1" name="quantity" id="quantity">
                <input type="button" value="+" id="plus">
                <br>
                <input type="submit" value="Add to Cart" class="btn-cart" id="submit">
              </fieldset>
            </form>
          </div>
        </div>

        <div class="product-one product-form">
          <div class="product-photo-box">
            <img src="img/image4.jpeg" alt="Image 1" class="product-photo" id="product-image">

            <div class="product-text product-price" id="product-text">29.99</div>

            <!-- FORM START
            <!--
            <form action="#" class="product-selector">

              <fieldset class="form-box">
                <label for="top-color" class="form_label">Style</label><br>
                <!-- TOP SIZE -->
      <!--
                <select name="top-color" id="top-color">
                  <option value="blue">Royal Blue</option>
                </select><br>
                <!-- TOP COLOR -->
      <!--
                <label for="top-size" class="form_label">Size</label><br>
                <select name="top-size" id="top-size">
                  <option value="extra-small">Extra Small</option>
                  <option value="small">Small</option>
                  <option value="medium">Medium</option>
                  <option value="large">Large</option>
                </select><br>

                <label for="quantity" class="form_label">Quantity</label><br>

                <input type="button" value="-" id="minus">
                <input type="text" value="1" name="quantity" id="quantity">
                <input type="button" value="+" id="plus">
                <br>
                <input type="submit" value="Add to Cart" class="btn-cart" id="submit">
              </fieldset>
            </form>
          </div>
        </div>
      </div>
-->
      <div class=product-about-bottom>
        <h3 class="product-bottom-text">
          A Céleste Design has you covered for ALL your scrub needs!
        </h3>
      </div>


  </section>

  <!-- INQUIRY FORM -->
  <section class="form-2">
    <form action="index.php" method="post" class="form-message">
      <fieldset>
        <legend>
          Inquiry / Questions
        </legend>
        <div>
          <label for="name" class="form-label">Name:</label>
          <input type="text" id="name" name="user_name" class="form-input">
        </div>
        <div>
          <label for="mail" class="form-label">E-mail:</label>
          <input type="email" id="mail" name="user_mail" class="form-input">
        </div>
        <div>
          <label for="msg" class="form-label">Message:</label>
          <textarea id="msg" name="user_message" rows="8" cols="80"></textarea>
        </div>
        <div class="form-button">
          <button type="submit">
            Send your message
          </button>
        </div>
      </fieldset>
    </form>
  </section>

  <!-- FIND US -->
  <section class="section-find-us" id="find-us">
    <div class="wrapper-2">
      <div class="find-us">
        <h1 class="heading-primary-text">
          find us
        </h1>
      </div>
      <div class="find-us-text">
        <h4>Address:</h4>
        <p>5522 Glenway Ave Cincinnati 45238</p>
        <h4>Phone:</h4>
        <p>(513) 400-0433</p>
        <h4>Email</h4>
        <p>acelestedesign@gmail.com</p>
        <h4>Social Media</h4><a href="https://www.facebook.com/acelestedesign/?__tn__=kC-R&eid=ARDIJdmx-dNEnHxoPHPckfhX9kp2Lce70-qMGTMNEKlw38ujizrrYQ-XxNP2-Gh-o3E7fspTN87IMtjb&hc_ref=ARS82CMeDJAaBIm623yTfi2SnDDDELuUj7xqXcdGTBV0eR0smcAvFoBSw0uJCMihLpU&__xts__[0]=68.ARCGwvzrVtYmvA0rM5zSB2c_SlQjRSHgNaL748_sXxbMUPd7u_WNGypUljrVwn5ChwzMCDusF43nux-oH0NMe1QtIHd-UK1Z7FuVdAUojhUx2UTGdB2sYllCi7kuLZsW5aLeIcRI6aVopFokrAX1k6SpfzYHEWQOTH2krxbHCOYGo_CsYW8WoNOk3YtZosu9pDF6z3ELdAbBYV9TfJfobtb7EpCzUDB-xl0uRE_t_j60WDChYzk64wSqUUa_oqR8r6AlKlRrEvxSQrwze5da13nIGIBnqn21ULFW7I-Ul4oQiXY-UFI"
          class="">
          <span class="icon-size"><i class="fab fa-facebook-f"></i></span></a>
      </div>
      <div class="two">
        <div id="map"></div>
      </div>
    </div>
  </section>

  <!--- FOOTER SCOPE --->
  <footer class="footer clearfix">
    <ul class="footer-links">
      <li class="footer-links-item"><a href="#" class="btn-footer">Contact</a></li>
      <li class="footer-links-item"><a href="#" class="btn-footer">About Us</a></li>
      <li class="footer-links-item"><a href="#" class="btn-footer">Scrubs</a></li>
    </ul>
    <h6 class="copyright">Copyright &copy; 2019</h6>
  </footer>


  <script src="https://kit.fontawesome.com/ea4a2dd228.js"></script>

  <!-- GOOGLE MAPS -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBpoOp-eOhEA50n-7EReJTmmygmXdBVz4Y&callback=initMap" async defer></script>

  <script src="js/script.js"></script>
</body>

</html>
