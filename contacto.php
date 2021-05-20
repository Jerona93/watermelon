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
    <!-- <?php
    // $prueba = BASE_URL ;
    // $url = $_SERVER['PHP_SELF'];
    // if ($url == $url) {
    //     echo $url;
    // }
    // if ($url == '/watermelon/contacto.php') {
    //     echo "nooooooooo";
    //     echo $prueba;
    // }

    ?> -->
    <?php echo contacto; ?>
<!-- FOOTER!! -->
    <?php echo footer; ?>
    
</body>

</html>