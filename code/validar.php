<?php
include("db.php");

$nombre = $_POST['nombre'];
$clave = $_POST['clave'];

$consulta="SELECT * FROM usuarios WHERE nombre='$nombre' and clave='$clave'";
$resultado=mysqli_query($conex,$consulta);

$filas=mysqli_num_rows($resultado);


if($filas) { 
    header("Location:principal.php");
 }else{
    ?>
    <?php
    include("index.php");
    ?>
    <script>alert('No se pudo iniciar sesion')</script>
    <?php
 }




/*
$filas=mysqli_num_rows($resultado);
if ($filas>0) {
    header("Location:'/torniauto/principal.php");
}else{
echo "Error en la autenticacion";
}*/

?>