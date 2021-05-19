<?php
include('bootstrap.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet" />
  <link rel="StyleSheet" href="estilo/style.css" />
  <link href="estilo/carrito.scss" />


  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <title>WM</title>

  <meta name="robots" content="noindex" />
  <link rel="shortcut icon" type="image/x-icon" href="images/icoWeb.ico" />
  <link rel="mask-icon" type="" href="images/watermelon2.svg" color="#111" />
  <!-- BOOTSTRAP
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" />
  <script src="https://cpwebassets.codepen.io/assets/editor/iframe/iframeConsoleRunner-d8236034cc3508e70b0763f2575a8bb5850f9aea541206ce56704c013047d712.js"></script>
  <script src="https://cpwebassets.codepen.io/assets/editor/iframe/iframeRefreshCSS-4793b73c6332f7f14a9b6bba5d5e62748e9d1bd0b5c52d7af6376f3d1c625d7e.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script src="https://cpwebassets.codepen.io/assets/editor/iframe/iframeRuntimeErrors-4f205f2c14e769b448bcf477de2938c681660d5038bc464e3700256713ebe261.js"></script>
  <script src="mov/nav.js"></script>
  <script src="mov/carrito.js"></script>
</head>
<header>
  <nav>
    <ul>
      <li>
        <a href="index.php"><i class="fab fa-f368"></i><img src="images/watermelon.png" style="width: 40px" /></a>
      </li>

      <li class="navv"><a href="#productomac">Mac</a></li>
      <li class="navv"><a href="#productoiphone">iPhone</a></li>
      <li class="navv"><a href="#productwatch">Watch</a></li>
      <li class="navv"><a href="#productoipad">DJI</a></li>
      <li class="navv"><a href="#product-support">Conócenos</a></li>
      <!-- <li class="navv">
        <a href="#"><i class="fas fa-search"></i></a>
      </li> -->



      <li class="navv">
        <a href="carrito.php"><i class="fas fa-shopping-bag"></i></a>
      </li>
      <li class="navv">
        <a href="login.php"><i class="fa fa-user"></i></a>
      </li>
    </ul>
  </nav>


</header>

<body>

  <div class="container2">
    <div class="slider">
      <div class="slide">

      </div>
      <div class="slide">

      </div>
      <div class="slide">

      </div>
      <div class="slide">

      </div>
      <div class="slide">

      </div>
    </div>
  </div>

  <section class="product-mac" id="productomac">
    <div class="fade">
      <div class="container">
        <h2>Mac</h2>
        <div class="grid">
          <div class="grid-product ">
            <img class="imgsum" src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/macbook-air-segment?wid=800&hei=600&fmt=png-alpha&qlt=80&.v=1573580916082" />
            <div class="grid-detail">
              <p>MacBook Air</p>
              <p>Desde 1,000 €</p>
            </div>
          </div>

          <div class="grid-product">
            <a href="mcbookpro.php">
              <img class="imgsum" src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/macbook-pro-segment-2019?wid=800&hei=600&fmt=png-alpha&qlt=80&.v=1573580916135" />
              <div class="grid-detail">
                <p>MacBook Pro</p>
                <p>Desde 1,500 €</p>
              </div>
            </a>
          </div>

          <div class="grid-product">
            <img class="imgsum" src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/imac-segment?wid=800&hei=600&fmt=png-alpha&qlt=80&.v=1570232081431" />
            <div class="grid-detail">
              <p>iMac</p>
              <p>Desde 1,900 €</p>
            </div>
          </div>

          <div class="grid-product">
            <a href="imacpro.php">
              <img class="imgsum" src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/imac-pro-segment?wid=800&hei=600&fmt=png-alpha&qlt=80&.v=1570231926191" />
              <div class="grid-detail">
                <p>iMac Pro</p>
                <p>Desde 2,300 €</p>
              </div>
            </a>
          </div>

          <div class="grid-product">
            <img class="imgsum" src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/mac-pro-segment?wid=800&hei=600&fmt=png-alpha&qlt=80&.v=1524766968633" />
            <div class="grid-detail">
              <p>Mac Pro</p>
              <p>Desde 1,900 €</p>
            </div>
          </div>

          <div class="grid-product">
            <img class="imgsum" src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/mac-mini-segment?wid=800&hei=600&fmt=png-alpha&qlt=80&.v=1539466285370" />
            <div class="grid-detail">
              <p>Mac mini</p>
              <p>Desde 900 €</p>
            </div>
          </div>
          <!--end grid-product-->
        </div>
        <!--end grid-->
      </div>
    </div>
    <!--end container-->
  </section>

  <section class="product-iphone" id="productoiphone">
    <div class="fade">
      <div class="container">
        <h2>iPhone</h2>
        <div class="grid">
          <div class="grid-product">
            <img class="imgsum" src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/iphone-11-pro-segment-201909?wid=800&hei=600&fmt=png-alpha&qlt=80&.v=1567201566801" />
            <div class="grid-detail">
              <p>iPhone 11 Pro</p>
              <p>Desde 1,000 </p>
            </div>
          </div>

          <div class="grid-product">
            <img class="imgsum" src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/iphone-11-segment-201909?wid=800&hei=600&fmt=png-alpha&qlt=80&.v=1567201566851" />
            <div class="grid-detail">
              <p>iPhone 11</p>
              <p>Desde 800 €</p>
            </div>
          </div>

          <div class="grid-product">
            <img class="imgsum" src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/iphone-xr-segment?wid=800&hei=600&fmt=png-alpha&qlt=80&.v=1535393884526" />
            <div class="grid-detail">
              <p>iPhone XR</p>
              <p>Desde 850 €</p>
            </div>
          </div>

          <div class="grid-product">
            <img class="imgsum" src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/segment-hero-iphone-8-201709?wid=800&hei=600&fmt=png-alpha&qlt=80&.v=1504891668190" />
            <div class="grid-detail">
              <p>iPhone 8</p>
              <p>Desde 800 €</p>
            </div>
          </div>
        </div>
        <!--end grid-->
      </div>
    </div>
    <!--end container-->
  </section>

  <section class="product-watch" id="productwatch">
    <div class="fade">
      <div class="container">
        <h2>Watch</h2>
        <div class="grid">
          <div class="grid-product">
            <img class="imgsum" src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/apple-watch-series-5-segment-201909?wid=800&hei=600&fmt=png-alpha&qlt=80&.v=1567038391208" />
            <div class="grid-detail">
              <p>Apple Watch Series 5</p>
              <p>Desde 500 €</p>
            </div>
          </div>

          <div class="grid-product">
            <img class="imgsum" src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/apple-watch-nike-segment-201909?wid=800&hei=600&fmt=png-alpha&qlt=80&.v=1567202843775" />
            <div class="grid-detail">
              <p>Apple Watch Nike</p>
              <p>Desde 550 €</p>
            </div>
          </div>

          <div class="grid-product">
            <img class="imgsum" src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/apple-watch-hermes-segment-201909?wid=800&hei=600&fmt=png-alpha&qlt=80&.v=1568373934272" />
            <div class="grid-detail">
              <p>Apple Watch Hermes</p>
              <p>Desde 600 €</p>
            </div>
          </div>

          <div class="grid-product">
            <img class="imgsum" src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/apple-watch-edition-segment-201909?wid=800&hei=600&fmt=png-alpha&qlt=80&.v=1568066151825" />
            <div class="grid-detail">
              <p>Apple Watch Edition Series 5</p>
              <p>Desde 475 €</p>
            </div>
          </div>

          <div class="grid-product">
            <img class="imgsum" src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/apple-watch-series-3-segment-201909?wid=800&hei=600&fmt=png-alpha&qlt=80&.v=1567038391348" />
            <div class="grid-detail">
              <p>Apple Watch Series 3</p>
              <p>Desde 390 €</p>
            </div>
          </div>
          <!--end grid-product-->
        </div>
        <!--end grid-->
      </div>
    </div>
    <!--end container-->
  </section>

  <section class="product-ipad" id="productoipad">
    <div class="fade">
      <div class="container">
        <h2>DJI and Apple TV</h2>
        <div class="grid-full">
          <div class="grid-product">
            <img class="imgsum" src="images/droneInspire.png" />
            <div class="grid-detail">
              <p>Drone DjI</p>
              <p>Desde 2,000 €</p>
            </div>
          </div>
          <div class="grid-product">
            <img class="imgsum" src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/segment-hero-apple-tv4k-201709?wid=400&hei=300&fmt=png-alpha&.v=1504891668090" />
            <div class="grid-detail">
              <p>Apple TV 4K</p>
              <p>Desde 1,000 €</p>
            </div>
          </div>
          <div class="grid-product">
            <img class="imgsum" src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/segment-hero-apple-tv4k-201709?wid=400&hei=300&fmt=png-alpha&.v=1504891668090" />
            <div class="grid-detail">
              <p>Apple TV HD</p>
              <p>Desde 900 €</p>
            </div>
          </div>
          <div class="grid-product-full">
            <img class="imgsum" src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/smb-accessories-201908?wid=1070&hei=480&fmt=png-alpha&.v=1563990869846" />
            <div class="grid-detail-sum">
              <h2>Accessories</h2>
              <p>get things done in style.</p>
              <a href="#">shop now <i class="fas fa-chevron-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <div class="footer-main">
      <div class="footer-detail">
        <p>Prices are inclusive of VAT. Free delivery for all orders.</p>
        <p>
          *Total order value must be less than 30,000 THB. Admin fee may be
          charged by bank/processing entity in addition to order value.
        </p>
        <p>
          **For approved customers only. Subject to approval. For more
          information, see
          <a href="#">http://www.apple.com/th-en/help/payments.</a>
        </p>
      </div>
      <!-- end footer detail -->

      <div class="footer-welcome">
        <i class="fab fa-apple"></i>
        <i class="fas fa-chevron-right"></i>
        <p>Welcome to the Apple Store</p>
      </div>
      <!-- end footer-welcome -->

      <div class="footer-ul">
        <ul>
          <li>
            <h4>Shop and Learn</h4>
          </li>
          <li><a href="#">Mac</a></li>
          <li><a href="#">iPad</a></li>
          <li><a href="#">iPhone</a></li>
          <li><a href="#">Apple Watch</a></li>
          <li><a href="#">TV</a></li>
          <li><a href="#">Music</a></li>
          <li><a href="#">iTunes</a></li>
          <li><a href="#">iPod Touch</a></li>
          <li><a href="#">Accessories</a></li>
          <li><a href="#">Gift Cards</a></li>
        </ul>

        <ul>
          <li>
            <h4>Apple Store</h4>
          </li>
          <li><a href="#">Apple Store App</a></li>
          <li><a href="#">Financing</a></li>
          <li><a href="#">Order Status</a></li>
          <li><a href="#">Shopping Help</a></li>
        </ul>

        <ul>
          <li>
            <h4>For Education</h4>
          </li>
          <li><a href="#">Apple and Education</a></li>
          <li><a href="#">Shop for College</a></li>
          <li id="mt">
            <h4>For Business</h4>
          </li>
          <li><a href="#">Apple and Business</a></li>
          <li><a href="#">shop for Business</a></li>
        </ul>

        <ul>
          <li>
            <h4>Account</h4>
          </li>
          <li><a href="#">Manage Your Apple ID</a></li>
          <li><a href="#">Apple Store Account</a></li>
          <li><a href="#">iClound.com</a></li>
          <li id="mt">
            <h4>Apple Values</h4>
          </li>
          <li><a href="#">Accessibility</a></li>
          <li><a href="#">Environment</a></li>
          <li><a href="#">Privacy</a></li>
          <li><a href="#">Supplier Responsibility</a></li>
        </ul>

        <ul>
          <li>
            <h4>About Apple</h4>
          </li>
          <li><a href="#">Newsroom</a></li>
          <li><a href="#">Investors</a></li>
          <li><a href="#">Events</a></li>
          <li><a href="#">Contact Apple</a></li>
        </ul>
      </div>

      <div class="footer-contact">
        <p>
          More ways to shop: visit an <a href="#">Apple Store, </a>Call
          001‑800‑65‑6957, or <a href="#">find a seller</a>
        </p>
      </div>
      <div class="footer-copyright">
        <p>Copyright © 2021 JrDev. All rights reserved.</p>

        <ul>
          <li><a href="#">Privacy Policy</a></li>
          <div class="vr"></div>
          <li><a href="#">Terms of Use</a></li>
          <div class="vr"></div>
          <li><a href="#">Sales and Refunds</a></li>
          <div class="vr"></div>
          <li><a href="#">Legal</a></li>
          <div class="vr"></div>
          <li><a href="#">Sitemap</a></li>
        </ul>

        <div class="footer-lang">
          <div class="circle">
            <img src="https://images-na.ssl-images-amazon.com/images/I/21ebY7rg4aL._AC_.jpg" />
          </div>
          <p>ไทย</p>
          <div class="vr"></div>
          <p>ภาษาไทย</p>
        </div>
      </div>
    </div>
  </footer>
  <!-- </div> -->
</body>

</html>