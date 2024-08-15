<!-- /*
* Bootstrap 5
* Template Name: Furni
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Untree.co">
	<link rel="shortcut icon" href="images/05b797331b8e29dea04657dd7fc7d3c86554cd8fr1-630-630v2_hq-removebg-preview.png">

	<meta name="description" content="" />
	<meta name="keywords" content="bootstrap, bootstrap4" />
	<script src="js/main.js" defer="defer"></script>

	<!-- Bootstrap CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
	<link href="css/tiny-slider.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<title>Silverhand Components</title>
</head>

<body>

	<!-- Start Header/Navigation -->
	<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar" id="menu">

		<div class="container" id="menu-navegacion">
			<img src="images/05b797331b8e29dea04657dd7fc7d3c86554cd8fr1-630-630v2_hq-removebg-preview.png" class="img-fluid" id="foto-logo">
			<a class="navbar-brand" href="index.html">Silverhand Components<span>.</span></a>

			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarsFurni">
				<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
					<li class="nav-item active">
						<a class="nav-link" href="index.html">Inicio</a>
					</li>
					<li><a class="nav-link" href="#catalogo">Catálogo</a></li>
					<li><a class="nav-link" href="#about-us">Acerca de nosotros</a></li>
					<li><a class="nav-link" href="#servicios">Servicios</a></li>
					<li><a class="nav-link" href="#noticias">Noticias</a></li>
				</ul>

				<ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
					<li><a class="nav-link" href="#"><img src="images/user.svg"></a></li>
					<li><a class="nav-link" href="cart.php"><img src="images/cart.svg"></a></li>
				</ul>
			</div>
		</div>

	</nav>
	<!-- End Header/Navigation -->

	<!-- Start Hero Section -->
	<div class="hero">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-lg-5">
					<div class="intro-excerpt">
						<h1>Nuevas tarjetas gráficas serie <span clsas="d-block">RTX 40</span></h1>
						<p class="mb-4">Las GPUs NVIDIA® GeForce RTX™ Serie 40 son más que rápidas para los jugadores y los creadores. Están impulsadas por
							la arquitectura ultra eficiente NVIDIA Ada Lovelace que ofrece un salto cuántico tanto en rendimiento como en gráficos impulsados por IA.</p>
						<p><a href="" class="btn btn-secondary me-2">Reservar ahora</a><a href="#" class="btn btn-white-outline">Ver catálogo</a></p>
					</div>
				</div>
				<div class="col-lg-7">
					<div class="hero-img-wrap">
						<img src="images/geforce-ada-4090-web-og-1200x630.jpg" class="img-fluid" id="foto-portada">
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Hero Section -->

	<!-- Start Product Section -->
	<div class="product-section" id="catalogo">
		<div class="container">
			<div class="row">

				<!-- Start Column 1 -->
				<div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
					<h2 class="mb-4 section-title">Nuevos procesadores Intel y AMD en el catálogo</h2>
					<p class="mb-4">Descubre los últimos procesadores Intel y AMD en nuestra tienda. Ya sea para gaming, diseño o programación, tenemos el modelo perfecto para ti. </p>
					<p><a href="shop.html" class="btn">Ver catálogo</a></p>
				</div>
				<!-- End Column 1 -->

				<!-- Start Column 2 -->
				<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
					<form action="back-end/add-to-cart.php" method="POST">
						<input type="hidden" name="product_name" value="Intel® Core i9-14900k">
						<input type="hidden" name="product_price" value="548.99">
						<input type="hidden" name="product_image" value="images/Intel-i9-14900k-01-removebg-preview.png">
						<button type="submit" class="product-item" style="border: none; background: none;">
							<img src="images/Intel-i9-14900k-01-removebg-preview.png" class="img-fluid product-thumbnail">
							<h3 class="product-title">Intel® Core i9-14900k</h3>
							<strong class="product-price">$548.99</strong>
							<span class="icon-cross">
								<img src="images/cross.svg" class="img-fluid">
							</span>
						</button>
					</form>
				</div>
				<!-- End Column 2 -->

				<!-- Start Column 3 -->
				<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
					<form action="back-end/add-to-cart.php" method="POST">
						<input type="hidden" name="product_name" value="AMD Ryzen™ 9 7900X">
						<input type="hidden" name="product_price" value="365.55">
						<input type="hidden" name="product_image" value="images/2505503-ryzen-9-7900x-removebg-preview.png">
						<button type="submit" class="product-item" style="border: none; background: none;">
							<img src="images/2505503-ryzen-9-7900x-removebg-preview.png" class="img-fluid product-thumbnail">
							<h3 class="product-title">AMD Ryzen™ 9 7900X</h3>
							<strong class="product-price">$365.55</strong>
							<span class="icon-cross">
								<img src="images/cross.svg" class="img-fluid">
							</span>
						</button>
					</form>
				</div>
				<!-- End Column 3 -->

				<!-- Start Column 4 -->
				<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
					<form action="back-end/add-to-cart.php" method="POST">
						<input type="hidden" name="product_name" value="AMD Ryzen™ 7 7700X">
						<input type="hidden" name="product_price" value="277.85">
						<input type="hidden" name="product_image" value="images/2505503-ryzen-7-7700x-removebg-preview.png">
						<button type="submit" class="product-item" style="border: none; background: none;">
							<img src="images/2505503-ryzen-7-7700x-removebg-preview.png" class="img-fluid product-thumbnail">
							<h3 class="product-title">AMD Ryzen™ 7 7700X</h3>
							<strong class="product-price">$277.85</strong>
							<span class="icon-cross">
								<img src="images/cross.svg" class="img-fluid">
							</span>
						</button>
					</form>
				</div>
				<!-- End Column 4 -->

			</div>
		</div>
	</div>
	<!-- End Product Section -->

	<!-- Start Why Choose Us Section -->
	<div class="why-choose-section" id="about-us">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-lg-6">
					<h2 class="section-title">¿Por qué elegirnos?</h2>
					<p>En nuestra tienda, ofrecemos solo lo mejor en tecnología para asegurarte un rendimiento superior y una experiencia inigualable. Aquí te contamos por qué somos tu mejor opción.</p>

					<div class="row my-5">
						<div class="col-6 col-md-6">
							<div class="feature">
								<div class="icon">
									<img src="images/nvidia-logo-nvidia-icon-free-free-vector.jpg" alt="Image" class="imf-fluid" id="nvidia-logo">
								</div>
								<h3>Tecnología NVIDIA®</h3>
								<p>Disfruta de la potencia gráfica sin igual con nuestras tarjetas NVIDIA, perfectas para gamers y profesionales que buscan llevar sus gráficos al siguiente nivel.</p>
							</div>
						</div>

						<div class="col-6 col-md-6">
							<div class="feature">
								<div class="icon">
									<img src="images/Logo-AMD.png" alt="Image" class="imf-fluid" id="amd-logo">
									<img src="images/intel-logo-intel-icon-free-free-vector-removebg-preview.png" alt="Image" class="imf-fluid" id="intel-logo">
								</div>
								<h3>Procesadores Intel® y AMD®</h3>
								<p>Encuentra la última generación de procesadores Intel y AMD, ideales para todas tus necesidades de gaming, diseño y programación. Garantizamos productos originales y actualizados.</p>
							</div>
						</div>

						<div class="col-6 col-md-6">
							<div class="feature">
								<div class="icon">
									<img src="images/playstation_logo_icon_181403.png" alt="Image" class="imf-fluid" id="psn-logo">
									<img src="images/xbox_logo_icon_249150.png" alt="Image" class="imf-fluid" id="xbox-logo">
									<img src="images/png-transparent-nintendo-switch-gamecube-logo-nintendo-text-rectangle-nintendo.png" alt="Image" class="imf-fluid" id="nintendosw-logo">
								</div>
								<h3>Consolas de Videojuegos</h3>
								<p>Para los amantes de los videojuegos, ofrecemos una amplia selección de consolas Playstation, XBOX y Nintendo Switch. La mejor tecnología para tus momentos de ocio.</p>
							</div>
						</div>

						<div class="col-6 col-md-6">
							<div class="feature">
								<div class="icon">
									<img src="images/truck.svg" alt="Image" class="imf-fluid" id="truck-logo">
								</div>
								<h3>Servicio de Entrega Rápido y Seguro</h3>
								<p>Nuestro compromiso es que recibas tus productos de forma rápida y segura. Con nosotros, tu compra llega a tiempo y en perfectas condiciones.</p>
							</div>
						</div>

					</div>
				</div>

				<div class="col-lg-5">
					<div class="img-wrap">
						<img src="images/call-of-duty-black-ops-6-hd-wallpaper-uhdpaper.com-850@0@j.png" alt="Image" class="img-fluid" id="imagen-bo6">
					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- End Why Choose Us Section -->

	<!-- Start We Help Section -->
	<div class="we-help-section" id="servicios">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-lg-7 mb-5 mb-lg-0">
					<div class="imgs-grid">
						<div class="grid grid-1"><img src="images/designs-by-ifr-z690-formula-1000x800.png" alt="Untree.co"></div>
						<div class="grid grid-2"><img src="images/1366_2000.jpg" alt="Untree.co"></div>
						<div class="grid grid-3"><img src="images/7a05e88ed3f88b044ff8bbd7a2d7ea77.jpg" alt="Untree.co"></div>
					</div>
				</div>
				<div class="col-lg-5 ps-lg-5">
					<h2 class="section-title mb-4">Servicios</h2>
					<p>En nuestra tienda, no solo encontrarás los mejores componentes de PC y consolas de videojuegos, sino también una gama completa de servicios diseñados para mejorar tu experiencia de compra y uso. Nos comprometemos a ofrecerte una atención personalizada, soluciones técnicas y beneficios exclusivos que te aseguren el máximo rendimiento y satisfacción con cada adquisición. ¡Descubre todo lo que tenemos para ofrecerte!</p>

					<ul class="list-unstyled custom-list my-4">
						<li>Asesoría personalizada</li>
						<li>Ventas y Ofertas Exclusivas</li>
						<li>Garantía y Sopórte Técnico</li>
						<li>Política de devoluciones</li>
					</ul>
					<p><a herf="#" class="btn">Más información</a></p>
				</div>
			</div>
		</div>
	</div>
	<!-- End We Help Section -->

	<!-- Start Popular Product -->
	<div class="popular-product">
		<div class="container">
			<div class="row">

				<div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
					<div class="product-item-sm d-flex">
						<div class="thumbnail">
							<img src="images/711719556176-SONY-1200x1200-03.-500x500-removebg-preview.png" alt="Image" class="img-fluid" id="ps5-console">
						</div>
						<div class="pt-3">
							<h3>PlayStation 5</h3>
							<p>Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio </p>
							<p><a href="#">Ver producto</a></p>
						</div>
					</div>
				</div>

				<div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
					<div class="product-item-sm d-flex">
						<div class="thumbnail">
							<img src="images/1203d97e-4bf3-4b06-96e1-02d6cdeac337-removebg-preview.png" alt="Image" class="img-fluid" id="xbox-console">
						</div>
						<div class="pt-3">
							<h3>XBOX Series X/S</h3>
							<p>Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio </p>
							<p><a href="#">Ver producto</a></p>
						</div>
					</div>
				</div>

				<div class="col-12 col-md-6 col-lg-4 mb-4 mb-lg-0">
					<div class="product-item-sm d-flex">
						<div class="thumbnail">
							<img src="images/51Gz7IimgoL._AC_SL1024_-removebg-preview.png" alt="Image" class="img-fluid" id="nintendosw-console">
						</div>
						<div class="pt-3">
							<h3>Nintendo Switch</h3>
							<p>Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio </p>
							<p><a href="#">Ver producto</a></p>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- End Popular Product -->

	<!-- Start Testimonial Slider -->
	<div class="testimonial-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 mx-auto text-center">
					<h2 class="section-title">Comentarios</h2>
				</div>
			</div>

			<div class="row justify-content-center">
				<div class="col-lg-12">
					<div class="testimonial-slider-wrap text-center">

						<div id="testimonial-nav">
							<span class="prev" data-controls="prev"><span class="fa fa-chevron-left"></span></span>
							<span class="next" data-controls="next"><span class="fa fa-chevron-right"></span></span>
						</div>

						<div class="testimonial-slider">

							<div class="item">
								<div class="row justify-content-center">
									<div class="col-lg-8 mx-auto">

										<div class="testimonial-block text-center">
											<blockquote class="mb-5">
												<p>&ldquo;¡Increíble servicio y productos de alta calidad! Compré un nuevo procesador y tarjeta gráfica para mi PC de gaming y estoy impresionado con el rendimiento. Además, el soporte técnico fue muy útil cuando tuve algunas preguntas sobre la instalación. Definitivamente recomendaré esta tienda a todos mis amigos. ¡Gracias por todo!&rdquo;</p>
											</blockquote>

											<div class="author-info">
												<div class="author-pic">
													<img src="images/tumblr_7073634b7db819b8d31083eae0cc73ba_13b50b63_1280.png" alt="Recticos" class="img-fluid">
												</div>
												<h3 class="font-weight-bold">Recticos</h3>
												<span class="position d-block mb-3">Jugador profesional de Valorant</span>
											</div>
										</div>

									</div>
								</div>
							</div>
							<!-- END item -->

							<div class="item">
								<div class="row justify-content-center">
									<div class="col-lg-8 mx-auto">

										<div class="testimonial-block text-center">
											<blockquote class="mb-5">
												<p>&ldquo;La mejor tienda para cualquier entusiasta de la tecnología. Recientemente adquirí una PlayStation 5 y algunos juegos. La entrega fue rápida y todo llegó en perfecto estado. Además, tuve un problema con mi PC y el equipo de soporte técnico lo resolvió en poco tiempo. ¡Cinco estrellas sin duda!&rdquo;</p>
											</blockquote>

											<div class="author-info">
												<div class="author-pic">
													<img src="images/ArthurMorgan.png" alt="Arthur Morgan" class="img-fluid">
												</div>
												<h3 class="font-weight-bold">Arthur Morgan</h3>
												<span class="position d-block mb-3">Miembro de la banda Van der Linde</span>
											</div>
										</div>

									</div>
								</div>
							</div>
							<!-- END item -->

							<div class="item">
								<div class="row justify-content-center">
									<div class="col-lg-8 mx-auto">

										<div class="testimonial-block text-center">
											<blockquote class="mb-5">
												<p>&ldquo;Excelente experiencia de compra. Compré un kit de actualización de RAM y un SSD para mejorar el rendimiento de mi ordenador. La tienda ofrece precios competitivos y un servicio al cliente excepcional. También aproveché su servicio de soporte técnico y quedé muy satisfecho con la rapidez y profesionalidad. ¡Altamente recomendados!&rdquo;</p>
											</blockquote>

											<div class="author-info">
												<div class="author-pic">
													<img src="images/b836111a7d770077d6721dbc2ff3a3b6.png" alt="Gojo Satoru" class="img-fluid">
												</div>
												<h3 class="font-weight-bold">Gojo Satoru</h3>
												<span class="position d-block mb-3">Streamer de Twitch</span>
											</div>
										</div>

									</div>
								</div>
							</div>
							<!-- END item -->

						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Testimonial Slider -->

	<!-- Start Blog Section -->
	<div class="blog-section" id="noticias">
		<div class="container">
			<div class="row mb-5">
				<div class="col-md-6">
					<h2 class="section-title">Últimas noticias</h2>
				</div>
				<div class="col-md-6 text-start text-md-end">
					<a href="#" class="more">Mirar todas las noticias</a>
				</div>
			</div>

			<div class="row">

				<div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
					<div class="post-entry">
						<a href="#" class="post-thumbnail"><img src="images/71d4d17edcd49703a5ea446cc0e588e6.jpg" alt="Image" class="img-fluid" id="imagen-noticias"></a>
						<div class="post-content-entry">
							<h3><a href="#">Rockstar Games anuncia el nuevo juego de la saga Grand Theft Auto</a></h3>
							<div class="meta">
								<span>by <a href="#">Peter Parker</a></span> <span>on <a href="#">Dec 12, 2023</a></span>
							</div>
						</div>
					</div>
				</div>

				<div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
					<div class="post-entry">
						<a href="#" class="post-thumbnail"><img src="images/jZbskesRhzALfcqHx9eiDb.jpg" alt="Image" class="img-fluid" id="imagen-noticias"></a>
						<div class="post-content-entry">
							<h3><a href="#">FromSoftware revela la fecha de lanzamiento para el DLC de Elden Ring</a></h3>
							<div class="meta">
								<span>by <a href="#">Eddie Brock</a></span> <span>on <a href="#">Dec 13, 2023</a></span>
							</div>
						</div>
					</div>
				</div>

				<div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
					<div class="post-entry">
						<a href="#" class="post-thumbnail"><img src="images/3280ef72-2f01-456f-b11a-cafc741d6fdb_16-9-discover-aspect-ratio_default_0.jpg" alt="Image" class="img-fluid" id="imagen-noticias"></a>
						<div class="post-content-entry">
							<h3><a href="#">Nuevo avance de Metal Gear Solid Delta: Snake Eater en la XBOX Showcase</a></h3>
							<div class="meta">
								<span>by <a href="#">Jackie Welles</a></span> <span>on <a href="#">Dec 15, 2023</a></span>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- End Blog Section -->

	<!-- Start Footer Section -->
	<footer class="footer-section">
		<div class="container relative">

			<div class="sofa-img">
				<img src="images/8-bit-sushi-cats-art-bdjin4h9ax5b3kbb.gif" alt="Image" class="img-fluid" id="bit-gif">
			</div>

			<div class="row">
				<div class="col-lg-8">
					<div class="subscription-form">
						<h3 class="d-flex align-items-center"><span class="me-1"><img src="images/envelope-outline.svg" alt="Image" class="img-fluid"></span><span>¡Participa y elige el próximo juego de eSports para ganar recompensas</span></h3>

						<form action="#" class="row g-3" id="formulario-pagina">
							<div class="col-auto">
								<input type="text" class="form-control" placeholder="Ingresa tu nombre" id="inputNombre">
							</div>
							<div class="col-auto">
								<input type="email" class="form-control" placeholder="Ingresa tu correo" id="inputCorreo">
							</div>
							<div>
								<select class="form-control" id="selectJuego">
									<option value="" disabled selected>Elige un videojuego</option>
									<option value="League of Legends">League of Legends</option>
									<option value="Dota 2">Dota 2</option>
									<option value="CS GO">Counter-Strike: Global Offensive</option>
									<option value="Fortnite">Fortnite</option>
									<option value="Valorant">Valorant</option>
								</select>
							</div>
							<div class="col-auto">
								<button class="btn btn-primary">
									<span class="fa fa-paper-plane"></span>
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>

			<div id="resultados" class="blog-section">
				<div class="container">
					<div class="row">
						<div class="p-3 p-lg-5 border bg-white">
							<table class="table site-block-order-table mb-5">
								<thead>
									<th> Videojuego </th>
									<th> Conteo </th>
								</thead>
								<tbody id="tablebody">
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>

			<div class="row g-5 mb-5">
				<div class="col-lg-4">
					<div class="mb-4 footer-logo-wrap"><a href="#" class="footer-logo">Silverhand Components<span>.</span></a></div>
					<p class="mb-4">En Silverhan Components, somos apasionados por la tecnología y ofrecemos lo mejor en componentes de PC, consolas de videojuegos y soporte técnico especializado. Trabajamos con marcas líderes para garantizar productos de alta calidad y rendimiento superior.</p>

					<ul class="list-unstyled custom-social">
						<li><a href="#"><span class="fa fa-brands fa-facebook-f"></span></a></li>
						<li><a href="#"><span class="fa fa-brands fa-twitter"></span></a></li>
						<li><a href="#"><span class="fa fa-brands fa-instagram"></span></a></li>
						<li><a href="#"><span class="fa fa-brands fa-discord"></span></a></li>
					</ul>
				</div>

				<div class="col-lg-8">
					<div class="row links-wrap">
						<div class="col-6 col-sm-6 col-md-3">
							<ul class="list-unstyled">
								<li><a href="#">Acerca de nosotros</a></li>
								<li><a href="#">Servicios</a></li>
								<li><a href="#">Noticias</a></li>
								<li><a href="#">Contáctenos</a></li>
							</ul>
						</div>

						<div class="col-6 col-sm-6 col-md-3">
							<ul class="list-unstyled">
								<li><a href="#">Soporte</a></li>
								<li><a href="#">Catálogo</a></li>
								<li><a href="#">Live chat</a></li>
							</ul>
						</div>

						<div class="col-6 col-sm-6 col-md-3">
							<ul class="list-unstyled">
								<li><a href="#">Trabajos</a></li>
								<li><a href="#">Nuestro equipo</a></li>
								<li><a href="#">Objetivos</a></li>
								<li><a href="#">Política de privacidad</a></li>
							</ul>
						</div>

						<div class="col-6 col-sm-6 col-md-3">
							<ul class="list-unstyled">
								<li><a href="#">Tarjetas gráficas RTX</a></li>
								<li><a href="#">Procesadores Intel</a></li>
								<li><a href="#">Ofertas exclusivas</a></li>
							</ul>
						</div>
					</div>
				</div>

			</div>

			<div class="border-top copyright">
				<div class="row pt-4">
					<div class="col-lg-6">
						<p class="mb-2 text-center text-lg-start">Copyright &copy;<script>
								document.write(new Date().getFullYear());
							</script>. All Rights Reserved. &mdash; Designed with love by <a href="https://untree.co">Untree.co</a> Distributed By <a hreff="https://themewagon.com">ThemeWagon</a> <!-- License information: https://untree.co/license/ -->
						</p>
					</div>

					<div class="col-lg-6 text-center text-lg-end">
						<ul class="list-unstyled d-inline-flex ms-auto">
							<li class="me-4"><a href="#">Terms &amp; Conditions</a></li>
							<li><a href="#">Privacy Policy</a></li>
						</ul>
					</div>

				</div>
			</div>

		</div>
	</footer>
	<!-- End Footer Section -->


	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/tiny-slider.js"></script>
	<script src="js/custom.js"></script>
</body>

</html>