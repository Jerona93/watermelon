<?php

?>

<script type="text/javascript"> 

</script>

<html>
<head>
<title>Ejercicio</title> <meta charset="utf-8">
<style>
.container {
  width: 100vw;
  height: 100vh;
  text-align: center;
}

.box-container {
  width: 80%;
  margin: 0 auto;
  border: 1px solid red;
}

.box {
  position: relative;
  width: 300px;
  height: 100px;
  background-color: blue;
  color: white;
  float: left;
  margin: 2%;
}
</style>

</head>
<body>

<div class="container">
  <h1>Tienda de Javier</h1>
  <span style="font-size:30px;padding:10px;">Elija una categoría</span><a style="padding-left:100px;" href="carrito.php">Ver Carrito</a>
  
  <div class="box-container">
    <a href="producto1.php"><div class="box"><p style="font-size:30px;">Zapatillas</p></div></a>
    <a href="producto2.php"><div class="box"><p style="font-size:30px;">Pantalones</p></div></a>
    <a href="producto3.php"><div class="box"><p style="font-size:30px;">Chaquetas</p></div></a>
    <a href="producto4.php"><div class="box"><p style="font-size:30px;">Camisetas</p></div></a>
  </div>
</div>
</body>
</html>
