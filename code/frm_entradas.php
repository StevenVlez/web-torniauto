<?php
include("db.php");
$usuarios = "SELECT * FROM productos";
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
    <title></title>
    <meta name="viewport" content="width=device=width,user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimun.scale=1.0">
</head>
  <body>
	<main>
    <div class="table_edit2">
        <div class="table__title-edit2">Entrada de productos</div>
        <div class="table__header">Nombre</div>
        <div class="table__header">Referencia</div>
        <div class="table__header">Marca</div>
        <div class="table__header">Codigo</div>
        <div class="table__header">Cantidad</div>
        <div class="table__header">Operacion</div>
 <?php $resultado = mysqli_query($conex,$usuarios);
 while($row=mysqli_fetch_assoc($resultado)) { ?>
    <div class="table__item"><?php echo $row["nombre"];?></div>
    <div class="table__item"><?php echo $row["referencia"];?></div>
    <div class="table__item"><?php echo $row["marca"];?></div>
    <div class="table__item"><?php echo $row["codigo"];?></div>
    <div class="table__item"><?php echo $row["cantidad"];?></div>
	<div class="table__item">
    <a href="ac_prod.php?id=<?php echo $row["id"];?>" class=table__item__link>Editar </a> |
	<a href="el_prod.php?id=<?php echo $row["id"];?>" class=table__item__link2> Eliminar</a>
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