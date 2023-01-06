<?php
include("db.php");
$id = $_GET ["id"];
$usuarios = "SELECT * FROM proveedor WHERE id = '$id'";
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
    <form class="table_edit" action="actualizar.php" method="post">
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
        <input type="hidden" class="table__item" value="<?php echo $row["id"];?>" name="id"> 
        <input type="text" class="table__input" value="<?php echo $row["nombre"];?>" name="nombre"> 
        <input type="text" class="table__input" value="<?php echo $row["nit"];?>"name="nit">
        <input type="text" class="table__input" value="<?php echo $row["direccion"];?>"name="direccion">
        <input type="text" class="table__input" value="<?php echo $row["telefono"];?>"name="telefono">
        <input type="text" class="table__input" value="<?php echo $row["correo"];?>" name="correo">
        <input type="text" class="table__input" value="<?php echo $row["productos"];?>"name="productos">
        <?php } mysqli_free_result($resultado);?>
        <input type="submit" value="Actualizar" class="act">
</div>

<footer>
		<h3>Elaborado por Steven Velez</h3>

	</footer>
</body>
</html>