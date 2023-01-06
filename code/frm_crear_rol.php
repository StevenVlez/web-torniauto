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

		<main>
			<h2><b>Crear Usuario</b></h2>
		
			<form class="form-user" action="frm_crear_rol.php" method="post" >
					<div class="input-wrapper">
						<label for="nombre">Usuario: </Label>
						<input type="text" name="nombre" required>
					</div>
			
					<div class="input-wrapper">
						<label for="clave">clave: </Label>
						<input type="text" name="clave" required>
					</div>
			
							
					<div class="buttons">
					<button id="submit-button" type="reset">Cancelar</button>
					<button id="submit-button" type="submit" name="registrar">Crear</button>
					</div>
					
				</form>

				<?php
	include("db_sign.php");
	?>
		</main>
	</div>

	

	<footer>
		<h3>Pie de pagina</h3>

	</footer>

</body>

</html>
