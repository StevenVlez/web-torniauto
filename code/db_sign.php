<?php
include("db.php");
if (isset($_POST['registrar'])){
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['clave']) >= 1) {
    
        $nombre = trim($_POST['nombre']);
        $clave = trim($_POST['clave']);
        $consulta = "INSERT INTO `usuarios`(`nombre`,`clave`) VALUES ('$nombre','$clave')";
        $resultado = mysqli_query($conex,$consulta);
        if ($resultado) { 
           ?>
           <h3 class="ok">Datos ingresados correctamente</h3>
           <?php
         }else {
            ?>
            <h3 class="bad">errorsillo</h3>
        <?php
        }
    }
}
?>