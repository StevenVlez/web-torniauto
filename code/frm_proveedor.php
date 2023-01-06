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
					<a href="frm_Products.php">Productos</a>
				</li>
				<li>
					<a href="frm_Bodegas.php">Bodegas</a>
				</li>
				<li>
					<a href="frm_Entradas.php">Entradas</a>
				</li>
				<li>
					<a href="frm_Salidas.php">Salidas</a>
				</li>
                <li>
					<a href="frm_crear_rol.php">Crear Usuario</a>
				</li>
			</ul>
		</nav>

<!-- Cuerpo -->

		<main>
			<h2>Proveedores</h2>
		
				<form class="form-proveedor" action="frm_proveedor.php" method="post">
					<div class="input-wrapper">
						<label for="nombre">Razon Social: </Label>
						<input type="text" name="nombre" required>
					</div>
					<div class="input-wrapper">
						<label for="nit">Nit: </Label>
						<input type="number" name="nit" required>
					</div>
					
					<div class="input-wrapper">
						<label for="direccion">Direccion: </Label>
						<input type="text" name="direccion" required>
					</div>
					
					<div class="input-wrapper">
						<label for="telefono">Telefono: </Label>
						<input type="number" name="telefono" required>
					</div>
					<div class="input-wrapper">
						<label for="correo">Correo electrónico: </Label>
						<input type="email" name="correo" required>
					</div>
					<div class="input-wrapper">
						<label for="productos">Productos: </Label>
						<input type="texto" name="productos" required>
					</div>
			
					<div class="buttons">
						<button id="submit-button" type="reset">Cancelar</button>
						<button id="submit-button" type="submit" name="registrar">Crear</button>
						<button onclick="location.href='clt_proveedor.php'">Consultar Proveedores</button>
					</div>
				</form>
	<?php
	include("db_prov.php");
	?>
	
		</main>
	</div>

	

	<footer>
	<h3>Elaborado por Steven Velez</h3>

	</footer>

</body>



</html>
