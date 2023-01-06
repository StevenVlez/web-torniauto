<html>
		<head>
			<link rel="stylesheet" href="../css/style.css">
			</link>
		</head>

<body>

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
			<h2>Bodegas </h2>

			<form class="form-bodega" action="frm_bodegas.php" method="post">
					<div class="input-wrapper">
						<label for="nombre">Nombre: </Label>
						<input type="text" name="nombre" required>
					</div>
					<div class="input-wrapper">
						<label for="ciudad">Ciudad: </Label>
						<input type="text" name="ciudad" required>
					</div>
					
					<div class="input-wrapper">
						<label for="direccion">Dirección: </Label>
						<input type="text" name="direccion" required>
					</div>
					
					<div class="input-wrapper">
						<label for="telefono">Telefono: </Label>
						<input type="number" name="telefono" required>
					</div>
								
					<div class="buttons">
						<button id="submit-button" type="reset">Cancelar</button>
						<button id="submit-button" type="submit" name="registrar">Crear</button>
						<button onclick="location.href='clt_bodegas.php'">Consultar Bodegas</button>
					</div>
				</form>

				<?php
	include("db_bod.php");
	?>
	
		</main>
	</div>

	

	<footer>
	<h3>Elaborado por Steven Velez</h3>

	</footer>

</body>

</html>
