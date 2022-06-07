<!DOCTYPE HTML>
<html>
	<head>
		<title>Cadastro de Carro</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}" />
		<link rel="stylesheet" href="{{ asset('css/main.css') }}" />
		<noscript><link rel="stylesheet" href="{{ asset('css/noscript.css') }}" /></noscript>
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
                                <ol>
                                    <li>Carros
                                        <ul>
                                            <li><a href="{{ route('carro.index') }}">Início</a></li>
                                            <li><a href="{{ route('carro.create') }}">Novo Carro</a></li>
                                        </ul>
                                    {{-- </li>
                                    <li>Montadoras
                                        <ul>
                                            <li><a href="{{ route('montadora.index') }}">Início</a></li>
                                            <li><a href="{{ route('montadora.create') }}">Nova montadora</a></li>
                                        </ul>
                                    </li> --}}
                                </ol>
						</div>
					</header>



                    @yield('content')


                    
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
						  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
						</ol>
						<div class="carousel-inner">
						  <div class="carousel-item active">
							<img class="d-block w-100" src="{{ asset('images/slider-image-1-1920x700.jpg') }}" alt="First slide">
						  </div>
						  <div class="carousel-item">
							<img class="d-block w-100" src="{{ asset('images/slider-image-2-1920x700.jpg') }}i" alt="Second slide">
						  </div>
						  <div class="carousel-item">
							<img class="d-block w-100" src="{{ asset('images/slider-image-3-1920x700.jpg') }}" alt="Third slide">
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
	</body>
    

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/main.js"></script>
    </html>
    