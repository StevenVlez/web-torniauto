<html>
		<head>
			<link rel="stylesheet" href="../css/style.css">
			</link>
		</head>

<body>
<!-- Menu -->
	<header>
			<img src="../img/logo torniautozv.png" width="200" height="100" >
	</header>

	<div class="wrapper">
		<nav>
			<h2>Menu</h2>
			<ul>
				<li>
					<a href="principal.php">Inicio</a>
				</li>
				<li>
					<a href="frm_proveedor.php">Proveedores</a>
				</li>
				<li>
					<a href="frm_products.php">Productos</a>
				</li>
				<li>
					<a href="frm_bodegas.php">Bodegas</a>
				</li>
				<li>
					<a href="frm_entradas.php">Entradas</a>
				</li>
				<li>
					<a href="frm_salidas.php">Salidas</a>
				</li>
                <li>
					<a href="frm_crear_rol.php">Crear Usuario</a>
				</li>
			</ul>
		</nav>

<!-- Cuerpo -->

		<main>
			<h2>Productos</h2>
		
				<form class="form-products" action="frm_products.php" method="post">
					<div class="input-wrapper">
						<label for="nombre">Nombre producto: </Label>
						<input type="text" name="nombre" required>
					</div>
			
					<div class="input-wrapper">
						<label for="referencia">Referencia: </Label>
						<input type="text" name="referencia" required>
					</div>
					
					<div class="input-wrapper">
						<label for="marca">Marca: </Label>
						<input type="text" name="marca" required>
					</div>
					
					<div class="input-wrapper">
						<label for="codigo de barras">Codigo de Barras: </Label>
						<input type="text" name="codigo" required>
					</div>
				
					
					<div class="input-wrapper">
						<label for="cantidad">Cantidad: </Label>
						<input type="number" name="cantidad" required>
					</div>
				
					<div class="buttons">
						<button id="submit-button" type="reset">Cancelar</button>
						<button id="submit-button" type="submit" name="registrar">Crear</button>
						<button onclick="location.href='clt_products.php'">Consultar Productos</button>
					</div>
					
				</form>

				<?php
	include("db_product.php");
	?>
		</main>
	</div>

	

	<footer>
		<h3>Elaborado por Steven Velez</h3>

	</footer>

</body>

</html>
