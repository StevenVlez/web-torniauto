<?php
include("db.php");
$usuarios = "SELECT * FROM proveedor";
?>

<html lang="es">
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

<head>
    <meta charset="UTF-8">
    <title>Edicion</title>
    <meta name="viewport" content="width=device=width,user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimun.scale=1.0">
</head>
  <body>
	<main>
    <div class="table_edit">
        <div class="table__title-edit">Proveedores</div>
        <div class="table__header">Razon Social</div>
        <div class="table__header">NIT</div>
        <div class="table__header">Direccion</div>
        <div class="table__header">Telefono</div>
        <div class="table__header">Correo</div>
        <div class="table__header">Productos</div>
		<div class="table__header">Operación</div>
	<?php $resultado = mysqli_query($conex,$usuarios);
 while($row=mysqli_fetch_assoc($resultado)) { ?>
        <div class="table__item"><?php echo $row["nombre"];?></div>
        <div class="table__item"><?php echo $row["nit"];?></div>
        <div class="table__item"><?php echo $row["direccion"];?></div>
        <div class="table__item"><?php echo $row["telefono"];?></div>
        <div class="table__item"><?php echo $row["correo"];?></div>
        <div class="table__item"><?php echo $row["productos"];?></div>
		<div class="table__item">
			<a href="ac_prov.php?id=<?php echo $row["id"];?>" class=table__item__link>Editar </a> |

			<a href="el_prov.php?id=<?php echo $row["id"];?>" class=table__item__link2>Eliminar</a>
		</div>
        <?php } mysqli_free_result($resultado);?>	
		
		</main>
</div>
<script src="confirmacion.js"></script> 

<footer>
		<h3>Elaborado por Steven Velez</h3>

	</footer>

	</body>
</html>