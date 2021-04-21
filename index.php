<?php
include "db/db.php";
 include "descarga.php";
 ?>
<!doctype html>
<html lang="es">
<head>
	<!-- Informació Meta -->
	<meta charset="utf-8"/>
	<meta name="description" content="Lorem Ipsum">
	<meta name="keywords" content="Lorem, Ipsum">
	<meta name="author" content="Lorem Ipsum">

	<!-- Enllaç a l'arxiu CSS Extern -->
	<link rel="stylesheet" href="css/style.css" type="text/css"/>

	<!--CSS Intern-->
	<style type="text/css">

	</style>

	<!-- Enllaç a Javascript Extern -->
	<script  type="text/javascript" src="js/javascript.js"></script>
		<!--JQUERY -->
		<script type="text/javascript" src="js/jquery-3.6.0.min.js" ></script>

<!-- External checkuser JS -->
<script  type="text/javascript" src="js/checkuser.js"></script>


	<!-- favicon -->
	<link href="img/favicon.png" rel="icon" type="image/png" />

	<!-- Títol de la pàgina -->
	<title>Títol de la pàgina</title>
</head>
<body>
	<header></header>
	<section>
		<article>
			<h2>EVALUACION MF0492_3</h2>
			<form onsubmit="return validar_form();" action="action/action.php" method="POST">
				<label>Item: </label>
				<input type="text" name="item" id="item" onblur="validar_item()" oninput="check()">
				<p id="mensaje_item"></p>
				<span id="missatge"></span>
		    <p><img src="img/preloader.gif" id="preloader" style="display:none" ></p>

				<label>stock</label>
				<input type="text" name="stock" id="stock" onblur="validar_stock()">
				<p id="mensaje_stock"></p>
				
				<input type="submit">
			</form>
			<div>

		<?php
		echo printtable();
		?>
		
		<?php
		 echo downloadtable();
		?>
		
				
			</div>
		</article>
	</section>
	<footer></footer>
</body>
</html>
