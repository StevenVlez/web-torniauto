<?php
include("db.php");
$id = $_GET ["id"];
$usuarios = "SELECT * FROM productos WHERE id = '$id'";
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
    <title>Actualizar</title>
    <meta name="viewport" content="width=device=width,user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimun.scale=1.0">
</head>
  <body>
    <form class="table_edit2" action="actualizar_productos.php" method="post">
        <div class="table__title-edit2">Productos</div>
        <div class="table__header">Nombre</div>
        <div class="table__header">Referencia</div>
        <div class="table__header">Marca</div>
        <div class="table__header">Codigo</div>
        <div class="table__header">Cantidad</div>
		<div class="table__header">Operación</div>
	<?php $resultado = mysqli_query($conex,$usuarios);
 while($row=mysqli_fetch_assoc($resultado)) { ?>    
        <input type="hidden" class="table__item" value="<?php echo $row["id"];?>" name="id"> 
        <div class="table__item"><?php echo $row["nombre"];?></div>
        <div class="table__item"><?php echo $row["referencia"];?></div>
        <div class="table__item"><?php echo $row["marca"];?></div>
        <div class="table__item"><?php echo $row["codigo"];?></div>
        <input type="number" class="table__input" value="<?php echo $row["cantidad"];?>" name="cantidad">
        <?php } mysqli_free_result($resultado);?>
        <input type="submit" value="Actualizar" class="act">
</div>

<footer>
		<h3>Elaborado por Steven Velez</h3>

	</footer>
</body>
</html>