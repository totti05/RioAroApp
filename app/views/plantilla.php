<?php
namespace App\views;

?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<meta charset="utf-8">
	<meta autor = "Raul">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="../../vendor/twbs/bootstrap/dist/css/bootstrap.css">


</head>

<header>
	<!--navbar-->
	<?php include "../views/modules/navbar.php";?>
</header>

<body class="text-center bg-light ">

	<!--content-->

	<div class="jumbotron" id="top">
		<div class="container">
			<h1 class="display-3">Hola, bienvenido a nuestra pagina </h1>
			<p>Lorem ipsum dolor sit aet, consectetur adipisicing elit. Optio laborum facilis, suscipit magnam soluta impedit placeat dolor incidunt nesciunt tempora. Illo voluptates expedita quo similique, sunt iusto enim perferendis non. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt pariatur culpa velit id, eum cupiditate dolores deleniti non nihil repudiandae laborum deserunt facere praesentium, blanditiis officia iusto. Ea, quisquam eum. <p>
			<a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
		</div>
	</div>
	<div class="container-fluid segmento p-5" >
			<!-- Example row of columns -->
		<div class="row">
			<div class="col-md-4">
				<h3>Información UPHOLD</h3>
				<p>Información completa de los BTC en UPHOLD</p>
				<p><a class="btn btn-secondary" href="./full_info.html" role="button">View details </a></p>
			</div>
			<div class="col-md-4">
				<h3>Calculadora de ganancias</h3>
				<p>Una calculadora que te dice las ganancias de acuerdo al valor actual y al valor que compraste los BTC </p>
				<p><a class="btn btn-secondary" href="./full_info.html#calculadora" role="button">View details </a></p>
			</div>
			<div class="col-md-4">
				<h3>Criptos </h3>
				<p id="cuidado">Informacion de los valores actuales de las criptos </p>
				<p id="cuidado"><a  role="button" href="" class="btn btn-secondary"> View details</a></p>
			</div>
		</div>
	</div>
			<hr>


		<script src="../../vendor/twbs/bootstrap/dist/js/bootstrap.js"></script> -->
		
		
</body>
<!--footer-->
<footer class="footer ">
	<div class="container">
				<span class="text-muted text-center">Raul App</span>
		</div>
</footer>
</html>


