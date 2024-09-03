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
  <link rel="shortcut icon" href="favicon.png">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

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
	<a class="navbar-brand" href="index.php">Silverhand Components<span>.</span></a>

	<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarsFurni">
		<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
			<li class="nav-item active">
				<a class="nav-link" href="index.php">Inicio</a>
			</li>
			<li><a class="nav-link" href="shop.php">Catálogo</a></li>
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
								<h1>Catalogo</h1>
							</div>
						</div>
						<div class="col-lg-7">
							
						</div>
					</div>
				</div>
			</div>
		<!-- End Hero Section -->

		

		<div class="untree_co-section product-section before-footer-section">
		    <div class="container">
		      	<div class="row">

		      		<!-- Start Column 1 -->
					  <div class="col-12 col-md-4 col-lg-3 mb-5">
					<form class="Form" action="back-end/add-to-cart.php" method="POST">
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
		<div class="info-btn-container">
            <button class="more-info-btn" data-target="info-popup-1">Más Info</button>
        </div>
 
        <div id="info-popup-1" class="info-popup">
            <div class="info-popup-content">
                <span class="close-popup">&times;</span>
                <h2>Más Información</h2>
                <p>El Intel® Core i9-14900k es un procesador de alto rendimiento con 16 núcleos y 24 hilos, diseñado para ofrecer una experiencia de computación superior para juegos y aplicaciones profesionales.</p>
            </div>
        </div>
				</div>
					<!-- End Column 1 -->
						
					<!-- Start Column 2 -->
					<div class="col-12 col-md-4 col-lg-3 mb-5">
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
					<div class="info-btn-container">
            <button class="more-info-btn" data-target="info-popup-2">Más Info</button>
        </div>
       
        <div id="info-popup-2" class="info-popup">
            <div class="info-popup-content">
                <span class="close-popup">&times;</span>
                <h2>Más Información</h2>
                <p>El AMD Ryzen™ 9 7900X es un potente procesador para computadoras de escritorio para gaming y streaming que está diseñado con 12 núcleos de CPU y 24 subprocesos, y tiene una velocidad de reloj base de 4,7 GHz.</p>
            </div>
        </div>
				</div>
					<!-- End Column 2 -->

					<!-- Start Column 3 -->
					<div class="col-12 col-md-4 col-lg-3 mb-5">
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
					<div class="info-btn-container">
            <button class="more-info-btn" data-target="info-popup-3">Más Info</button>
        </div>

        <div id="info-popup-3" class="info-popup">
            <div class="info-popup-content">
                <span class="close-popup">&times;</span>
                <h2>Más Información</h2>
                <p>El AMD Ryzen™ 7 7700X es un procesador para computadoras de escritorio para gaming líder que está diseñado con ocho núcleos de CPU y 16 subprocesos, y tiene una velocidad de reloj turbo máxima de hasta 5,4 GHz.</p>
            </div>
        </div>
				</div>
					<!-- End Column 3 -->

					<!-- Start Column 4 -->


					<div class="col-12 col-md-4 col-lg-3 mb-5">
					<form action="back-end/add-to-cart.php" method="POST">
						<input type="hidden" name="product_name" value="PlayStation 5">
						<input type="hidden" name="product_price" value="499.99">
						<input type="hidden" name="product_image" value="images/711719556176-SONY-1200x1200-03.-500x500-removebg-preview.png">
						<button type="submit" class="product-item" style="border: none; background: none;">
							<img src="images/711719556176-SONY-1200x1200-03.-500x500-removebg-preview.png" class="img-fluid product-thumbnail">
							<h3 class="product-title">PlayStation 5</h3>
							<strong class="product-price">$499.99</strong>
							<span class="icon-cross">
								<img src="images/cross.svg" class="img-fluid">
							</span>
						</button>
					</form>
					<div class="info-btn-container">
            <button class="more-info-btn" data-target="info-popup-4">Más Info</button>
        </div>
       
        <div id="info-popup-4" class="info-popup">
            <div class="info-popup-content">
                <span class="close-popup">&times;</span>
                <h2>Más Información</h2>
                <p>Disfruta de tiempos de carga superveloces con un SSD de velocidad ultrarrápida, una experiencia más inmersiva gracias a la compatibilidad con respuesta háptica1, gatillos adaptativos1 y audio 3D1</p>
            </div>
        </div>
				</div>
					<!-- End Column 4 -->


					<!-- Start Column 1 -->
					<div class="col-12 col-md-4 col-lg-3 mb-5">
					<form action="back-end/add-to-cart.php" method="POST">
						<input type="hidden" name="product_name" value="Xbox SX">
						<input type="hidden" name="product_price" value="499.99">
						<input type="hidden" name="product_image" value="images/1203d97e-4bf3-4b06-96e1-02d6cdeac337-removebg-preview.png">
						<button type="submit" class="product-item" style="border: none; background: none;">
							<img src="images/1203d97e-4bf3-4b06-96e1-02d6cdeac337-removebg-preview.png" class="img-fluid product-thumbnail">
							<h3 class="product-title">Xbox SX</h3>
							<strong class="product-price">$499.99</strong>
							<span class="icon-cross">
								<img src="images/cross.svg" class="img-fluid">
							</span>
						</button>
					</form>
					<div class="info-btn-container">
            <button class="more-info-btn" data-target="info-popup-5">Más Info</button>
        </div>
   
        <div id="info-popup-5" class="info-popup">
            <div class="info-popup-content">
                <span class="close-popup">&times;</span>
                <h2>Más Información</h2>
                <p>Esta consola se ha sometido a un riguroso proceso de certificación, se ha probado para confirmar que funciona correctamente y se ha inspeccionado el hardware y la calidad estética. Disfruta de la velocidad y el rendimiento de nueva generación a un gran precio.</p>
            </div>
        </div>
				</div>
					<!-- End Column 1 -->
						
					<!-- Start Column 2 -->
					<div class="col-12 col-md-4 col-lg-3 mb-5">
					<form action="back-end/add-to-cart.php" method="POST">
						<input type="hidden" name="product_name" value="Nintendo Switch">
						<input type="hidden" name="product_price" value="399.99">
						<input type="hidden" name="product_image" value="images/51Gz7IimgoL._AC_SL1024_-removebg-preview.png">
						<button type="submit" class="product-item" style="border: none; background: none;">
							<img src="images/51Gz7IimgoL._AC_SL1024_-removebg-preview.png" class="img-fluid product-thumbnail">
							<h3 class="product-title">Nintendo Switch</h3>
							<strong class="product-price">$399.99</strong>
							<span class="icon-cross">
								<img src="images/cross.svg" class="img-fluid">
							</span>
						</button>
					</form>
					<div class="info-btn-container">
            <button class="more-info-btn" data-target="info-popup-6">Más Info</button>
        </div>
    
        <div id="info-popup-6" class="info-popup">
            <div class="info-popup-content">
                <span class="close-popup">&times;</span>
                <h2>Más Información</h2>
                <p>Nintendo Switch se transforma para adaptarse a tu situación y te permite jugar a los títulos que quieras aunque no tengas mucho tiempo.

