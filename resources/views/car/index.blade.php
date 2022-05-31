@extends('base')

@section('content')

<!DOCTYPE HTML>
<html>
	<head>
		<title>Cadastro de Carro</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->
								<a href="index.html" class="logo">
									<span class="fa fa-car"></span> <span class="title">SITE DE CADASTRO DE CARRO</span>
								</a>
						</div>
					</header>

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<!-- About Us -->
							<header id="inner">
								<h1>Cadastro de carros</h1>
								<p>Cadastro dos carros mais malados da America Latina</p>
							</header>
							<form>	
								<!-- Nome input -->
								<div class="form-outline mb-4">
									<label class="form-label" for="nomeCarro">Nome do Carro</label>
									<input type="text" id="nomeCarro" class="form-control" />
								</div>

								<!-- Modelo input -->
								<div class="form-outline mb-4">
									<label class="form-label" for="modeloCarro">Modelo do Carro</label>
									<input type="text" id="modeloCarro" class="form-control" />
								</div>	
								
								<!-- ano- input -->
								<div class="form-outline mb-4">
									<label class="form-label" for="anoCarro">Ano do Carro</label>
									<input type="number" id="anoCarro" class="form-control" />
								</div>	

								<!-- cor input -->
								<div class="form-outline mb-4">
									<label class="form-label" for="corCarro">Cor do Carro</label>
									<input type="text" id="corCarro" class="form-control" />
								</div>
								<button type="submit" class="btn btn-primary btn-block mb-4">Cadastrar</button>
							</form>
							<br>
					</div>
					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
						  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
						</ol>
						<div class="carousel-inner">
						  <div class="carousel-item active">
							<img class="d-block w-100" src="images/slider-image-1-1920x700.jpg" alt="First slide">
						  </div>
						  <div class="carousel-item">
							<img class="d-block w-100" src="images/slider-image-2-1920x700.jpg" alt="Second slide">
						  </div>
						  <div class="carousel-item">
							<img class="d-block w-100" src="images/slider-image-3-1920x700.jpg" alt="Third slide">
						  </div>
						</div>
						<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
						  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
						  <span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						  <span class="carousel-control-next-icon" aria-hidden="true"></span>
						  <span class="sr-only">Next</span>
						</a>
					  </div>
			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>

@endsection