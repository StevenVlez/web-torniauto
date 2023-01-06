<?php
include ("db.php");

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$nit = $_POST['nit'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$productos = $_POST['productos'];

$actualizar = "UPDATE proveedor SET nombre='$nombre', nit='$nit', direccion='$direccion',
telefono='$telefono', correo='$correo', productos='$productos' WHERE id='$id'";
$resultado = mysqli_query($conex,$actualizar);

if ($resultado) { 
    echo "<script>alert('Los datos se han actualizado correctamente');
     window.location='/torniauto/clt_proveedor.php';</script>";
 }else{
    echo "<script>alert('No se pudo actualizar los datos');
     window.location='/torniauto/clt_proveedor.php';</script>";
 }
?>