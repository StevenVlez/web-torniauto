<?php
include ("db.php");

$id = $_POST['id'];
$cantidad = $_POST['cantidad'];

$actualizar = "UPDATE productos SET cantidad='$cantidad' WHERE id='$id'";
$resultado = mysqli_query($conex,$actualizar);

if ($resultado) { 
    echo "<script>alert('Los datos se han actualizado correctamente');
     window.location='/torniauto/frm_entradas.php';</script>";
 }else{
    echo "<script>alert('No se pudo actualizar los datos');
     window.location='/torniauto/frm_entradas.php';</script>";
 }
?>