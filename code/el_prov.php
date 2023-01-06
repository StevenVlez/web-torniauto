<?php
include ("db.php");

$id = $_GET['id'];
$eliminar = "DELETE FROM proveedor WHERE id = '$id'";

$resultadoEliminar = mysqli_query($conex,$eliminar);


if ($resultadoEliminar) { 
    header ("Location: mod_proveedor.php");
}else{    
    echo "<script>alert('No se pudo eliminar');
     window.location='/torniauto/clt_proveedor.php';</script>";
}

?>