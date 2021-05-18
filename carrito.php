<!DOCTYPE html>
<html lang="es-ES">

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
<header style="padding-top: 1px;">
	<nav>
		<ul>
			<li>
				<a href="index.php"><i class="fab fa-f368"></i><img src="images/watermelon.png" style="width: 40px" /></a>
			</li>

			<li class="navv"><a href="#product-Mac">Mac</a></li>
			<li class="navv"><a href="#product-iPad">iPad</a></li>
			<li class="navv"><a href="#product-iPhone">iPhone</a></li>
			<li class="navv"><a href="#product-Watch">Watch</a></li>
			<li class="navv"><a href="#product-TV">TV</a></li>
			<li class="navv"><a href="#product-Music">Music</a></li>
			<li class="navv"><a href="#product-support">Support</a></li>
			<li class="navv">
				<a href="#"><i class="fas fa-search"></i></a>
			</li>

			<li class="navv">
				<a href="#" id="cart"><i class="fa fa-shopping-cart"></i> Cart <span class="badge">3</span></a>
			</li>

			<li class="navv">
				<a href="index2.php"><i class="fas fa-shopping-bag"></i></a>
			</li>
			<li class="navv">
				<a href="login.php"><i class="fa fa-user"></i></a>
			</li>
		</ul>
	</nav>
</header>

<body>
	<div class="bcarrito">
		<?php

		$aCarrito = array();
		$sHTML = '';
		$fPrecioTotal = 0;
		$existe = 0;

		//Vaciar
		if (isset($_GET['vaciar'])) {
			unset($_COOKIE['carrito']);
			$sHTML .= '<h2>El carrito está vacio, !!ve a comprar algo!!</h2>';
		}

		//Productos anteriores
		if (isset($_COOKIE['carrito'])) {
			$aCarrito = unserialize($_COOKIE['carrito']);
		}

		//nuevo producto
		if (isset($_GET['nombre']) && isset($_GET['precio'])) {


			for ($i = 0; $i < sizeof($aCarrito); $i++) {
				if ($aCarrito[$i]['nombre'] == $_GET['nombre']) {
					$aCarrito[$i]['cantidad'] = $aCarrito[$i]['cantidad'] + 1;
					$existe = 1;
				}
			}



			if ($existe == 0) {
				$iUltimaPos = count($aCarrito);
				$aCarrito[$iUltimaPos]['nombre'] = $_GET['nombre'];
				$aCarrito[$iUltimaPos]['precio'] = $_GET['precio'];
				$aCarrito[$iUltimaPos]['cantidad'] = $_POST['cantidad'];
			}
		}

		//cookie que dure un día
		$iTemCad = time() + (86400);
		setcookie('carrito', serialize($aCarrito), $iTemCad);



		// contenido del array
		$sHTML .= '<table border="1"; >';
		$sHTML .= '<tr><td><b>Nombre</b></td><td><b>Precio</b></td><td><b>Cantidad</b></td></tr>';


		foreach ($aCarrito as $key => $value) {
			$sHTML .= '<tr>';
			// $sHTML .= '<td>' . $value['nombre'] . '</td><td>' . $value['precio'] * $value['cantidad'] . '</td><td>' . $value['cantidad']  . '</td>';
			$sHTML .= '<td>' . $value['nombre'] . '</td><td>' . $value['cantidad']  . '</td>' . '</td><td>' . $value['precio'] * $value['cantidad'];
			$sHTML .= '</tr>';

			$fPrecioTotal += $value['precio'] * $value['cantidad'];
		}

		$sHTML .= '</table>';

		//Imprimimos el precio total

		




		?>
	</div>




	<center>
		<div>
			<h2>Carrito </h2>
			<?php
			if ($fPrecioTotal > 0) {
				$sHTML .= '<br>------------------<br>Precio total: ' . $fPrecioTotal . ' €';
			} 

			echo $sHTML;

			?>

		</div>
	</center>
	<br>


	<div class="botones">
		<button onclick="location.href='carrito.php?vaciar=1'" type="button">Vaciar el carrito</button>
	</div>


	<div class="botones">
		<button onclick="location.href='index.php'" type="button">Volver al Menu</button>
	</div>


	<br><br>

	<!-- CARRITO NUEVO -->



</body>

</html>