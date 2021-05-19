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
  <link rel="StyleSheet" href="estilo/login.css" />


  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <title>WM</title>

  <meta name="robots" content="noindex" />
  <link rel="shortcut icon" type="image/x-icon" href="images/icoWeb.ico" />
  <link rel="mask-icon" type="" href="images/watermelon2.svg" color="#111" />
  <!--
      <link rel="shortcut icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico">
    
      <link rel="mask-icon" type="" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111">
    -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" />
  <script src="https://cpwebassets.codepen.io/assets/editor/iframe/iframeConsoleRunner-d8236034cc3508e70b0763f2575a8bb5850f9aea541206ce56704c013047d712.js"></script>
  <script src="https://cpwebassets.codepen.io/assets/editor/iframe/iframeRefreshCSS-4793b73c6332f7f14a9b6bba5d5e62748e9d1bd0b5c52d7af6376f3d1c625d7e.js"></script>
  <script src="https://cpwebassets.codepen.io/assets/editor/iframe/iframeRuntimeErrors-4f205f2c14e769b448bcf477de2938c681660d5038bc464e3700256713ebe261.js"></script>
  <script src="mov/nav.js"></script>
</head>
<header>
<nav>
    <ul>
      <li>
        <a href="index.php"><i class="fab fa-f368"></i><img src="images/watermelon.png" style="width: 40px" /></a>
      </li>

      <li class="navv"><a href="<?php echo BASE_URL; ?>#productomac">Mac</a></li>
      <li class="navv"><a href="<?php echo BASE_URL; ?>#productoiphone">iPhone</a></li>
      <li class="navv"><a href="<?php echo BASE_URL; ?>#productwatch">Watch</a></li>
      <li class="navv"><a href="<?php echo BASE_URL; ?>#productoipad">DJI</a></li>
      <li class="navv"><a href="<?php echo BASE_URL; ?>#product-support">Conócenos</a></li>
      
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
  <!-- <section class="welcome">
      <h1>Shop for your favorite WaterMelon products.</h1>
    </section>  -->

  <div class="login">
    <div class="login-wrap">
      <div class="login-html">
        <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
        <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
        <!-- <form method="post" action="seguridad.php"> -->
        <div class="login-form">
          <div class="sign-in-htm">
            <form method="post" action="seguridad.php">
              <div class="group">
                <label for="user" class="label">Usuario: </label>
                <input id="user" type="text" name="usuario" class="input" placeholder="Nombre de usuario..">
              </div>

              <div class="group">
                <label for="pass" class="label">Contraseña: </label>
                <input id="pass" type="password" name="pass0" class="input" data-type="password" placeholder="Contraseña..">
              </div>

             
              <div class="group">
                <input type="submit" class="button" value="Sign In" onclick=" location.href='www.google.com' ">
              </div>
              <div class="hr"></div>
              <div class="foot-lnk">
                <a href="#forgot">Forgot Password?</a>
              </div>
            </form>
          </div>
          <div class="sign-up-htm">
            <form method="post" action="seguridad.php">
              <div class="group">
                <label for="fname" class="label">Nombre</label>
                <input id="fname" type="text" name="nombre" class="input" placeholder="Nombre..">
              </div>
              <div class="group">
                <label for="user" class="label">Usuario</label>
                <input id="user" type="text" name="usuario" class="input" placeholder="Usuario..">
              </div>
              <div class="group">
                <label for="email" class="label">Email </label>
                <input id="email" type="text" name="email" placeholder="Email.." class="input">
              </div>
              <div class="group">
                <label for="pass" class="label">Contraseña</label>
                <input id="pass" type="password" class="input" name="pass0" placeholder="Contraseña..">
              </div>
              <div class="group">
                <label for="pass" class="label">Repita contraseña</label>
                <input id="pass" type="password" class="input" name="pass1" placeholder="Repita contraseña..">
              </div>
              <div class="group">
                <!-- <input type="hidden" name="accion" value="registro">
                <input type="submit" value="Registrar"> -->
                <input type="hidden" name="accion" value="registro">
                <input type="submit" class="button" value="Registrar">
              </div>
              <div class="hr"></div>
              <div class="foot-lnk">
                <label for="tab-1">¿Ya estas registrado?</a>
              </div>
            </form>
          </div>
        </div>
        <!-- </form> -->
      </div>
    </div>
  </div>




  <footer>
    <div class="footer-main">

      <!-- end footer detail -->


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
</body>

</html>