Es una nueva era en la que no tienes que adaptar tu vida a los videojuegos: ahora es la consola la que se adapta a tu vida. Proximo Juego Mario y Luigi BrotherShip!</p>
            </div>
        </div>
				</div>
					<!-- End Column 2 -->

					

		      	</div>
		    </div>

	<div class="review-section">

	<div class="container">
<div class="subscription-form">
						<h3 class="d-flex align-items-center"><span class="me-1"><img src="images/envelope-outline.svg" alt="Image" class="img-fluid"></span><span>Comenta Aqui sobre nuestros productos actuales!</span></h3>

						<form action="back-end/submit_review.php" method="post" class="row g-3" id="formulario-pagina">
				
							<div>
								<select name="product_name" class="form-control" id="selectJuego">
									<option  value="" disabled selected>Elige un producto</option>
									<option value="Intel® Core i9-14900k">Intel® Core i9-14900k</option>
									<option  value="AMD Ryzen™ 9 7900X">AMD Ryzen™ 9 7900X</option>
									<option  value="AMD Ryzen™ 7 7700X">AMD Ryzen™ 7 7700X</option>
									<option  value="PlayStation 5">PlayStation 5</option>
									<option  value="XBOX Series XS">XBOX Series X/S</option>
									<option  value="Nintendo Switch">Nintendo Switch</option>
								</select>
							</div>
							<div class="col-auto">
								<label for="rating">Rating:</label>
       						<input type="number" name="rating" min="1" max="5" required>
							</div>
							<div class="col-auto">
								<label for="review">Review:</label>
        					<textarea name="review" required></textarea>
							</div>
       						 
							<div class="col-auto">
								<button class="btn btn-primary">
									<span class="fa fa-paper-plane"></span>
								</button>
							</div>
						</form>
					</div>
					</div>
					<div class="container">
					<div id="resultados" class="blog-section">
    <div class="container">
        <div class="row">
            <div class="p-3 p-lg-5 border bg-white">
                <table class="table site-block-order-table mb-5">
                    <thead>
                        <tr>
                            <th>Producto</th>
                            <th>Rating</th>
                            <th>Review</th>
                            <th>TimeStamp</th>
                        </tr>
                    </thead>
                    <tbody id="tablebody">
                        <?php
						include 'back-end/get_reviews.php';
                        if ($allItemsArray) {
                            foreach ($allItemsArray as $review) {
                                echo '<tr>';
                                echo '<td>' . htmlspecialchars($review['product_name']) . '</td>';
                                echo '<td>' . htmlspecialchars($review['rating']) . '</td>';
                                echo '<td>' . htmlspecialchars($review['review']) . '</td>';
                                echo '<td>' . htmlspecialchars($review['timestamp']) . '</td>';
                                echo '</tr>';
                            }
                        } else {
                            echo '<tr><td colspan="4">No reviews yet.</td></tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>


		</div>
		<!-- Start Footer Section -->
		<footer class="footer-section">
		<div class="container relative">
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
		<script src="js/shop.js"></script>
	</body>

</html>
