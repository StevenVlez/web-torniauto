<?php
include ("db.php");

$id = $_GET['id'];
$eliminar = "DELETE FROM productos WHERE id = '$id'";

$resultadoEliminar = mysqli_query($conex,$eliminar);


if ($resultadoEliminar) { 
    header ("Location: frm_entradas.php");
}else{    
    echo "<script>alert('No se pudo eliminar');
     window.location='/torniauto/frm_entradas.php';</script>";
}

?>