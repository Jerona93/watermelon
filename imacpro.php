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
    <script src="https://cpwebassets.codepen.io/assets/editor/iframe/iframeRuntimeErrors-4f205f2c14e769b448bcf477de2938c681660d5038bc464e3700256713ebe261.js"></script>
    <script src="mov/nav.js"></script>
    <script src="mov/carrito.js"></script>
</head>
<header style="padding-top: 0.1px;">
    <?php echo navegador; ?>
</header>

<body style="overflow-x: hidden;">

    <div>
        <div class="grid-detail">
            <img src="https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/imac-pro-segment?wid=800&hei=600&fmt=png-alpha&qlt=80&.v=1570231926191" />

            <h2>iMac Pro</h2>
            <div class="descrip">
                <p>El iMac de 27 pulgadas viene con herramientas y apps muy potentes para que lleves tus ideas hasta donde nunca imaginaste.
                    Sus procesadores y gráficos ultrarrápidos, su increíble memoria y el almacenamiento flash son capaces de completar cualquier tarea en un visto y no visto.
                    Y con las potentes prestaciones de audio y vídeo y una pantalla Retina 5K deslumbrante, todo lo que hagas estará en otra dimensión.
                <form method="post" action="carrito.php?nombre=iMac Pro&precio=2300">
                    <div class="product-price">2,300 €</div>
                    <div><input type="text" name="cantidad" value="1" /><input type="submit" value="Añadir al carro" class="btnAddAction" /></div>
                </form>
            </div>

        </div>

    </div>

    <?php echo footer; ?>
    <!-- </div> -->
</body>

</html>