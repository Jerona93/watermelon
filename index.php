<?php
include('bootstrap.php');
// include('echo BASE_URL;/template/footer.php');

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
<?php echo navegador; ?>


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
  

    <!-- FOOTER -->
    <?php echo footer; ?>
</body>

</html>