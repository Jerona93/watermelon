<?php
define('BASE_URL', 'http://localhost/watermelon');
// HEAD
define('head', '
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
    <script src="mov/carrito.js"></script>');

// NAVEGADOR
define('navegador', '<nav>
    <ul>
      <li>
        <a href="index.php"><i class="fab fa-f368"></i><img src="images/watermelon.png" style="width: 40px" /></a>
      </li>

      <li class="navv"><a href="http://localhost/watermelon#productomac">Mac</a></li>
      <li class="navv"><a href=" http://localhost/watermelon#productoiphone">iPhone</a></li>
      <li class="navv"><a href=" http://localhost/watermelon#productwatch">Watch</a></li>
      <li class="navv"><a href=" http://localhost/watermelon#productoipad">DJI</a></li>
     <li class="navv"><a href=" http://localhost/watermelon/contacto.php">Contacto</a></li>

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
  </nav>');

//   FOOTER
define('footer', '<footer>
  <div class="footer-main">
    
    

    

      

      
      <ul>
        <li>
          <h4>Contacto WaterMelon</h4>
        </li>
        <li><a href="http://localhost/watermelon/contacto.php">Contactanos</a></li>
        
      </ul>
    </div>

    
    <div class="footer-copyright">
      <p>Copyright © 2021 JrDev. All rights reserved.</p>

      
    </div>
  </div>
</footer>');


// CONTACTO

define('contacto', '<div id="wrapper">

<div class="content">
    <div class="col">
        <div id="logo">
            <h1>Contacto</h1>
        </div>
        <br>

        <li>Telefono: 654475102<a href="tel:654475102"> (Llamar)</a></li>
        <li>Fax: 654475102</li>
        <li>Correo electrónico: watermelon.inc.tech@gmail.com<a href="mailto:watermelon.inc.tech@gmail.com"> (Enviar mail)</a></li>
        <br>
        <h3>Nuestras redes: </h3>

        <li>instagram tech.watermelon <a href="https://www.instagram.com/tech.watermelon/" target="blank"> Instagram</a></li>
        <li>Tech_Watermelon twitter<a href="https://twitter.com/tech_watermelon" target="blank"> Twitter </a></li>
        </li>
        </li>

        <br>
        <h2>Nuestra sede: </h2>

        </ul>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1585.2489560598372!2d-6.002291799395229!3d37.37805556556174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzfCsDIyJzQxLjAiTiA2wrAwMCcwNS45Ilc!5e0!3m2!1ses!2ses!4v1621460772643!5m2!1ses!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>


    </div>


</div>


</div>');
