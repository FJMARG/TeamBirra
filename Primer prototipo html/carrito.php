
<?php
session_start();
$productos = [

	0 => [
		"nombre" =>"Ipa Andina",
		"marca" =>"Andes",
		"imagen" => "images/andes.png",
		"enOferta" => true,
		"esNovedad" => true,
		"precio" => 85,
		"descripcion" =>"descripcion Lorem ipsum dolor sit amet descripcion Lorem ipsum dolor sit amet descripcion Lorem ipsum dolor sit amet descripcion Lorem ipsum dolor sit amet descripcion Lorem ipsum dolor sit amet descripcion Lorem ipsum dolor sit amet ",
		"color" => "Dorado",
		"Estilo" => "Blonde",
		"Origen" => "Argentina"
	],
	1 => [
		"nombre" =>"Andes Rubia",
		"marca" =>"Andes",
		"imagen" => "images/andesR.png",
		"enOferta" => true,
		"esNovedad" => true,
		"precio" => 80,
		"descripcion" => "descripcion Lorem ipsum dolor sit amet ",
		"color " => "Dorado",
		"Estilo" => "Blonde",
		"Origen" => "Argentina"
	],
	2 => [
		"nombre" =>"Brahma Rubia",
		"marca" =>"Brahma",
		"imagen" => "images/brahma.png",
		"enOferta" => true,
		"esNovedad" => true,
		"precio" => 45,
		"descripcion" => "descripcion Lorem ipsum dolor sit amet ",
		"color " => "Dorado",
		"Estilo" => "Blonde",
		"Origen" => "Brasil"
	]
]; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<title>Team Birra | Carrito</title>
	<?=!include_once('head.php'); ?>
</head>


<body>

	<!-- cabecera -->
	<?=!include_once('socialBar.php'); ?>
	<?=!include_once('header.php'); ?>



	<!--  productos -->


	<div class="container">
		<div class="titulo-carrito">
			<h2>TU CARRITO</h2>
		</div>

		<div class="contenedor-compra col-12 col-sm-12 col-md-12 col-lg-12 ">


			<?php $sumarTotal=0; ?>
			<?php foreach ($productos as $producto) : ?>
				<div class="articulo">

					<!-- Eliminar un producto -->
					<div class="eliminar-articulo col-12 col-sm-12 col-md-12 col-lg-12 ">
						<div class=" col-11 col-sm-11 col-md-11 col-lg-11" ></div>
						<div class="eliminar-imagen col-1 col-sm-1 col-md-1 col-lg-1 ">
							<a href="#">
								<img src="images/eliminar.svg" alt="">
							</a>
						</div>

					</div>

					<!-- imagen del producto -->
					<div class="imagen-articulo col-12 col-sm-2 col-md-2 col-lg-2">
						<img src="<?php echo $producto["imagen"] ?>" alt="pdto 01">
					</div>

					<!-- descripcion del producto -->
					<div class="descripcion-articulo col-12 col-sm-5 col-md-5 col-lg-5">
						<div class="nombre-Producto">
							<h2><?php echo $producto["nombre"]; ?></h2>
						</div>
						<!-- marca del producto -->
						<div class="marca-articulo">
							<h5><?php echo $producto["marca"]; ?></h5>
						</div>

					</div>

					<!-- modificador de cantidad -->
					<div class="cantidad-articulo col-6 col-sm-2 col-md-2 col-lg-2">
						<samp class="sumar-restar-articulo col-4 col-sm-4 col-md-4 col-lg-4"><a href="#">-</a></samp>
						<samp class="sumar-restar-cantidad col-4 col-sm-4 col-md-4 col-lg-4"><label for="">1</label></samp>
						<samp class="sumar-restar-articulo col-4 col-sm-4 col-md-4 col-lg-4"><a href="#">+</a></samp>
					</div>

					<!-- precio del producto -->
					<div class="precio-articulo col-6 col-sm-3 col-md-3 col-lg-3">
						$ <?php echo $producto["precio"]; ?>
					</div>

				</div>


				<?php $sumarTotal+=$producto["precio"] ?>
			<?php endforeach ?>
		</div>


		<!-- vaciar carrito -->
		<div class="vaciar-carrito col-6 col-sm-6 col-md-6 col-lg-6">
			<a href="#">
				Vaciar carrito
			</a>
		</div>

		<!-- costos total de productos -->
		<div class="costoTotal col-6 col-sm-6 col-md-6 col-lg-6">
			<span >TOTAL:</span> <span> $<?php echo $sumarTotal ?></span>
		</div>


		<!-- realizar compra -->
		<div class="boton-realizar-compra col-12 col-sm-12 col-md-12 col-lg-12">
			<a href="catalogo.php">
				<div class="click">
					COMPRAR
				</div>
			</a>
		</div>

	</div>
	<footer class="main-footer">
		<?=!include_once('footer.php'); ?>
	</footer>

	<?=!include_once('scripts.php'); ?>
</body>
</html>
