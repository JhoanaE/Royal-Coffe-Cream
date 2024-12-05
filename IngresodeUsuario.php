<?php
session_start();
if(isset($_SESSION['nombre_cliente'])) {
    $nombre_cliente = $_SESSION['nombre_cliente'];
} else {
    $nombre_cliente = 'Invitado';
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1.0"
		/>
		<title>ROYAL COFFEE CREAM</title>
		<link rel="shortcut icon" href="../Images/WhatsApp Image 2024-05-26 at 6.48.38 PM (1).jpeg" type="image/x-icon">
		<link rel="stylesheet" href="./stylesIngreso.css">
		
	</head>
	<body>
		<header>
		<div class="container-hero">
				<div class="container hero">
					<div class="customer-support">
						<br>
					</div>
					<div class="container-logo">
					<h1 class="logo"> ROYAL COFFEE CREAM </h1><br>
					</div>
				</div>
			</div>

			<div class="container-navbar">
				<nav class="navbar container">
					<i class="fa-solid fa-bars"></i>
					<ul class="menu">
						<li><a href="#1">CATEGORIAS</a></li><br>
					</ul>

					<form class="search-form">
					 <h1>   <?php echo htmlspecialchars($nombre_cliente); ?>  !</h2></h1> 
						<button class="btn-search">
							<i class="fa-solid fa-user"> <a href="./perfil.php"></a>
							</i>
						</button>
					</form>

				</nav>
			</div>
		</header>

		<section class="banner">
			<div class="content-banner">
			<h2>Bienvenido, <?php echo htmlspecialchars($nombre_cliente); ?>!</h2>
				<h2>Descubre los productos mas destacados y especiales.</h2>
                <h2>Comienza tu pedido por medio del menu.</h2>
			</div>
		</section>
		<main class="main-content">
            

			<section class="container top-categories">
				<h1 class="heading-1" id="1">Categorías</h1>
				<div class="container-categories">
					<div class="card-category category-moca">
						<a href="./comida.php"><p>COMIDA</p></a>
					</div>
					<div class="card-category category-expreso">
						<a href="./Carrito/bebida.php"><p>BEBIDAS</p></a>
					</div>
					<div class="card-category category-capuchino">
						<a href="./dulces.php"><p>DULCES</p></a>
					</div>
				</div>
			</section>

		<footer class="footer">
			<div class="container container-footer">
				<div class="menu-footer">
					<div class="contact-info">
						<p class="title-footer">Información de Contacto</p>
						<ul>
							<li>
								Dirección: Universidad Tecnologica De Tecamac 
							</li>
							<li>Teléfono: 123-456-7890</li>
							<li>Fax: 55555300</li>
							<li>Email: fenixserver@support.com</li>
						</ul>
						<div class="social-icons">
							<span class="facebook">
								<i class="fa-brands fa-facebook-f"></i>
							</span>
							<span class="twitter">
								<i class="fa-brands fa-twitter"></i>
							</span>
							<span class="youtube">
								<i class="fa-brands fa-youtube"></i>
							</span>
							<span class="pinterest">
								<i class="fa-brands fa-pinterest-p"></i>
							</span>
							<span class="instagram">
								<i class="fa-brands fa-instagram"></i>
							</span>
						</div>
					</div>
                    <div class="newsletter">
						<p class="title-footer">Acerca de</p>

						<div class="content">
							<p>
								proyecto dedicado a una mejor accesibilidad 
                                para la cafeteria de la Universidad Tecnologica De Tecamac
							</p>
						</div>
					</div>
				</div>
				<div class="copyright">
					<p>
						© 2024 Copyright: UTTECAMAC.com
					</p>
					<button type="submit" class="bot"><a href="./inic.php"> <center>Cerrar Sesión</center></button></a>
				</div>
			</div>
		</footer>

		<script
			src="https://kit.fontawesome.com/81581fb069.js"
			crossorigin="anonymous"
		></script>
	</body>
</html>