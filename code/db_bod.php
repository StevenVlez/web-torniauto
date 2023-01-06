<?php
include("db.php");
if (isset($_POST['registrar'])){
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['ciudad']) >= 1 && strlen($_POST['direccion']) >= 1 && strlen($_POST['telefono']) >= 1) {
    
        $nombre = trim($_POST['nombre']);
        $ciudad = trim($_POST['ciudad']);
        $direccion = trim($_POST['direccion']);
        $telefono = trim($_POST['telefono']);
        $consulta = "INSERT INTO `bodega`(`nombre`, `ciudad`, `direccion`, `telefono`) VALUES ('$nombre','$ciudad','$direccion','$telefono')";
        $resultado = mysqli_query($conex,$consulta);
        if ($resultado) { 
           ?>
           <h3 class="ok">Datos ingresados correctamente</h3>
           <?php
         }else {
            ?>
            <h3 class="bad">errrrorsillo</h3>
        <?php
        }
    }
}
?>