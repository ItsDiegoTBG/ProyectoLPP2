<!-- /*
* Bootstrap 5
* Template Name: Furni
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->

<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Untree.co">
	<link rel="shortcut icon" href="images/05b797331b8e29dea04657dd7fc7d3c86554cd8fr1-630-630v2_hq-removebg-preview.png">

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
	<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

		<div class="container">
			<img src="images/05b797331b8e29dea04657dd7fc7d3c86554cd8fr1-630-630v2_hq-removebg-preview.png" class="img-fluid" id="foto-logo">
			<a class="navbar-brand" href="index.html">Silverhand Components<span>.</span></a>

			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarsFurni">
				<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
					<li class="nav-item ">
						<a class="nav-link" href="index.php">Inicio</a>
					</li>
					<li><a class="nav-link" href="index.php">Catálogo</a></li>
					<li><a class="nav-link" href="index.php">Acerca de nosotros</a></li>
					<li><a class="nav-link" href="index.php">Servicios</a></li>
					<li><a class="nav-link" href="index.php">Noticias</a></li>
				</ul>

				<ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
					<li><a class="nav-link" href="#"><img src="images/user.svg"></a></li>
					<li><a class="nav-link" href="cart.html"><img src="images/cart.svg"></a></li>
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
						<h1>Carrito de compras</h1>
					</div>
				</div>
				<div class="col-lg-7">

				</div>
			</div>
		</div>
	</div>
	<!-- End Hero Section -->



	<div class="untree_co-section before-footer-section">
		<div class="container">
			<div class="row mb-5">
				<form class="col-md-12" method="post">
					<div class="site-blocks-table">
						<table class="table">
							<thead>
								<tr>
									<th class="product-thumbnail">Imágen</th>
									<th class="product-name">Producto</th>
									<th class="product-price">Precio</th>
									<th class="product-quantity">Cantidad</th>
									<th class="product-total">Total</th>
									<th class="product-remove">Remover</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$final_price = 0;
								if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) { 

									foreach ($_SESSION['cart'] as $key => $item) {
										$total_price = $item['price'] * $item['quantity'];
										$final_price += $total_price; 

										$final_quantity = $item['quantity'];
								?>
										<tr>
											<td class="product-thumbnail">
												<img src="<?php echo $item['image']; ?>" alt="Image" class="img-fluid">
											</td>
											<td class="product-name">
												<h2 class="h5 text-black"><?php echo $item['name']; ?></h2>
											</td>
											<td>$<?php echo number_format($item['price'], 2); ?></td>
											<td>
												<div class="input-group mb-3 d-flex align-items-center quantity-container" style="max-width: 120px;">
													<div class="input-group-prepend">
														<button class="btn btn-outline-black decrease" type="button" onclick="updateQuantity(<?php echo $key; ?>, 'decrease')">&minus;</button>
													</div>
													<input type="text" class="form-control text-center quantity-amount" value="<?php echo $item['quantity']; ?>" readonly id="quantity-<?php echo $key; ?>">
													<div class="input-group-append">
														<button class="btn btn-outline-black increase" type="button" onclick="updateQuantity(<?php echo $key; ?>, 'increase')">&plus;</button>
													</div>
												</div>
											</td>
											<td>
												<span class="product-total-price" id="total-<?php echo $key; ?>" data-price="<?php echo $item['price']; ?>">
													$<?php echo number_format($total_price, 2); ?>
												</span>
											</td>
											<td>
												<a href="javascript:void(0);" class="btn btn-black btn-sm" onclick="removeItem(this, '<?php echo $key; ?>')">X</a>
											</td>
										</tr>
									<?php
									}
								} else {
									echo "<tr><td colspan='6'>El carrito está vacío.</td></tr>";
								}
								?>
							</tbody>
						</table>
					</div>
				</form>
			</div>

			<div class="row">
				<div class="col-md-6">
					<div class="row mb-5">
						<div class="col-md-6">
							<button class="btn btn-outline-black btn-sm btn-block" onclick="window.location.href='index.php';">Continuar comprando</button>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<label class="text-black h4" for="coupon">Cupón</label>
							<p>Ingresa un cupón para obtener un descuento</p>
						</div>
						<div class="col-md-8 mb-3 mb-md-0">
							<input type="text" class="form-control py-3" id="coupon" placeholder="Código de cupón">
						</div>
						<div class="col-md-4">
							<button class="btn btn-black" onclick="applyCoupon()">Aplicar cupón</button>
						</div>
					</div>
				</div>
				<div class="col-md-6 pl-5">
					<div class="row justify-content-end">
						<div class="col-md-7">
							<div class="row">
								<div class="col-md-12 text-right border-bottom mb-5">
									<h3 class="text-black h4 text-uppercase">Total del carrito</h3>
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-md-6">
									<span class="text-black">Subtotal</span>
								</div>
								<div class="col-md-6 text-right">
									<strong class="text-black subtotal-cart-price">$<?php echo number_format($final_price, 2); ?></strong>
								</div>
							</div>
							<div class="row mb-5">
								<div class="col-md-6">
									<span class="text-black">Total</span>
								</div>
								<div class="col-md-6 text-right">
									<strong class="text-black total-cart-price">$<?php echo number_format($final_price, 2); ?></strong>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<button class="btn btn-black btn-lg py-3 btn-block" onclick="window.location.href='index.php';">Finalizar compra</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Start Footer Section -->
	<footer class="footer-section">
		<div class="container relative">

			<div class="sofa-img">
				<img src="images/8-bit-sushi-cats-art-bdjin4h9ax5b3kbb.gif" alt="Image" class="img-fluid" id="bit-gif">
			</div>

			<div class="row">
				<div class="col-lg-8">
					<div class="subscription-form">
						<h3 class="d-flex align-items-center"><span class="me-1"><img src="images/envelope-outline.svg" alt="Image" class="img-fluid"></span><span>Suscríbete para recibir noticias de nuestros productos!</span></h3>

						<form action="#" class="row g-3">
							<div class="col-auto">
								<input type="text" class="form-control" placeholder="Ingresa tu nombre">
							</div>
							<div class="col-auto">
								<input type="email" class="form-control" placeholder="Ingresa tu correo">
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
	<script src="js/cart.js"></script>
</body>
</html>